<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryMaster extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'region',
        'message',
        'company_name',
        'requirement',
        'type',
        'ip_address',
        'is_terms_accepted',
    ];

    protected $casts = [
        'is_terms_accepted' => 'boolean',
    ];
}
