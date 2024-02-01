<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Carrier extends Model
{
    protected $fillable = [
        'name',
    ];

    public function Vehicles(): MorphMany
    {
        return $this->morphMany(Vehicle::class, 'Owner');
    }
}
