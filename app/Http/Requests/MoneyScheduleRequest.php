<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoneyScheduleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => ['required', 'integer'],
            'amount' => ['required', 'numeric'],
            'title' => ['required'],
            'date' => ['required', 'date'],
            'category_id' => ['required', 'integer'],
            'account_id' => ['required', 'integer'],
            'payee_id' => ['nullable', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
