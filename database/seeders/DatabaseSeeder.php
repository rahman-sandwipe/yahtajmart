<?php

namespace Database\Seeders;

use App\Models\Auth\Admin;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        
        User::factory(30)->create();
        Admin::factory(10)->create();
        Brand::factory(15)->create();
        Category::factory(10)->create();
        Banner::factory(10)->create();
        Product::factory(100)->create();
        Blog::factory(50)->create();
    }
}
