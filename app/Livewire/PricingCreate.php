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
// WhatsApp Pricing
// =============================
public $setup_cost = 0;
public $billing_type = 'One-Time';
public $marketing_price = 0;
public $utility_price = 0;

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
        
        // WhatsApp Pricing
'setup_cost' => 'nullable|numeric|min:0',
'billing_type' => 'nullable|string|max:20',
'marketing_price' => 'nullable|numeric|min:0',
'utility_price' => 'nullable|numeric|min:0',

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
    protected $listeners = [
        'edit-pricing' => 'editPricing',
    ];

    protected $casts = [
        'features' => 'array',
    ];


    public function removeFeature(int $index): void
    {
        unset($this->features[$index]);
        $this->features = array_values($this->features);
    }

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

        'features' => 'required|array|min:1',
        'features.*' => 'required|string|max:255',
    ]);

} else {

    $this->validate();

}

        PricingMaster::create([
            'category' => $this->category,
            'service' => $this->service,
            'subcategory' => $this->subcategory,
            'title' => $this->title,
            'sub_title' => $this->sub_title,

            'monthly_price' => $this->monthly_price,
            'monthly_total_messages' => $this->monthly_total_messages,
            // WhatsApp Pricing
'setup_cost' => $this->setup_cost,
'billing_type' => $this->billing_type,
'marketing_price' => $this->marketing_price,
'utility_price' => $this->utility_price,

            'yearly_price' => 0, // Default 0
            'yearly_total_messages' => 0, // Default 0

            'features' => array_values(array_filter($this->features)),
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