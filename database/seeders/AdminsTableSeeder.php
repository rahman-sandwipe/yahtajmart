<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            //Author
            [
                'adminID'=>'IDA-000001',
                'name'=>'Mr. Admin',
                'email'=>'admin@gmail.com',
                'phone'=>'01633714056',
                'role'=>'admin',
                'status'=>'public',
                'password'=>Hash::make('1111'),
            ]
        ]);
    }
}
