<?php

namespace Database\Factories;

use App\Models\MoneyAccount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MoneyAccountFactory extends Factory
{
    protected $model = MoneyAccount::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'opening_valance' => $this->faker->randomFloat(),
            'archived_at' => $this->faker->randomNumber(),
            'group_id' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
