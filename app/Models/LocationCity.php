<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationCity extends Model
{
    protected $fillable = [
        'location_country_id',
        'location_state_id',
        'name',
    ];

    public function location_state()
    {
        return $this->belongsTo(LocationState::class);
    }

    public function location_country()
    {
        return $this->belongsTo(LocationCountry::class);
    }
}
