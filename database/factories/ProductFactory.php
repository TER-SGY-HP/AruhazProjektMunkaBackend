<?php

namespace Database\Factories;

use App\Models\Category;
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
            'title' => fake("hu_HU")->name(),
            'price' =>rand(100,1000),
            'description' => fake("hu_HU")->name(),
            'category' => fake("hu_HU")->name()
        ];
    }
}
