<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Customer extends Model
{

    protected $fillable = [
        'name',
    ];

    public function Vehicles(): MorphMany
    {
        return $this->morphMany(Vehicle::class, 'Owner');
    }
}
