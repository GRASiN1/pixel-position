<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
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
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50, 000', '$45, 0000', '$75, 000']),
            'schedule' => fake()->randomElement(['Part-Time', 'Full-Time']),
            'url' => fake()->url(),
            'featured' => false,
            'employer_id' => Employer::factory(),
            'location' => fake()->randomElement(['Remote', 'On-Site']),
        ];
    }
}
