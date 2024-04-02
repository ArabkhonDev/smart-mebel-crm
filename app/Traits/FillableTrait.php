<?php

namespace App\Traits;

trait FillableTrait
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
