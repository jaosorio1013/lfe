<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectSpaceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'description' => ['nullable'],
            'measures' => ['required', 'numeric'],
            'project_id' => ['required', 'integer'],
            'approved' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
