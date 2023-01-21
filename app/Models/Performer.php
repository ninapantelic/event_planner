<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'performance',
        'gender'
    ];
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
