<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'Soikot',
                'email' => 'soiket@outlook.com',
                'password' => bcrypt('12345678'),
                'isAdmin' => 'yes'

            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'isAdmin' => 'yes'

            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmil.com',
                'password' => bcrypt('12345678'),
                'isAdmin' => 'no'

            ],



        ]);
    }
}
