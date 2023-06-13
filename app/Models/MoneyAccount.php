<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MoneyAccount extends Model
{
    use SoftDeletes, HasFactory;

    public const PERIOD_DAYS = 1;
    public const PERIOD_WEEKS = 2;
    public const PERIOD_FORTNIGHT = 3;
    public const PERIOD_MONTHS = 4;
    public const PERIOD_YEARS = 5;

    protected $fillable = [
        'name',
        'opening_valance',
        'archived_at',
        'group_id',
    ];

    protected $casts = [
        'group_id' => 'datetime',
    ];
}
