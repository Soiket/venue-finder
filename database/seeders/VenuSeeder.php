<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([

            [
                'zone_id' => '1',
                'name' => 'Mirpur PSC Convention Hall',
                'price' => 20000,
                'discount' => 1500,
                'image' => 'image.jpg',
                'address' => 'Mirpur Dhaka 1216',
                'description' => 'With the top class interior design, CC camera monitoring, Pro',
                'location' => 'https://www.google.com/maps/dir/23.9177521,90.2526174/mirpur+psc/@23.8496825,90.2460909,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c72eaa598267:0xb5108ab1c275a4c2!2m2!1d90.3796452!2d23.8042594'

            ],
            [
                'zone_id' => '1',
                'name' => 'Basundrara Convention Hall',
                'price' => 20000,
                'discount' => 1500,
                'image' => 'image.jpg',
                'address' => 'Baridhara Dhaka',
                'description' => 'With the top class interior design, CC camera monitoring, Pro',
                'location' => 'https://www.google.com/maps/dir/23.9177521,90.2526174/mirpur+psc/@23.8496825,90.2460909,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c72eaa598267:0xb5108ab1c275a4c2!2m2!1d90.3796452!2d23.8042594'

            ],
            [
                'zone_id' => '2',
                'name' => 'Dhaka Convention Hall',
                'price' => 20000,
                'discount' => 1500,
                'image' => 'image.jpg',
                'address' => ' Dhaka',
                'description' => 'With the top class interior design, CC camera monitoring, Pro',
                'location' => 'https://www.google.com/maps/dir/23.9177521,90.2526174/mirpur+psc/@23.8496825,90.2460909,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c72eaa598267:0xb5108ab1c275a4c2!2m2!1d90.3796452!2d23.8042594'

            ],
            [
                'zone_id' => '4',
                'name' => 'Kailakor Convention Hall',
                'price' => 20000,
                'discount' => 1500,
                'image' => 'image.jpg',
                'address' => 'Baridhara Dhaka',
                'description' => 'With the top class interior design, CC camera monitoring, Pro',
                'location' => 'https://www.google.com/maps/dir/23.9177521,90.2526174/mirpur+psc/@23.8496825,90.2460909,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c72eaa598267:0xb5108ab1c275a4c2!2m2!1d90.3796452!2d23.8042594'

            ],
            [
                'zone_id' => '3',
                'name' => 'Rongdhonu Convention Hall',
                'price' => 20000,
                'discount' => 1500,
                'image' => 'image.jpg',
                'address' => 'Baridhara Dhaka',
                'description' => 'With the top class interior design, CC camera monitoring, Pro',
                'location' => 'https://www.google.com/maps/dir/23.9177521,90.2526174/mirpur+psc/@23.8496825,90.2460909,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c72eaa598267:0xb5108ab1c275a4c2!2m2!1d90.3796452!2d23.8042594'

            ],
            [
                'zone_id' => '5',
                'name' => 'Puran poltoon Convention Hall',
                'price' => 20000,
                'discount' => 1500,
                'image' => 'image.jpg',
                'address' => 'Polton Dhaka',
                'description' => 'With the top class interior design, CC camera monitoring, Pro',
                'location' => 'https://www.google.com/maps/dir/23.9177521,90.2526174/mirpur+psc/@23.8496825,90.2460909,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c72eaa598267:0xb5108ab1c275a4c2!2m2!1d90.3796452!2d23.8042594'

            ],
            [
                'zone_id' => '1',
                'name' => 'Merindrara Convention Hall',
                'price' => 20000,
                'discount' => 1500,
                'image' => 'image.jpg',
                'address' => 'Merin Dhaka',
                'description' => 'With the top class interior design, CC camera monitoring, Pro',
                'location' => 'https://www.google.com/maps/dir/23.9177521,90.2526174/mirpur+psc/@23.8496825,90.2460909,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c72eaa598267:0xb5108ab1c275a4c2!2m2!1d90.3796452!2d23.8042594'

            ],
        ]);
    }
}
