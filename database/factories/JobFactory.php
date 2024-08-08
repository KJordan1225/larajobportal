<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_title' => fake()->randomElements(['PHP Developer','Administrative Assistant','Content Designer']),
            'company' => fake()->unique()->word().', '.fake()->randomElements(['Inc.','LLC','Ltd.']),
            'job_region' => fake()->unique()->word().', '.fake()->randomElements(['Virginia','Florida','Maryland']),
            'job_type' => fake()->randomElements(['Full-time','Part-time','Contract']),
            'job_location' => fake()->randomElements(['Remote','On-site','Hybrid']),
            'image' => 'post_'.fake()->numberBetween(1,10),
        ];
    }
}
