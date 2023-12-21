<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experiences>
 */
class ExperiencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'duration' => $this->faker->numberBetween(1, 48) . ' months', // Example: '12 months'
            'title' => $this->faker->sentence(2),
            'designation' => $this->faker->jobTitle,
            'details' => $this->faker->paragraphs(3, true), // Generates 3 paragraphs of random text
        ];
    }
}
