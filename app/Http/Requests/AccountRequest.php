<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'opening_valance' => ['required', 'numeric'],
            'archived_at' => ['required', 'integer'],
            'group_id' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
