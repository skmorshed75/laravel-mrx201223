<?php

namespace Database\Factories;

use App\Models\SeoProperty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SeoProperty>
 */
class SeoPropertyFactory extends Factory
{
    protected $model = SeoProperty::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pagename' => $this->faker->randomElement(['home', 'resume', 'projects', 'contact']),
            'title' => $this->faker->sentence(5),
            'keywords' => $this->faker->words(5, true),
            'description' => $this->faker->paragraph,
            'ogSiteName' => $this->faker->company,
            'ogUrl' => $this->faker->url,
            'ogTitle' => $this->faker->sentence(5),
            'ogDescription' => $this->faker->paragraph,
            'ogImage' => $this->faker->imageUrl(640, 480),
        ];
    }
}
