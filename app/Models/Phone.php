<?php

namespace App\Models;

use App\Traits\FillableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory, FillableTrait;

    
    public function user() {
        return $this->hasMany(User::class);
    }
}
