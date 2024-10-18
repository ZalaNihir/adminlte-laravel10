<?php

namespace Database\Factories;

use App\Models\Collection;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    protected $model = Collection::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word, // Unique collection name
            'slug' => $this->faker->unique()->slug, // Ensures slug uniqueness
            'image' => $this->faker->imageUrl(640, 480, 'collections', true), // Generates a random image URL
            'pdf' => 'admin/pdf/dummy.pdf', // Static PDF path
            'category_id' => Category::factory(), // Use a valid Category ID from CategoryFactory
        ];
    }
}
