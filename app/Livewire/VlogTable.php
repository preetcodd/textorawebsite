<?php

namespace App\Livewire;

use App\Models\VlogMasters;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class VlogTable extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected $listeners = ['resetTable'];

    public function table(Table $table): Table
    {
        return $table
            ->query(VlogMasters::query())
            ->headerActions([
                Action::make('new_vlog')
                    ->label('New Vlog')
                    ->icon('heroicon-o-plus')
                    ->color('primary')
                    ->action(fn() => $this->dispatch('open-modal', id: 'create-vlog-modal')),
            ])
            ->columns([
                TextColumn::make('index')
                    ->label('S.No.')
                    ->rowIndex(),

                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->size(80)
                    ->square(),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                // ✅ DATE COLUMN ADDED
                TextColumn::make('date')
                    ->label('Date')
                    ->date('d M Y')   // Format: 05 Dec 2025
                    ->sortable(),

                TextColumn::make('is_published')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => $state ? 'Published' : 'Unpublished')
                    ->badge()
                    ->colors([
                        'success' => fn($state) => $state == 1,
                        'danger' => fn($state) => $state == 0,
                    ]),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make()
                        ->form(function (Form $form, VlogMasters $record): Form {
                            return $form->schema([
                                Grid::make()
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Image')
                                            ->image()
                                            ->disk('public')
                                            ->directory('vlogs') // Adjust directory as needed
                                            ->imageEditor()
                                            ->default($record->image)
                                            ->required(),
                                        TextInput::make('title')
                                            ->default($record->title)
                                            ->required(),
                                        TextInput::make('date')
                                            ->default($record->date)
                                            ->required()
                                            ->label('Date'),
                                        TextInput::make('description')
                                            ->default($record->description)
                                            ->required()
                                            ->label('Description'),
                                    ])
                                    ->columns(2),
                            ]);
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
        return view('livewire.vlog-table');
    }
}