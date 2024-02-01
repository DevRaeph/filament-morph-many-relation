<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Vehicle extends Model
{
    protected $fillable = [
        'owner_id',
        'owner_type',
        "name"
    ];

    public function Owner(): MorphTo
    {
        return $this->morphTo();
    }
}
