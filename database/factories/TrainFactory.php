<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'company' => fake()->company(),
                'departure_station' => fake()->city(),
                'arrival_station' => fake()->city(),
                'departure_time' => fake()->time(),
                'arrival_time' => fake()->time(),
                'train_code' => fake()->randomNumber(3, true),
                'carriages_number' => fake()->randomDigit(),
                'on_time' => rand(0,1),
                'is_canceled' => rand(0,1),
        ];
    }
}
