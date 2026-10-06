<?php

namespace App\Livewire;

use App\Models\PricingMaster;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\HtmlString;
use Livewire\Component;

class PricingTable extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected $listeners = ['resetTable'];

    /* =====================================================
        TABLE
    ===================================================== */

    public function table(Table $table): Table
    {
        return $table
            ->query(PricingMaster::query())

            /* ---------------- COLUMNS ---------------- */
            ->columns([
                TextColumn::make('index')->rowIndex(),

                TextColumn::make('service')->badge()->sortable(),

                TextColumn::make('subcategory')
                    ->formatStateUsing(fn($state) => str_replace('_', ' ', $state)),

                TextColumn::make('category')
                    ->label('Plan Type')
                    ->badge(),

                TextColumn::make('monthly_price')
                    ->label('Price')
                    ->money('INR'),

                // TextColumn::make('yearly_price')
                //     ->label('Yearly ₹')
                //     ->money('INR'),

                IconColumn::make('is_active')->boolean(),
            ])

            /* ---------------- FILTERS ---------------- */
            ->filters([
                SelectFilter::make('service')->options($this->getServices()),
                SelectFilter::make('category')
                    ->label('Plan Type')
                    ->options($this->getCategories()),
                TernaryFilter::make('is_active'),
            ])

            /* ---------------- HEADER ACTION ---------------- */
            ->headerActions([
                Action::make('new_pricing')
                    ->label('New Pricing')
                    ->icon('heroicon-o-plus')
                    ->action(fn() => $this->dispatch('open-modal', id: 'create-pricing-modal')),
            ])

            /* ---------------- ROW ACTIONS ---------------- */
            ->actions([
                ActionGroup::make([

                    /* ===== VIEW FEATURES ===== */
                    ViewAction::make()
                        ->label('View Features')
                        ->form(fn(Form $form, PricingMaster $record) => $form->schema([
                            Placeholder::make('features')
                                ->content(function () use ($record) {
                                    $features = collect($record->features ?? [])
                                        ->filter()
                                        ->values();

                                    if ($features->isEmpty()) {
                                        return new HtmlString('<span class="italic">No features available</span>');
                                    }

                                    return new HtmlString(
                                        '<ul class="space-y-2">' .
                                        $features->map(fn($f) => '<li>✔ ' . e($f) . '</li>')->implode('') .
                                        '</ul>'
                                    );
                                }),
                        ])),

                    /* ===== EDIT ===== */
                    EditAction::make()

                        /* LOAD DATA INTO FORM */
                        ->mountUsing(function (Form $form, PricingMaster $record) {
                            $form->fill([
                                'service' => $record->service,
                                'subcategory' => $record->subcategory,
                                'category' => $record->category,
                                'title' => $record->title,
                                'sub_title' => $record->sub_title,
                                'monthly_price' => $record->monthly_price,
                                'monthly_total_messages' => $record->monthly_total_messages,
                                'setup_cost' => $record->setup_cost,
'billing_type' => $record->billing_type,
'marketing_price' => $record->marketing_price,
'utility_price' => $record->utility_price,
                                'yearly_price' => $record->yearly_price,
                                'yearly_total_messages' => $record->yearly_total_messages,

                                // ✅ JSON → repeater rows
                                'features' => collect($record->features ?? [])
                                    ->map(fn($feature) => ['value' => $feature])
                                    ->toArray(),
                            ]);
                        })

                        ->form(fn(Form $form) => $form->schema([

                            /* NORMAL FIELDS (2 COLUMNS) */
                            Grid::make(2)->schema([
                                Select::make('service')
                                    ->options($this->getServices())
                                    ->required()
                                    ->reactive(),

                                Select::make('subcategory')
                                    ->options(
                                        fn($get) =>
                                        $this->getSubcategoriesForService($get('service'))
                                    )
                                    ->required(),

                                Select::make('category')
                                    ->options($this->getCategories())
                                    ->label('Plan Type')
                                    ->required(),

                                TextInput::make('title')->required(),
                                TextInput::make('sub_title')->nullable(),

                                // TextInput::make('yearly_price')->numeric()->required(),
                                // TextInput::make('yearly_total_messages')->numeric()->required(),
                            ]),

                           Section::make('Price Configuration')
    ->schema([

        Grid::make(2)->schema([

            TextInput::make('monthly_price')
                ->numeric()
                ->required()
                ->label('Price'),

            TextInput::make('monthly_total_messages')
                ->numeric()
                ->required()
                ->label(fn (Get $get) =>
                    str_contains(strtolower($get('service')), 'whatsapp')
                        ? 'Total Messages'
                        : 'Total SMS'
                ),

        ]),

        Grid::make(2)->schema([

            TextInput::make('setup_cost')
                ->numeric()
                ->label('Setup Cost'),

            Select::make('billing_type')
                ->label('Billing Type')
                ->options([
                    'MONTHLY' => 'MONTHLY',
                    'YEARLY' => 'YEARLY',
                    'ONE TIME' => 'ONE TIME',
                ]),

            TextInput::make('marketing_price')
                ->numeric()
                ->label('Marketing Price'),

            TextInput::make('utility_price')
                ->numeric()
                ->label('Utility Price'),

        ]),

    ]),
                                
                            /* ===== FEATURES : 2 INPUTS PER ROW ===== */
                            Repeater::make('features')
                                ->label('Features')
                                ->schema([
                                    TextInput::make('value')
                                        ->hiddenLabel()
                                        ->placeholder('Enter a feature')
                                        ->required()
                                        ->extraInputAttributes([
                                            'class' => 'h-11 text-base px-4',
                                        ]),
                                ])
                                ->grid(2)               // ✅ TWO FEATURES PER ROW
                                ->reorderable(false)    // ❌ remove drag icons
                                ->collapsible(false)
                                ->columnSpanFull(),
                        ]))

                        /* SAVE BACK TO JSON */
                        ->mutateFormDataUsing(function (array $data): array {
                            if (isset($data['features'])) {
                                $data['features'] = collect($data['features'])
                                    ->pluck('value')
                                    ->filter()
                                    ->values()
                                    ->toArray();
                            }
                            return $data;
                        }),
                        

                    /* ===== TOGGLE ACTIVE ===== */
                    Action::make('toggle_is_active')
                        ->label(fn($record) => $record->is_active ? 'Deactivate' : 'Activate')
                        ->requiresConfirmation()
                        ->action(fn($record) => $record->toggleIsActive()),

                    /* ===== DELETE ===== */
                    Action::make('delete')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(fn($record) => $record->delete()),
                ]),
            ])

            /* ---------------- BULK ACTIONS ---------------- */
            ->bulkActions([
                BulkActionGroup::make([
                    BulkAction::make('toggle_is_active')
                        ->action(fn(Collection $records) => $records->each->toggleIsActive()),
                    BulkAction::make('delete')
                        ->color('danger')
                        ->action(fn(Collection $records) => $records->each->delete()),
                ]),
            ]);
    }

    /* =====================================================
        HELPERS
    ===================================================== */

    private function getServices(): array
    {
        return [
            'SMS' => 'SMS',
            'Whatsapp' => 'Whatsapp',
            'Voice' => 'Voice',
            'RCS' => 'RCS',
            'Email' => 'Email Marketing',
            'Reseller' => 'Reseller',
        ];
    }

    private function getCategories(): array
    {
        return [
            'STARTER PLAN' => 'STARTER PLAN',
            'BUSINESS PLAN' => 'BUSINESS PLAN',
            'ENTERPRISE PLAN' => 'ENTERPRISE PLAN',
        ];
    }

    private function getSubcategoriesForService(?string $service): array
    {
        return match ($service) {
            'Whatsapp' => [
                'bulk_whatsapp' => 'Bulk Whatsapp',
                'business_marketing' => 'Business Whatsapp - Marketing',
                'business_utility' => 'Business Whatsapp - Utility',
            ],
            'SMS' => [
                'promotional' => 'Promotional SMS',
                'transactional' => 'Transactional SMS',
                'sim_base' => 'Sim Base SMS',
                'voice_sms' => 'Voice SMS',
            ],
            'RCS' => [
                'rcs' => 'RCS'
            ],
            
        'Email' => [
            'bulk_email' => 'Bulk Email Marketing',
        ],
            default => [],
        };
    }

    public function render(): View
    {
        return view('livewire.pricing-table');
    }
}
