<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
    
          [
            'name' => 'Dhaka',
          ],
          [
            'name' => 'Chôţţogram',
          ],
          [
            'name' => 'Borishal',
          ],
          [
            'name' => 'Khulna',
          ],
          [
            'name' => 'Rajshahi',
          ],
          [
            'name' => 'Rangpur',
          ],
          [
            'name' => 'Sylhet',
          ]

        ]);
    }
}
