<?php

namespace Database\Factories;

use App\Models\ProjectPhase;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProjectPhaseFactory extends Factory
{
    protected $model = ProjectPhase::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomNumber(),
            'project_id' => $this->faker->randomNumber(),
            'date' => Carbon::now(),
            'term' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
