<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\thuriya>
 */
class thuriyaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = ['editor','journalist','author'];
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->sentence(),
            'rating' => rand(1.0,5),
            'price' => rand(2000,50000),
            'position' =>$positions[array_rand($positions)],
            'description' =>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true)
        ];
    }
}
