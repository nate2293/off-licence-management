<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
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
            'name' => $this->faker->word(),
            'category' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'description' => $this->faker->sentence(),
            'stock_quantity' => $this->faker->numberBetween(1, 100),
            'shopkeeper_id' => $this->faker->numberBetween(1, 10),
            'supplier' => $this->faker->company(),
        ];
    }
}
