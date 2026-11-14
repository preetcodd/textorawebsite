<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingMaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'service',
        'subcategory',
        'title',
        'sub_title',

        // Monthly pricing
        'monthly_price',
        'monthly_total_messages',

        // Yearly pricing
        'yearly_price',
        'yearly_total_messages',
        
        // NEW WhatsApp Pricing & Extra Costs
        'setup_cost',
        'billing_type',
        'marketing_price',
        'utility_price',
        'authentication_price',
        'service_price',
        'extra_costs',

        // JSON features
        'features',

        'is_active',
    ];

    protected $casts = [
        'monthly_price' => 'decimal:2',
        'yearly_price' => 'decimal:2',
        
        // NEW WhatsApp Pricing & Extra Costs
        'setup_cost' => 'decimal:2',
        'marketing_price' => 'decimal:4',
        'utility_price' => 'decimal:4',
        'authentication_price' => 'decimal:4',
        'service_price' => 'decimal:4',
        'extra_costs' => 'array',

        // ✅ REQUIRED for JSON column
        'features' => 'array',

        'is_active' => 'boolean',
    ];

    /**
     * Mutators to ensure PostgreSQL receives valid numeric values or NULL instead of empty strings
     */
    public function setSetupCostAttribute($value)
    {
        $this->attributes['setup_cost'] = ($value === '' || $value === null) ? null : $value;
    }

    public function setMarketingPriceAttribute($value)
    {
        $this->attributes['marketing_price'] = ($value === '' || $value === null) ? null : $value;
    }

    public function setUtilityPriceAttribute($value)
    {
        $this->attributes['utility_price'] = ($value === '' || $value === null) ? null : $value;
    }

    public function setAuthenticationPriceAttribute($value)
    {
        $this->attributes['authentication_price'] = ($value === '' || $value === null) ? null : $value;
    }

    public function setServicePriceAttribute($value)
    {
        $this->attributes['service_price'] = ($value === '' || $value === null) ? null : $value;
    }

    public function setYearlyPriceAttribute($value)
    {
        $this->attributes['yearly_price'] = ($value === '' || $value === null) ? 0 : $value;
    }

    public function setYearlyTotalMessagesAttribute($value)
    {
        $this->attributes['yearly_total_messages'] = ($value === '' || $value === null) ? 0 : (int)$value;
    }

    /**
     * Toggle active/inactive status
     */
    public function toggleIsActive(): void
    {
        $this->update([
            'is_active' => ! $this->is_active,
        ]);
    }
}
