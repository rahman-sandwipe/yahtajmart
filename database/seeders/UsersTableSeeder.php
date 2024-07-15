<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Author
            [
                'name'      =>'Rahman customer',
                'email'     =>'customer@gmail.com',
                'password'  =>Hash::make('1111'),
                'phone'     =>'01633714056',
                'status'    =>'public',
                'user_id'   =>'IDC-000001',
            ],
        ]);
    }
}
