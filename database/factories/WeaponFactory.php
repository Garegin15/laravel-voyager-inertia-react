<?php

namespace Database\Factories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeaponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'damage' => $this->faker->numberBetween(1000, 2000),
            'is_range' => 0,
            'hero_id' =>  $this->faker->randomElement(Hero::all())['id'],
        ];
    }
}
