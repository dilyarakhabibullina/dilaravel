<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'categories_id'=> rand(1, 5),
            'title' => $this->faker->realText(10),
            'inform' => $this->faker->realText(500),
            'isPrivate' => rand(1, 0)
         
            //
        ];
    }
}
