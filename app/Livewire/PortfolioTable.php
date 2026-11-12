<?php

namespace App\Livewire;

use App\Models\PortfolioMaster;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PortfolioTable extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected $listeners = ['resetTable'];

    public function table(Table $table): Table
    {
        return $table
            ->query(PortfolioMaster::query()->orderBy('sort_order', 'asc')->orderBy('id', 'asc'))
            ->headerActions([
                Action::make('new_portfolio')
                    ->label('Add Portfolio Case Study')
                    ->icon('heroicon-o-plus')
                    ->color('primary')
                    ->action(fn() => $this->dispatch('open-modal', id: 'create-portfolio-modal')),
            ])
            ->columns([
                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                TextColumn::make('client_logo')
                    ->label('Logo')
                    ->html()
                    ->formatStateUsing(fn($state, PortfolioMaster $record) => '<img src="' . e($record->logo_url) . '" class="w-14 h-10 object-contain p-1 rounded-md bg-white border border-slate-200 shadow-2xs" alt="' . e($record->client_name) . '" />'),

                TextColumn::make('client_name')
                    ->label('Client')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('badge')
                    ->label('Industry Badge')
                    ->badge()
                    ->color('success')
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->limit(40)
                    ->tooltip(fn(PortfolioMaster $record): string => $record->title),

                TextColumn::make('category')
                    ->label('Filter Categories')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('impact_highlight')
                    ->label('Impact')
                    ->color('primary')
                    ->weight('medium'),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean()
                    ->sortable(),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make()
                        ->form(function (Form $form, PortfolioMaster $record): Form {
                            return $form->schema([
                                Grid::make(2)->schema([
                                    TextInput::make('client_name')
                                        ->label('Client Name')
                                        ->default($record->client_name)
                                        ->required(),

                                    TextInput::make('badge')
                                        ->label('Industry Badge (e.g. Real Estate CRM)')
                                        ->default($record->badge)
                                        ->required(),

                                    TextInput::make('category')
                                        ->label('Filter Categories (e.g. web, crm, cpaas, healthcare)')
                                        ->helperText('Keywords separated by space used by frontend filter tabs')
                                        ->default($record->category)
                                        ->required(),

                                    TextInput::make('sort_order')
                                        ->label('Display Order')
                                        ->numeric()
                                        ->default($record->sort_order)
                                        ->required(),

                                    TextInput::make('title')
                                        ->label('Case Study Title')
                                        ->default($record->title)
                                        ->columnSpanFull()
                                        ->required(),

                                    Textarea::make('description')
                                        ->label('Solution Description')
                                        ->default($record->description)
                                        ->rows(3)
                                        ->columnSpanFull()
                                        ->required(),

                                    TextInput::make('impact_highlight')
                                        ->label('Impact Highlight (e.g. +340% Lead Response Speed)')
                                        ->default($record->impact_highlight)
                                        ->required(),

                                    TextInput::make('impact_desc')
                                        ->label('Impact Subtext (e.g. 45,000+ Automated brochures sent)')
                                        ->default($record->impact_desc)
                                        ->required(),

                                    TextInput::make('tech_stack')
                                        ->label('Tech Stack (comma-separated tags: Laravel, MySQL, WhatsApp API)')
                                        ->default($record->tech_stack)
                                        ->columnSpanFull()
                                        ->required(),

                                    TextInput::make('project_url')
                                        ->label('Live URL / Case Study Link (Optional)')
                                        ->default($record->project_url),

                                    Toggle::make('is_published')
                                        ->label('Published on Website')
                                        ->default($record->is_published),

                                    FileUpload::make('new_logo')
                                        ->label('Replace Logo (Optional - upload to update image)')
                                        ->image()
                                        ->disk('public')
                                        ->directory('portfolios')
                                        ->imageEditor()
                                        ->columnSpanFull(),
                                ]),
                            ]);
                        })
                        ->using(function (PortfolioMaster $record, array $data): PortfolioMaster {
                            if (!empty($data['new_logo'])) {
                                $data['client_logo'] = $data['new_logo'];
                            }
                            unset($data['new_logo']);
                            $record->update($data);
                            return $record;
                        })
                        ->color('primary'),

                    DeleteAction::make(),
                ])
                ->label('Actions'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    BulkAction::make('toggle_is_published')
                        ->icon('heroicon-o-check-circle')
                        ->label('Toggle Published Status')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->action(
                            fn(Collection $records) =>
                            $records->each(
                                fn($record) =>
                                $record->update(['is_published' => !$record->is_published])
                            )
                        )
                        ->deselectRecordsAfterCompletion(),

                    BulkAction::make('delete')
                        ->icon('heroicon-o-trash')
                        ->label('Delete')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(
                            fn(Collection $records) =>
                            $records->each(fn($record) => $record->delete())
                        )
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.portfolio-table');
    }
}
