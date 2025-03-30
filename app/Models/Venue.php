<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venue extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'latitude' => 'float',
        'longitude' => 'float',
        'capacity' => 'integer',
    ];

    public function conferences(): HasMany
    {
        return $this->hasMany(Conference::class);
    }
}
