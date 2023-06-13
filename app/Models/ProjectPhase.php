<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectPhase extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'type',
        'client_id',
        'project_id',
        'start_date',
        'finish_date',
        'finished_at',
        'term',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'finish_date' => 'datetime',
        'finished_at' => 'datetime',
    ];
}
