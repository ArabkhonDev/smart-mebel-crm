<?php

namespace App\Traits;

use Illuminate\Support\Facades\Schema;

trait FillableTrait
{
    public function getFillable(){
        return Schema::getColumnListing($this->getTable());
    }

    public function getGuarded(){
        return [
            'id',
            'created_at',
            'updated_at'
        ];
    }
}
