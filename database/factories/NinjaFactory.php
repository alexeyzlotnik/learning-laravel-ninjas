<?php

namespace Database\Factories;

use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'skill' => fake()->numberBetween(0, 100),
            'bio' => fake()->realText(500),
            'color_id' => Color::inRandomOrder()->first()->id,
        ];
    }
}
