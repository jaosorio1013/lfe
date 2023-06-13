<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'code' => ['required'],
            'phone_code' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
