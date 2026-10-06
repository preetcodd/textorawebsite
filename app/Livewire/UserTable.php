<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class UserTable extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected $listeners = ['resetTable'];

    public function table(Table $table): Table
    {
        return $table
            ->query(User::query())
            ->headerActions([
                Action::make('new_user')
                    ->label('New User')
                    ->icon('heroicon-o-plus')
                    ->color('primary')
                    ->action(function () {
                        $this->dispatch('open-modal', id: 'create-user-modal');
                    }),
            ])
            ->columns([
                TextColumn::make('index')
                    ->label('S.No.')
                    ->rowIndex(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Is Activated')
                    ->boolean(),
            ])
            ->filters([
                TernaryFilter::make('is_active'),
            ])
            ->actions([
                Actiongroup::make([
                    EditAction::make()
                        ->form(function (Form $form, User $record): Form {
                            $form->schema([
                                Grid::make()
                                    ->schema([
                                        TextInput::make('name')
                                            ->default($record->name)
                                            ->required(),
                                        TextInput::make('email')
                                            ->default($record->email)
                                            ->required(),
                                    ])
                                    ->columns(2),
                            ]);

                            return $form;
                        })
                        ->color('primary'),
                    Action::make('toggle_is_active')
                        ->label(fn(User $record): string => $record->is_active ? 'Deactivate' : 'Activate')
                        ->icon(fn(User $record): string => $record->is_active ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                        ->requiresConfirmation()
                        ->action(function (User $record): void {
                            $record->toggleIsActive();
                        }),
                    Action::make('delete')
                        ->label('Delete')
                        ->icon('heroicon-o-trash')
                        ->requiresConfirmation()
                        ->action(function (User $record): void {
                            $record->delete();
                        })
                        ->color('danger'),
                ])->label('Actions'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    BulkAction::make('toggle_is_active')
                        ->icon('heroicon-o-check-circle')
                        ->label('Toggle Active Status')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->action(function (Collection $records) {
                            $records->each(fn(User $record) => $record->toggleIsActive());
                        })
                        ->deselectRecordsAfterCompletion(),
                    BulkAction::make('delete')
                        ->icon('heroicon-o-trash')
                        ->label('Delete')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(fn(Collection $records) => $records->each->delete())
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.user-table');
    }
}
