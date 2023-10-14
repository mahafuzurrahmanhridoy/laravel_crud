<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        $categories = [1, 2, 3];
        $title = fake()->unique()->name(15);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->text(10),
            'price' => rand(1, 100),
            'sku_number' => rand(1, 10000), // password
            'is_active' => true,
            'category_id' => $categories[array_rand($categories, 1)]
        ];
    }
}
