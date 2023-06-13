<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectPhaseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => ['required', 'integer'],
            'client_id' => ['nullable', 'integer'],
            'project_id' => ['required', 'integer'],
            'start_date' => ['nullable', 'date'],
            'finish_date' => ['nullable', 'date'],
            'finished_at' => ['nullable', 'date'],
            'term' => ['nullable', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
