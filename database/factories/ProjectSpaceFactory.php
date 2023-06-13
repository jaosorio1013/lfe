<?php

namespace Database\Factories;

use App\Models\ProjectSpace;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProjectSpaceFactory extends Factory
{
    protected $model = ProjectSpace::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'measures' => $this->faker->randomFloat(),
            'project_id' => $this->faker->randomNumber(),
            'approved' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
