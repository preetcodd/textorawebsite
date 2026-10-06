<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMaster extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'business_email',
        'contact',
        'business_contact',
        'company',
        'address',
        'password',
        'is_active',
    ];

    public function toggleIsActive(): void
    {
        $this->is_active = ! $this->is_active;
        $this->save();
    }
}
