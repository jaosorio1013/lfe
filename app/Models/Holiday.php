<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Holiday extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'date',
        'is_weekday',
        'name',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
