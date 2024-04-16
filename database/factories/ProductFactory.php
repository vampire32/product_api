<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;


use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'description'=>fake()->paragraph(),
            'price'=>fake()->numberBetween(1000,20000),
            'user_id'=>function(){
                return User::all()->random();
            }
        ];
    }
}
