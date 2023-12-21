<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'previewLink' => $this->faker->imageUrl(640, 480),
            'thumbnailLink' => $this->faker->imageUrl(200, 200),
            'details' => $this->faker->paragraphs(3, true), // Generates 3 paragraphs of random text
        ];
    }
}
