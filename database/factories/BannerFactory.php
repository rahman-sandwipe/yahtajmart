<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bannerID'=>$this->faker->word,
            'name'  =>$this->faker->unique->word,
            'slug'  =>$this->faker->unique()->slug,
            'thumb' =>$this->faker->imageUrl('1920','1080'),
            'meta_tags'=>$this->faker->sentences(3, true),
            'meta_desc'=>$this->faker->sentences(3, true),
            'status'=>$this->faker->randomElement(['public','private'])
        ];
    }
}
