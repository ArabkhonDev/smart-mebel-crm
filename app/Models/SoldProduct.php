<?php

namespace App\Models;

use App\Traits\FillableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProduct extends Model
{
    use HasFactory, FillableTrait;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
