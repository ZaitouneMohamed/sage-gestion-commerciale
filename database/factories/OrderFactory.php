<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::all()->random()->id,
            'order_date' => $this->faker->dateTime,
            'total_amount' => $this->faker->randomFloat(2, 20, 2000),
            'order_status' => $this->faker->randomElement(['Pending', 'Shipped', 'Completed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
