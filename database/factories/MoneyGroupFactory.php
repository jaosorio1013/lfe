<?php

namespace Database\Factories;

use App\Models\MoneyGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MoneyGroupFactory extends Factory
{
    protected $model = MoneyGroup::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'total' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
