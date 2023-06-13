<?php

namespace Database\Factories;

use App\Models\MoneySchedule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MoneyScheduleFactory extends Factory
{
    protected $model = MoneySchedule::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomNumber(),
            'amount' => $this->faker->randomFloat(),
            'title' => $this->faker->word(),
            'date' => Carbon::now(),
            'category_id' => $this->faker->randomNumber(),
            'account_id' => $this->faker->randomNumber(),
            'payee_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
