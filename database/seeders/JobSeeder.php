<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1,10) as $item) {
        
            DB::table('myjobs')->insert([
                'job_title' => fake()->randomElement(['PHP','Database','Software','Virtual','Administrative']).' '.fake()->randomElement(['Developer','Designer','Manager','Assitant','Instructor']),
                'company' => fake()->city.', Inc.',
                'job_region' => fake()->city.', '.fake()->state,
                'job_type' => fake()->randomElement(['Full-time','Part-time']),
                'job_location' => fake()->randomElement(['Remote','On-site','Hybrid']),
                'vacancy' => fake()->randomElement(['1','2','3','4','5']),
                'experience' => fake()->paragraph(),
                'salary' => '$75,000',
                'application_deadline' => 'October 31, 2024',
                'job_description' => fake()->paragraph(),
                'responsibilities' => fake()->paragraph(),
                'education_experience' => fake()->paragraph(),
                'image' => 'post_'.$item.'.png',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
