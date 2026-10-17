<?php

namespace App\Livewire;

use App\Models\PricingMaster;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PricingCreate extends Component
{
    public $category = 'STARTER PLAN';
    public $service = 'SMS';
    public $subcategory = '';
    public $title;
    public $sub_title;
    
    // =============================
    // WhatsApp Pricing & Extra Costs
    // =============================
    public $setup_cost = 0;
    public $billing_type = 'One-Time';
    public $marketing_price = 0;
    public $utility_price = 0;
    public $authentication_price = null;
    public $service_price = null;
    public $extra_costs = [];

    public $monthly_price = 0;
    public $monthly_total_messages = 0;
    public $yearly_price = 0;
    public $yearly_total_messages = 0;

    public $features = [];
    public $subcategories = [];

    public $edit_id = null; // <-- for update

    protected $rules = [
        'category' => 'required|string|in:STARTER PLAN,BUSINESS PLAN,ENTERPRISE PLAN',
        'service' => 'required|string|in:Voice,Whatsapp,SMS,RCS,Reseller,Email',
        'subcategory' => 'required|string',
        'title' => 'required|string|max:255',
        'sub_title' => 'nullable|string|max:255',

        'monthly_price' => 'required|numeric|min:0',
        'monthly_total_messages' => 'required|integer|min:0',
        
        // WhatsApp Pricing & Extra Costs
        'setup_cost' => 'nullable|numeric|min:0',
        'billing_type' => 'nullable|string|max:20',
        'marketing_price' => 'nullable|numeric|min:0',
        'utility_price' => 'nullable|numeric|min:0',
        'authentication_price' => 'nullable|numeric|min:0',
        'service_price' => 'nullable|numeric|min:0',
        'extra_costs' => 'nullable|array',
        'extra_costs.*.label' => 'nullable|string|max:255',
        'extra_costs.*.price' => 'nullable|string|max:255',

        // 'yearly_price' => 'required|numeric|min:0',
        // 'yearly_total_messages' => 'required|integer|min:0',

        'features' => 'required|array|min:1',
        'features.*' => 'required|string|max:255',
    ];

    public function mount(): void
    {
        $this->updatedService();

        if (empty($this->features)) {
            $this->features = [''];
        }
    }

    public function updatedService(): void
    {
        $this->subcategory = '';
        $this->subcategories = $this->getSubcategoriesForService($this->service);
    }

    private function getSubcategoriesForService(string $service): array
    {
        return match ($service) {
            'Whatsapp' => [
                'bulk_whatsapp' => 'Bulk Whatsapp',
                'business_marketing' => 'Business Whatsapp - Marketing Services',
                'business_utility' => 'Business Whatsapp - Utility',
            ],
            'SMS' => [
                'promotional' => 'Promotional SMS',
                'transactional' => 'Transactional SMS',
                'sim_base' => 'Sim Base SMS',
                // 'voice_sms' => 'Voice SMS',
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

    public function addFeature(): void
    {
        $this->features[] = '';
    }

    public function moveFeatureUp(int $index): void
    {
        if ($index > 0 && isset($this->features[$index])) {
            $temp = $this->features[$index - 1];
            $this->features[$index - 1] = $this->features[$index];
            $this->features[$index] = $temp;
        }
    }

    public function moveFeatureDown(int $index): void
    {
        if ($index < count($this->features) - 1 && isset($this->features[$index])) {
            $temp = $this->features[$index + 1];
            $this->features[$index + 1] = $this->features[$index];
            $this->features[$index] = $temp;
        }
    }

    public function removeFeature(int $index): void
    {
        unset($this->features[$index]);
        $this->features = array_values($this->features);
    }

    public function addExtraCost(): void
    {
        $this->extra_costs[] = ['label' => '', 'price' => ''];
    }

    public function removeExtraCost(int $index): void
    {
        unset($this->extra_costs[$index]);
        $this->extra_costs = array_values($this->extra_costs);
    }

    public function moveExtraCostUp(int $index): void
    {
        if ($index > 0 && isset($this->extra_costs[$index])) {
            $temp = $this->extra_costs[$index - 1];
            $this->extra_costs[$index - 1] = $this->extra_costs[$index];
            $this->extra_costs[$index] = $temp;
        }
    }

    public function moveExtraCostDown(int $index): void
    {
        if ($index < count($this->extra_costs) - 1 && isset($this->extra_costs[$index])) {
            $temp = $this->extra_costs[$index + 1];
            $this->extra_costs[$index + 1] = $this->extra_costs[$index];
            $this->extra_costs[$index] = $temp;
        }
    }

    protected $listeners = [
        'edit-pricing' => 'editPricing',
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function createPricing(): void
    {
        if ($this->service == 'Whatsapp' && in_array($this->subcategory, ['business_marketing', 'business_utility'])) {
            $this->validate([
                'category' => 'required|string|in:STARTER PLAN,BUSINESS PLAN,ENTERPRISE PLAN',
                'service' => 'required|string',
                'subcategory' => 'required|string',
                'title' => 'required|string|max:255',
                'sub_title' => 'nullable|string|max:255',

                'setup_cost' => 'required|numeric|min:0',
                'billing_type' => 'required|string|max:20',
                'marketing_price' => 'required|numeric|min:0',
                'utility_price' => 'required|numeric|min:0',
                'authentication_price' => 'nullable|numeric|min:0',
                'service_price' => 'nullable|numeric|min:0',

                'features' => 'required|array|min:1',
                'features.*' => 'required|string|max:255',
            ]);
        } else {
            $this->validate();
        }

        $filteredExtraCosts = collect($this->extra_costs)
            ->filter(fn($item) => !empty(trim($item['label'] ?? '')))
            ->values()
            ->toArray();

        PricingMaster::create([
            'category' => $this->category,
            'service' => $this->service,
            'subcategory' => $this->subcategory,
            'title' => $this->title,
            'sub_title' => $this->sub_title,

            'monthly_price' => $this->monthly_price,
            'monthly_total_messages' => $this->monthly_total_messages,
            // WhatsApp Pricing & Extra Costs
            'setup_cost' => $this->setup_cost,
            'billing_type' => $this->billing_type,
            'marketing_price' => $this->marketing_price,
            'utility_price' => $this->utility_price,
            'authentication_price' => $this->authentication_price !== null && $this->authentication_price !== '' ? $this->authentication_price : null,
            'service_price' => $this->service_price !== null && $this->service_price !== '' ? $this->service_price : null,
            'extra_costs' => $filteredExtraCosts,

            'yearly_price' => 0, // Default 0
            'yearly_total_messages' => 0, // Default 0

            'features' => array_values(array_filter($this->features, fn($f) => !empty(trim($f)))),
            'is_active' => true,
        ]);

        $this->dispatch('close-modal', id: 'create-pricing-modal');
        $this->dispatch('resetTable');
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.pricing-create');
    }
}