<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'category_id'=>fake()->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'name'=>fake()->word(),
            'description'=>fake()->sentence(),
            'price'=>fake()->randomFloat(),
            'city'=>fake()->streetAddress(),
            'image'=>fake()->imageUrl(640 , 480 , 'house', true),

            //
        ];
    }
}
