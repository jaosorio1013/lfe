<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => ['required', 'integer'],
            'account_id' => ['nullable', 'integer'],
            'amount' => ['required', 'numeric'],
            'title' => ['required'],
            'category_id' => ['nullable', 'integer'],
            'date' => ['required', 'date'],
            'payee_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
