<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VlogMasters extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'image',
        'date',
        'title',
        'description',
    ];
}
