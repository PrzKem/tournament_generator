<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      $firstId = $this->faker()->randomDigit();
        return [
            'player_1_id' => $firstId,
            'player_2_id' => $this->faker()->randomDigitNot($firstId)
        ];
    }
}
