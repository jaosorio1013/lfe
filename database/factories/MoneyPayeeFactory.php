<?php

namespace Database\Factories;

use App\Models\MoneyPayee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MoneyPayeeFactory extends Factory
{
    protected $model = MoneyPayee::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
