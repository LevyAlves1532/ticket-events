<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    public function brPhoneNumber(): string
    {
        $ddd = $this->faker->numberBetween(11, 99); // Gera um DDD aleatório
        $prefix = $this->faker->numberBetween(90000, 99999); // Prefixo do celular
        $suffix = $this->faker->numberBetween(1000, 9999); // Sufixo do celular

        return "($ddd) $prefix-$suffix";
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->brPhoneNumber(),
        ];
    }
}
