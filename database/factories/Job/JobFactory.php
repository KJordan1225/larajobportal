<?php

namespace Database\Factories\Job;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job\Job>
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
            'company' => fake()->unique()->word(),
            'job_region' => fake()->unique()->word(),
            'job_type' => fake()->randomElements(['Full-time','Part-time','Contract']),
            'job_location' => fake()->randomElements(['Remote','On-site','Hybrid']),
            'image' => 'post_'.fake()->numberBetween(1,10),
        ];
    }
}
