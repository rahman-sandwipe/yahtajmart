<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            //Author
            [
                'web_name'      =>'Yahtaj Mart',
                'web_tagline'   =>'Your happiness is my first commitment',
                'web_link'      =>'http://localhost:8000/',
                'web_authors'   =>'Md Masuder Rahman',
                'web_logo'      =>'NULL',
                'web_fevicon'   =>'NULL',
                'web_metatags'  =>'ecommerce',
                'web_metadesc'  =>'your happiness is my first commitment',
                'web_timezone'  =>'Asia\Dhaka',
                'author_mail'   =>'admin@yahtajmart.com',
                'author_phone'  =>'01633714056',
                // 'author_address'=>'south Khulshi Chattogram',
            ],
        ]);
    }
}
