<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $fillable = [
        'name',
        'parent_id'
    ];

    protected $casts = [
        'name' => 'string'
    ];

    public function parentLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    public function childLocations(): HasMany
    {
        return $this->hasMany(Location::class, 'parent_id', 'id');
    }

    public function duties(): BelongsToMany
    {
        return $this->belongsToMany(Duty::class, DutyLocation::class);
    }

    public function scopeParent($query): Builder
    {
        return $query->whereNull('parent_id');
    }

    public function scopeChild($query): Builder
    {
        return $query->whereNotNull('parent_id');
    }
}
