<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(ZoneSeeder::class);
        $this->call(VenuSeeder::class);
        $this->call(BookingSeeder::class);
    }
}
