<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoryID'=>$this->faker->unique->word,
            'name'  =>$this->faker->unique->word,
            'slug'  =>$this->faker->unique()->slug,
            'thumb' =>$this->faker->imageUrl('300','300'),
            'meta_tags'=>$this->faker->sentences(3, true),
            'meta_desc'=>$this->faker->sentences(3, true),
            'status'=>$this->faker->randomElement(['public','private'])
        ];
    }
}
