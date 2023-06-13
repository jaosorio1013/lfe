<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HolidayRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'date' => ['required', 'date'],
            'name' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
