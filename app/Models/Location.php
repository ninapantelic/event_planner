<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'address',
        'capacity'
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
