<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\ProjectPhase */
class ProjectPhaseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'project_id' => $this->project_id,
            'date' => $this->date,
            'term' => $this->term,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
