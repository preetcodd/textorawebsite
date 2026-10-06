<?php

namespace App\Livewire;

use App\Models\EnquiryMaster;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class EnquiryTable extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected $listeners = ['resetTable'];

    public function table(Table $table): Table
    {
        return $table
            ->query(EnquiryMaster::query()->orderBy('created_at', 'desc'))
            ->columns([
                TextColumn::make('index')
                    ->label('S.No.')
                    ->rowIndex(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Name'),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label('Email'),

                TextColumn::make('contact')
                    ->searchable()
                    ->sortable()
                    ->label('Contact'),

                // TextColumn::make('region')
                //     ->searchable()
                //     ->sortable()
                //     ->label('Region'),

                TextColumn::make('company_name')
                    ->searchable()
                    ->sortable()
                    ->label('Company'),

                TextColumn::make('requirement')
                    ->searchable()
                    ->sortable()
                    ->label('Requirement'),

                TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->label('Type'),

                TextColumn::make('created_at')
                    ->dateTime('d M Y h:i A')
                    ->sortable()
                    ->label('Enquiry Date'),
            ])
            ->filters([])
            ->headerActions([
                // Action::make('new_enquiry')
                //     ->label('New Enquiry')
                //     ->icon('heroicon-o-plus')
                //     ->color('primary')
                //     ->action(function () {
                //         $this->dispatch('open-modal', id: 'create-enquiry-modal');
                //     }),
            ])
            ->actions([
                ActionGroup::make([

                    Action::make('delete')
                        ->label('Delete')
                        ->icon('heroicon-o-trash')
                        ->requiresConfirmation()
                        ->color('danger')
                        ->action(function (EnquiryMaster $record): void {
                            $record->delete();
                        }),
                ])->label('Actions'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    BulkAction::make('delete')
                        ->label('Delete Selected')
                        ->icon('heroicon-o-trash')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(fn(Collection $records) => $records->each->delete())
                        ->deselectRecordsAfterCompletion(),
                    BulkAction::make('export')
                        ->label('Export Excel')
                        ->icon('heroicon-o-arrow-down-tray')
                        ->color('success')
                        ->form([
                            CheckboxList::make('columns')
                                ->label('Select Columns to Export')
                                ->options([
                                    'id' => 'ID',
                                    'name' => 'Name',
                                    'email' => 'Email',
                                    'contact' => 'Contact',
                                    'company_name' => 'Company',
                                    'requirement' => 'Requirement',
                                    'type' => 'Type',
                                    'created_at' => 'Date',
                                ])
                                ->default(['id', 'name', 'email', 'contact', 'company_name', 'requirement', 'type', 'created_at'])
                                ->columns(2)
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $columns = $data['columns'];
                            return response()->streamDownload(function () use ($records, $columns) {
                                echo "\xEF\xBB\xBF";
                                $csv = fopen('php://output', 'w');

                                $headerLabels = [
                                    'id' => 'ID',
                                    'name' => 'Name',
                                    'email' => 'Email',
                                    'contact' => 'Contact',
                                    'company_name' => 'Company',
                                    'requirement' => 'Requirement',
                                    'type' => 'Type',
                                    'created_at' => 'Date',
                                ];

                                $headers = [];
                                foreach ($columns as $col) {
                                    $headers[] = $headerLabels[$col];
                                }
                                fputcsv($csv, $headers);

                                foreach ($records as $record) {
                                    $row = [];
                                    foreach ($columns as $col) {
                                        if ($col === 'created_at') {
                                            $row[] = $record->created_at?->format('d M Y H:i:s');
                                        } else {
                                            $row[] = $record->$col;
                                        }
                                    }
                                    fputcsv($csv, $row);
                                }
                                fclose($csv);
                            }, 'enquiries_export_' . date('Y-m-d_H-i-s') . '.csv');
                        })
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.enquiry-table');
    }
}
