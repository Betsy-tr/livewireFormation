<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->lastName,
            'email' => fake()->unique()->safeEmail(),
            'job' => fake()->catchPhrase(),
            'group' => fake()->company(),
            'active' =>fake()->boolean(true),
            'role'=>fake()->jobTitle(),
        ];
    }
}
