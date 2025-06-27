<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            "img" => fake()->text(100),
            'price' => fake()->randomNumber(6, true),
            'stock' => fake()->randomNumber(2, true),
            'sold' => fake()->randomNumber(4, true)
        ];
    }
}
