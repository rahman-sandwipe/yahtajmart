<?php

namespace Database\Factories\Auth;

use App\Models\Auth\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdminFactory extends Factory
{
    protected $model = Admin::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'adminID'   => fake()->unique->numberBetween(101000, 101030),
            'name'      => fake()->name(),
            'email'     => fake()->unique()->safeEmail(),
            'phone'     => fake()->numberBetween(1000000,2000000),
            'status'    => fake()->randomElement(['public', 'private']),
            'role'      => fake()->randomElement(['author','seller','admin']),
            'password'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ];
    }
}
