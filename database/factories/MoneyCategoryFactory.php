<?php

namespace Database\Factories;

use App\Models\MoneyCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MoneyCategoryFactory extends Factory
{
    protected $model = MoneyCategory::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomNumber(),
            'parent_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
