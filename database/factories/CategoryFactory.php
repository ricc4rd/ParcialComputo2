<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'producto'=>$this->faker->text(50),
            'codigo'=>$this->faker->number(20), 
            'cantidad'=>$this->faker->text(20),
            'precio'=>$this->faker->number(20)
        ];
    }
}
