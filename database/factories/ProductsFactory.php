<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          "name" => fake()->name(),
          "description" => fake()->text(),
          "price" => fake()->numberBetween(100, 1000),
          "stock" => fake()->numberBetween(0, 100),
          "created_at" => fake()->dateTime(),
        ];
    }
}
