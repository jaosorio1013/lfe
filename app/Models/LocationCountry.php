<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationCountry extends Model
{
    protected $fillable = [
        'name',
        'code',
        'phone_code',
    ];
}
