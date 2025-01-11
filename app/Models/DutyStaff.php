<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DutyStaff extends Model
{
    protected $fillabel = [
        'duty_id',
        'staff_id'
    ];

    public function duty(): BelongsTo
    {
        return $this->belongsTo(Duty::class);
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

}
