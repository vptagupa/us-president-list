<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Casts\Address;

class President extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'year_started',
        'year_ended',
        'photo'
    ];

    protected $appends = ['fullName'];

    protected $casts = [
        'address'       =>  Address::class,
    ];

    protected static function newFactory()
    {
        return \Database\Factories\PresidentFactory::new();
    }

    public function getFullNameAttribute()
    {
        return $this->first_name." ".$this->middle_name." ".$this->last_name;
    }
}
