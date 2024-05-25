<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Supplier;
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
            'product_name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock_quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => Categorie::all()->random()->id,
            'supplier_id' => Supplier::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
