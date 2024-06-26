<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(150),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'qtd_tickets' => rand(0, 999),
            'price_ticket' => $this->faker->randomFloat(2, 10, 99),
        ];
    }
}
