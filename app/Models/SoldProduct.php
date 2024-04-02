<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'name', 
        'client_name',
        'client_phone_number', 
        'client_address',
        'orginal_price',
        'photo',
        'sale_price',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute()
    {
        return $this->user->name;
    }
}
