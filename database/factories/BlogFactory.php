<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Auth\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blogID'        => $this->faker->numberBetween(10000000,100000000),
            'headline'      => $this->faker->word,
            'slug'          => $this->faker->unique()->slug,
            'thumb'         => $this->faker->imageUrl('1700', '1000'),
            'caption'       => $this->faker->word,
            'views'         => $this->faker->numberBetween(900,1000),
            'intro'         => $this->faker->sentences(3, true),
            'contents'      => $this->faker->sentences(3, true),
            'meta_tags'     => $this->faker->sentences(3, true),
            'meta_desc'     => $this->faker->sentences(3, true),
            'status'        => $this->faker->randomElement(['public', 'private']),
            'cat_id'        => $this->faker->randomElement(Category::pluck('id')->toArray()),
            'author_id'     => $this->faker->randomElement(Admin::pluck('id')->toArray()),
        ];
    }
}
