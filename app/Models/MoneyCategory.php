<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MoneyCategory extends Model
{
    use SoftDeletes, HasFactory;

    public const TYPE_INCOME = 1;
    public const TYPE_SPENT = 2;

    protected $fillable = [
        'name',
        'type',
        'parent_id',
    ];
}
