<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';
    protected $fillable = [
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
