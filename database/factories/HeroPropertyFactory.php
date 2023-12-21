<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Heroproperty>
 */
class HeroPropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'keyLine' => $this->faker->sentence(6),
            'title' => $this->faker->sentence(4),
            'shortTitle' => $this->faker->word,
            'img' => $this->faker->imageUrl(),
        ];
    }
}
