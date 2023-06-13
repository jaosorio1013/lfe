<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes, HasFactory;

    const IDENTIFICATION_TYPE_CEDULA = 1;
    const IDENTIFICATION_TYPE_NIT = 2;
    const IDENTIFICATION_TYPE_PASAPORTE = 3;

    protected $fillable = [
        'name',
        'email',
        'identification_type',
        'identification_number',
        'phone',
        'city',
        'address',
        'alias',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
