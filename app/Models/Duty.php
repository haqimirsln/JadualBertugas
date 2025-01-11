<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Duty extends Model
{
    protected $fillable = [
        'name'
    ];

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class, DutyLocation::class);
    }
}
