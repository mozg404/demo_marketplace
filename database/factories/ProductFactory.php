<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    private array $images = [
        '2024-04/7228947268.webp',
        '2024-04/7266574605.webp',
        '2024-04/7320936551.webp',
        '2024-05/7433832542.webp',
        '2024-05/7490796926.webp',
    ];

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'price' => fake()->randomFloat(2, 10, 30),
            'image' => $this->images[rand(0, count($this->images) - 1)],
        ];
    }
}
