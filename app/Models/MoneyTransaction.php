<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MoneyTransaction extends Model
{
    use SoftDeletes, HasFactory;

    public const TYPE_INCOME = 1;
    public const TYPE_SPENT = 2;
    public const TYPE_TRANSACTION = 3;
    public const TYPE_BALANCE_ADJUSTMENT = 4;

    protected $fillable = [
        'type',
        'account_id',
        'amount',
        'title',
        'category_id',
        'date',
        'payee_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
