<?php

namespace App\Livewire;

use App\Models\BlockedEnquiryUser;
use App\Models\EnquiryMaster;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
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
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EnquiryTable extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected $listeners = ['resetTable', 'blockedUsersUpdated' => '$refresh'];

    protected ?SupportCollection $activeBlocksCache = null;

    protected function getActiveBlocks(): SupportCollection
    {
        if ($this->activeBlocksCache === null) {
            $this->activeBlocksCache = BlockedEnquiryUser::query()
                ->where('is_active', true)
                ->get(['email', 'contact', 'ip_address']);
        }

        return $this->activeBlocksCache;
    }

    protected function isRecordBlocked(EnquiryMaster $record): bool
    {
        $normEmail = BlockedEnquiryUser::normalizeEmail($record->email);
        $normContact = BlockedEnquiryUser::normalizeContact($record->contact);
        $normIp = BlockedEnquiryUser::normalizeIp($record->ip_address);

        return $this->getActiveBlocks()->contains(function ($block) use ($normEmail, $normContact, $normIp) {
            return ($normEmail !== null && $block->email === $normEmail)
                || ($normContact !== null && $block->contact === $normContact)
                || ($normIp !== null && $block->ip_address === $normIp);
        });
    }

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

                TextColumn::make('block_status')
                    ->label('Status')
                    ->badge()
                    ->state(fn (EnquiryMaster $record): string => $this->isRecordBlocked($record) ? 'Blocked' : 'Active')
                    ->color(fn (string $state): string => $state === 'Blocked' ? 'danger' : 'success'),

                TextColumn::make('message')
                    ->limit(40)
                    ->tooltip(fn (EnquiryMaster $record): ?string => $record->message)
                    ->searchable()
                    ->label('Message'),

                TextColumn::make('created_at')
                    ->dateTime('d M Y h:i A')
                    ->sortable()
                    ->label('Enquiry Date'),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Form Type')
                    ->options([
                        'Contact' => 'Contact',
                        'Demo' => 'Demo',
                        'Business' => 'Business',
                    ]),
            ])
            ->headerActions([])
            ->actions([
                ActionGroup::make([
                    ViewAction::make()
                        ->label('View Details')
                        ->icon('heroicon-o-eye')
                        ->form([
                            Grid::make(2)->schema([
                                TextInput::make('name')->label('Name')->disabled(),
                                TextInput::make('email')->label('Email')->disabled(),
                                TextInput::make('contact')->label('Contact')->disabled(),
                                TextInput::make('company_name')->label('Company')->disabled(),
                                TextInput::make('region')->label('Region')->disabled(),
                                TextInput::make('requirement')->label('Requirement')->disabled(),
                                TextInput::make('type')->label('Form Type')->disabled(),
                                TextInput::make('ip_address')->label('IP Address')->disabled(),
                                TextInput::make('created_at')
                                    ->label('Enquiry Date')
                                    ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->format('d M Y h:i A') : '')
                                    ->disabled(),
                            ]),
                            Textarea::make('message')
                                ->label('Message / Details')
                                ->rows(4)
                                ->disabled()
                                ->columnSpanFull(),
                        ]),

                    Action::make('block_user')
                        ->label('Block User')
                        ->icon('heroicon-o-no-symbol')
                        ->color('danger')
                        ->hidden(fn (EnquiryMaster $record): bool => $this->isRecordBlocked($record))
                        ->form(fn (EnquiryMaster $record): array => [
                            Checkbox::make('block_email')
                                ->label('Block Email: ' . ($record->email ?: 'N/A'))
                                ->default(!empty($record->email))
                                ->disabled(empty($record->email)),
                            Checkbox::make('block_contact')
                                ->label('Block Phone / Contact: ' . ($record->contact ?: 'N/A'))
                                ->default(!empty($record->contact))
                                ->disabled(empty($record->contact)),
                            Checkbox::make('block_ip')
                                ->label('Block IP Address: ' . ($record->ip_address ?: 'Not captured'))
                                ->default(false)
                                ->disabled(empty($record->ip_address)),
                            Textarea::make('reason')
                                ->label('Reason (Optional)')
                                ->placeholder('e.g. Spam bot / duplicate flood / invalid lead')
                                ->rows(2)
                                ->maxLength(500),
                            Checkbox::make('delete_existing')
                                ->label('Also delete all existing enquiries from this user')
                                ->default(false),
                        ])
                        ->action(function (EnquiryMaster $record, array $data): void {
                            $email = !empty($data['block_email']) ? $record->email : null;
                            $contact = !empty($data['block_contact']) ? $record->contact : null;
                            $ip = !empty($data['block_ip']) ? $record->ip_address : null;

                            if (empty($email) && empty($contact) && empty($ip)) {
                                Notification::make()
                                    ->title('Select at least one identifier (email, phone, or IP) to block.')
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

                            if (!empty($data['delete_existing'])) {
                                $this->deleteEnquiriesForSender($email, $contact, $ip);
                            }

                            $this->activeBlocksCache = null;
                            $this->dispatch('blockedUsersUpdated');

                            Notification::make()
                                ->title('User blocked quietly. Future enquiries from them will be ignored.')
                                ->success()
                                ->send();
                        }),

                    Action::make('unblock_user')
                        ->label('Unblock User')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->visible(fn (EnquiryMaster $record): bool => $this->isRecordBlocked($record))
                        ->requiresConfirmation()
                        ->modalHeading('Unblock this user?')
                        ->modalDescription('Future enquiries from this user\'s email, contact, or IP will be accepted again.')
                        ->action(function (EnquiryMaster $record): void {
                            BlockedEnquiryUser::unblockIdentifiers($record->email, $record->contact, $record->ip_address);
                            $this->activeBlocksCache = null;
                            $this->dispatch('blockedUsersUpdated');

                            Notification::make()
                                ->title('User unblocked.')
                                ->success()
                                ->send();
                        }),

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
                    BulkAction::make('block_selected')
                        ->label('Block Selected Users')
                        ->icon('heroicon-o-no-symbol')
                        ->color('danger')
                        ->form([
                            Textarea::make('reason')
                                ->label('Reason (Optional)')
                                ->placeholder('e.g. Spam / duplicate submissions')
                                ->rows(2)
                                ->maxLength(500),
                            Checkbox::make('delete_existing')
                                ->label('Also delete all enquiries matching the selected users')
                                ->default(false),
                        ])
                        ->action(function (Collection $records, array $data): void {
                            foreach ($records as $record) {
                                BlockedEnquiryUser::blockIdentifier(
                                    $record->email,
                                    $record->contact,
                                    $record->ip_address,
                                    $data['reason'] ?? null,
                                    Auth::id()
                                );

                                if (!empty($data['delete_existing'])) {
                                    $this->deleteEnquiriesForSender($record->email, $record->contact, $record->ip_address);
                                }
                            }

                            $this->activeBlocksCache = null;
                            $this->dispatch('blockedUsersUpdated');

                            Notification::make()
                                ->title('Selected users blocked quietly.')
                                ->success()
                                ->send();
                        })
                        ->deselectRecordsAfterCompletion(),

                    BulkAction::make('delete')
                        ->label('Delete Selected')
                        ->icon('heroicon-o-trash')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->delete())
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
                                    'region' => 'Region',
                                    'requirement' => 'Requirement',
                                    'type' => 'Type',
                                    'ip_address' => 'IP Address',
                                    'message' => 'Message',
                                    'created_at' => 'Date',
                                ])
                                ->default(['id', 'name', 'email', 'contact', 'company_name', 'region', 'requirement', 'type', 'message', 'created_at'])
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
                                    'region' => 'Region',
                                    'requirement' => 'Requirement',
                                    'type' => 'Type',
                                    'ip_address' => 'IP Address',
                                    'message' => 'Message',
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

    protected function deleteEnquiriesForSender(?string $email, ?string $contact, ?string $ip): void
    {
        $normEmail = BlockedEnquiryUser::normalizeEmail($email);
        $normContact = BlockedEnquiryUser::normalizeContact($contact);
        $normIp = BlockedEnquiryUser::normalizeIp($ip);

        if ($normEmail === null && $normContact === null && $normIp === null) {
            return;
        }

        EnquiryMaster::query()
            ->get(['id', 'email', 'contact', 'ip_address'])
            ->each(function (EnquiryMaster $item) use ($normEmail, $normContact, $normIp) {
                $matches = ($normEmail !== null && BlockedEnquiryUser::normalizeEmail($item->email) === $normEmail)
                    || ($normContact !== null && BlockedEnquiryUser::normalizeContact($item->contact) === $normContact)
                    || ($normIp !== null && BlockedEnquiryUser::normalizeIp($item->ip_address) === $normIp);

                if ($matches) {
                    $item->delete();
                }
            });
    }

    public function render(): View
    {
        return view('livewire.enquiry-table');
    }
}
