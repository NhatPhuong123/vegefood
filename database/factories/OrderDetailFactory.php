<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id'=>fake()->numberBetween(1,100),
            'product_id'=>fake()->numberBetween(1,100),
            'quantity'=>fake()->numberBetween(0,50),
        ];
    }
}
