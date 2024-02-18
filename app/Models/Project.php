<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'won_at',
        'lost_at',
        'started_at',
        'finished_at',
        'client_id',
        'owner_id',
    ];

    protected $casts = [
        'won_at' => 'datetime',
        'lost_at' => 'datetime',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function money_transactions(): HasMany
    {
        return $this->hasMany(MoneyTransaction::class);
    }
}
