<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NIS' => fake()->postcode(),
            'nama' => fake()->name(),
            'alamat' => fake()->address(),
            'kelas_id' => random_int(1, 4),
        ];
    }
}
