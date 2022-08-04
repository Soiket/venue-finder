<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->insert([

            [
                'name' => 'Mirpur',
                'division_id' => '1',
            ],
            [
                'name' => 'Banani',
                'division_id' => '1',
            ],
            [
                'name' => 'Gulshan',
                'division_id' => '1',
            ],
            [
                'name' => 'Dhanmondi',
                'division_id' => '1',
            ],
            [
                'name' => 'Gulistan',
                'division_id' => '1',
            ],
            [
                'name' => 'Savar',
                'division_id' => '1',
            ],
            [
                'name' => 'Sadarghat',
                'division_id' => '1',
            ],
            [
                'name' => 'Bakalia',
                'division_id' => '2',
                
            ],
            [
                'name' => 'Sulakbahar',
                'division_id' => '2',
                
            ],
            [
                'name' => 'Bondor',
                'division_id' => '2',
                
            ],
            [
                'name' => 'Sadar Upozila',
                'division_id' => '3',
                
            ],
            [
                'name' => 'Notun Bazar',
                'division_id' => '3',
                
            ],

        ]);
    }
}
