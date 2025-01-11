<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DutyLocation extends Model
{
    protected $fillable = [
        'duty_id',
        'location_id'
    ];

    public function duty(): BelongsTo
    {
        return $this->belongsTo(Duty::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
