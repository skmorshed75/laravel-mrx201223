<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Educations>
 */
class EducationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'duration' => $this->faker->randomNumber(2) . ' months', // Example: '5 months'
            'institutionName' => $this->faker->company,
            'field' => $this->faker->jobTitle,
            'details' => $this->faker->paragraphs(3, true), // Generates 3 paragraphs of random text
        ];
    }
}
