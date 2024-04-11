<?php

namespace App\Models;

use App\Traits\FillableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, FillableTrait;

    public function  soldProduct(){
        return $this->belongsTo(SoldProduct::class);
    }
}
