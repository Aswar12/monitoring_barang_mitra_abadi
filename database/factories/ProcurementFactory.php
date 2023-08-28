<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Procurement;
use  App\Models\Item;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Procurement>
 */
class ProcurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id' => function () {
                return Item::factory()->create()->id;
            },
            'order_quantity' => $this->faker->randomNumber(),
            'total_cost' => $this->faker->randomFloat(2, 50, 500),
            'procurement_date' => $this->faker->date(),
        ];
    }
}