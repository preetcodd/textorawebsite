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
        
           // NEW WhatsApp Pricing
    'setup_cost',
    'billing_type',
    'marketing_price',
    'utility_price',


        // JSON features
        'features',

        'is_active',
    ];

    protected $casts = [
        'monthly_price' => 'decimal:2',
        'yearly_price' => 'decimal:2',
        
          // NEW WhatsApp Pricing
    'setup_cost' => 'decimal:2',
    'marketing_price' => 'decimal:4',
    'utility_price' => 'decimal:4',

        // ✅ REQUIRED for JSON column
        'features' => 'array',

        'is_active' => 'boolean',
    ];

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
