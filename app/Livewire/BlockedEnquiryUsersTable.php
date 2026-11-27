<?php

namespace App\Livewire;

use App\Models\BlockedEnquiryUser;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
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
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BlockedEnquiryUsersTable extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected $listeners = ['blockedUsersUpdated' => '$refresh', 'resetTable'];

    public function table(Table $table): Table
    {
        return $table
            ->query(BlockedEnquiryUser::query()->orderBy('created_at', 'desc'))
            ->columns([
                TextColumn::make('index')
                    ->label('S.No.')
                    ->rowIndex(),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->placeholder('—')
                    ->label('Blocked Email'),

                TextColumn::make('contact')
                    ->searchable()
                    ->sortable()
                    ->placeholder('—')
                    ->label('Blocked Contact'),

                TextColumn::make('ip_address')
                    ->searchable()
                    ->sortable()
                    ->placeholder('—')
                    ->label('Blocked IP'),

                TextColumn::make('reason')
                    ->limit(45)
                    ->tooltip(fn (BlockedEnquiryUser $record): ?string => $record->reason)
                    ->placeholder('—')
                    ->label('Reason'),

                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active Block'),

                TextColumn::make('created_at')
                    ->dateTime('d M Y h:i A')
                    ->sortable()
                    ->label('Blocked At'),
            ])
            ->filters([
                TernaryFilter::make('is_active')
                    ->label('Block Status')
                    ->trueLabel('Active Blocks')
                    ->falseLabel('Unblocked'),
            ])
            ->headerActions([
                Action::make('add_block')
                    ->label('Block Email / Phone / IP')
                    ->icon('heroicon-o-no-symbol')
                    ->color('danger')
                    ->extraAttributes(['style' => 'background-color: #dc2626; color: #ffffff;'])
                    ->form([
                        Grid::make(2)->schema([
                            TextInput::make('email')
                                ->email()
                                ->label('Email Address')
                                ->placeholder('spam@example.com'),
                            TextInput::make('contact')
                                ->label('Phone / Contact Number')
                                ->placeholder('9876543210'),
                            TextInput::make('ip_address')
                                ->label('IP Address (Optional)')
                                ->placeholder('e.g. 192.168.1.1'),
                        ]),
                        Textarea::make('reason')
                            ->label('Reason (Optional)')
                            ->placeholder('Spam bot / duplicate flood / invalid lead')
                            ->rows(2)
                            ->maxLength(500),
                    ])
                    ->action(function (array $data): void {
                        $email = BlockedEnquiryUser::normalizeEmail($data['email'] ?? null);
                        $contact = BlockedEnquiryUser::normalizeContact($data['contact'] ?? null);
                        $ip = BlockedEnquiryUser::normalizeIp($data['ip_address'] ?? null);

                        if ($email === null && $contact === null && $ip === null) {
                            Notification::make()
                                ->title('Please enter at least an email, phone number, or IP address.')
                                ->danger()
                                ->send();
                            return;
                        }

                        BlockedEnquiryUser::blockIdentifier(
                            $email,
                            $contact,
                            $ip,
                            $data['reason'] ?? null,
                            Auth::id()
                        );

                        $this->dispatch('blockedUsersUpdated');

                        Notification::make()
                            ->title('User blocked from submitting enquiries.')
                            ->success()
                            ->send();
                    }),
            ])
            ->actions([
                ActionGroup::make([
                    Action::make('toggle_block')
                        ->label(fn (BlockedEnquiryUser $record): string => $record->is_active ? 'Unblock' : 'Re-block')
                        ->icon(fn (BlockedEnquiryUser $record): string => $record->is_active ? 'heroicon-o-check-circle' : 'heroicon-o-no-symbol')
                        ->color(fn (BlockedEnquiryUser $record): string => $record->is_active ? 'success' : 'danger')
                        ->requiresConfirmation()
                        ->action(function (BlockedEnquiryUser $record): void {
                            $record->update(['is_active' => !$record->is_active]);
                            $this->dispatch('blockedUsersUpdated');
                        }),

                    EditAction::make()
                        ->form([
                            Grid::make(2)->schema([
                                TextInput::make('email')->email()->label('Email Address'),
                                TextInput::make('contact')->label('Phone / Contact Number'),
                                TextInput::make('ip_address')->label('IP Address'),
                            ]),
                            Textarea::make('reason')->label('Reason')->rows(2)->maxLength(500),
                        ])
                        ->mutateFormDataUsing(function (array $data): array {
                            $data['email'] = BlockedEnquiryUser::normalizeEmail($data['email'] ?? null);
                            $data['contact'] = BlockedEnquiryUser::normalizeContact($data['contact'] ?? null);
                            $data['ip_address'] = BlockedEnquiryUser::normalizeIp($data['ip_address'] ?? null);
                            return $data;
                        })
                        ->after(fn () => $this->dispatch('blockedUsersUpdated')),

                    Action::make('delete')
                        ->label('Delete Rule')
                        ->icon('heroicon-o-trash')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(function (BlockedEnquiryUser $record): void {
                            $record->delete();
                            $this->dispatch('blockedUsersUpdated');
                        }),
                ])->label('Actions'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    BulkAction::make('unblock_selected')
                        ->label('Unblock Selected')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->requiresConfirmation()
                        ->action(function (Collection $records): void {
                            $records->each->update(['is_active' => false]);
                            $this->dispatch('blockedUsersUpdated');
                        })
                        ->deselectRecordsAfterCompletion(),
                    BulkAction::make('delete')
                        ->label('Delete Selected')
                        ->icon('heroicon-o-trash')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(function (Collection $records): void {
                            $records->each->delete();
                            $this->dispatch('blockedUsersUpdated');
                        })
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.blocked-enquiry-users-table');
    }
}
