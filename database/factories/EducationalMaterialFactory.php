<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationalMaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'type' => $this->faker->numberBetween(0,2),
            'category_id' => $this->faker->numberBetween(1,10),
            'image' => '',
            'description' => $this->faker->text(256),
            'price' => $this->faker->numberBetween(1,100),
            'file' => ''
        ];
    }
}
