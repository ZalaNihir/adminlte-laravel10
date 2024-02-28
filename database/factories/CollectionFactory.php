<?php

namespace Database\Factories;

use App\Models\Collection;
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
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'image' => 'path/to/image.jpg', // You can replace this with a path to a real image
            'pdf' => 'path/to/pdf.pdf', // You can replace this with a path to a real PDF file
            'category_id' => $this->faker->numberBetween(1, 10), // Assuming you have 10 categories
        ];
    }
}
