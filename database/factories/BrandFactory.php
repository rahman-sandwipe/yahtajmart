<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brandID'=>$this->faker->numberBetween(1000000,2000000),
            'name'  =>$this->faker->unique->word,
            'slug'  =>$this->faker->unique()->slug,
            'thumb' =>$this->faker->imageUrl('500','150'),
            'meta_tags'=>$this->faker->sentences(3, true),
            'meta_desc'=>$this->faker->sentences(3, true),
            'status'=>$this->faker->randomElement(['public','private'])
        ];
    }
}
