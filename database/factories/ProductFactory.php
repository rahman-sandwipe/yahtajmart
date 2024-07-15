<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->word,
            'slug'=>$this->faker->unique()->slug,
            'thumb'=>$this->faker->imageUrl('1000', '1000'),
            'width_or_size'=>$this->faker->randomElement(['10', '15', 'L', 'M']),
            'total_stock'=>$this->faker->numberBetween(2,10),
            'regular_price'=>$this->faker->numberBetween(100, 1000),
            'offer_price'=>$this->faker->numberBetween(100, 1000),
            'total_discount'=>$this->faker->numberBetween(100, 1000),
            'sort_desc'=>$this->faker->text,
            'description'=>$this->faker->text,
            'aditional_info'=>$this->faker->text,
            'status'=>$this->faker->randomElement(['public', 'private']),
            'condition'=>$this->faker->randomElement(['New','Best','Recommend']),
            's_tags'=>$this->faker->text,
            'meta_tags'=>$this->faker->text,
            'meta_desc'=>$this->faker->text,
            'cat_id'=>$this->faker->randomElement(Category::pluck('id')->toArray()),
            'brand_id'=>$this->faker->randomElement(Brand::pluck('id')->toArray()),
            'author_id'=>$this->faker->randomElement(User::pluck('id')->toArray()),
        ];
    }
}
