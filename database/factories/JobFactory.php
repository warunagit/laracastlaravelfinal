<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
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
            'employer_id'=>Employer::factory(),
            'title'=>fake()->jobTitle,
            'salary'=>fake()->randomElement(['$5000 USD','$3500 USD','$2000 USD','$1000 USD',]),
            'location'=>'Remote',
            'schedule'=>'Full Time',
            'url'=>fake()->url,
            'featured'=>false
        ];
    }
}
