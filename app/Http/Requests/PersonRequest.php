<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'identification_type' => ['required', 'integer'],
            'identification_number' => ['required'],
            'phone' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'alias' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
