<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlShortLink extends Model
{
    use HasFactory;

    protected $table = 'url_short_links';

    protected $fillable = [
        'code',
        'destination_url',
        'clicks',
        'is_active',
    ];

    protected $casts = [
        'clicks' => 'integer',
        'is_active' => 'boolean',
    ];
}
