<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappShortLink extends Model
{
    use HasFactory;

    protected $table = 'whatsapp_short_links';

    protected $fillable = [
        'slug',
        'country_code',
        'phone_number',
        'message',
        'target_url',
        'clicks',
    ];

    protected $casts = [
        'clicks' => 'integer',
    ];
}
