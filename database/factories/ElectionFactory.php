<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Election>
 */
class ElectionFactory extends Factory
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
            'position' => 'President',
            'date' => Date('d-m-Y'),
            'candidate' => fake()->name()
        ];
    }
}
