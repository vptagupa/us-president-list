<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Casts\Address;

class President extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'age',
        'address',
        'year_started',
        'year_ended',
        'photo'
    ];

    protected $appends = ['fullname'];

    protected $casts = [
        'year_started'  => 'date:Y-m-d',
        'year_ended'    => 'date:Y-m-d',
        'address'       =>  Address::class,
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name." ".$this->middle_name." ".$this->last_name;
    }
}
