<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioMaster extends Model
{
    use HasFactory;

    protected $table = 'portfolio_masters';

    protected $fillable = [
        'client_name',
        'client_logo',
        'badge',
        'category',
        'title',
        'description',
        'impact_highlight',
        'impact_desc',
        'tech_stack',
        'project_url',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Resolves the logo URL whether stored in public images or storage
     */
    public function getLogoUrlAttribute(): string
    {
        if (empty($this->client_logo)) {
            return asset('images/textota-logo.png');
        }

        if (str_starts_with($this->client_logo, 'http://') || str_starts_with($this->client_logo, 'https://')) {
            return $this->client_logo;
        }

        if (str_starts_with($this->client_logo, 'images/')) {
            return asset($this->client_logo);
        }

        return asset('storage/' . $this->client_logo);
    }

    /**
     * Splits comma-separated tech stack into an array of clean tag strings
     */
    public function getTechTagsAttribute(): array
    {
        if (empty($this->tech_stack)) {
            return [];
        }

        return array_map('trim', explode(',', $this->tech_stack));
    }
}
