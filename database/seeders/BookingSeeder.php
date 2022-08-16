<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
    
          
            'customer_id' => 1,
            'venue_id' => 1,
            'price' => 20000,
            'date' => '2011-05-05',
            'status' => 'pending',
            'payment_method' => 'cash'
        ]);
    }
}
