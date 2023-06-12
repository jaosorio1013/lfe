<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomNumber(),
            'account_id' => $this->faker->randomNumber(),
            'amount' => $this->faker->randomFloat(),
            'title' => $this->faker->word(),
            'category_id' => $this->faker->randomNumber(),
            'date' => Carbon::now(),
            'payee_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
