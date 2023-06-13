<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhaseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'order' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
