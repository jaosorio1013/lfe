<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MoneySchedule extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'type',
        'amount',
        'title',
        'date',
        'category_id',
        'account_id',
        'payee_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
