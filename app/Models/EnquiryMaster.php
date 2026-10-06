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
        'is_terms_accepted',
    ];
}
