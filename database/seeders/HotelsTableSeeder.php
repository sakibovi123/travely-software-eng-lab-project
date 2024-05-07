<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            [
                'hotel_name' => 'Hotel A',
                'opening' => '2024-01-01',
                'closing' => '2024-12-31',
                'review' => 4.5,
                'description' => 'Description of Hotel A',
                // 'image' => 'hotel_a.jpg',
                'destination_id' => 1,
                'price' => '200.0',
                'free_wifi' => 1,
                'image' => 'https://images.pexels.com/photos/10475813/pexels-photo-10475813.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'hotel_name' => 'Hotel B',
                'opening' => '2024-02-01',
                'closing' => '2024-11-30',
                'review' => 4.2,
                'description' => 'Description of Hotel B',
                // 'image' => 'hotel_b.jpg',
                'destination_id' => 2,
                'price' => '180',
                'free_wifi' => 1,
                'image' => 'https://images.pexels.com/photos/10475813/pexels-photo-10475813.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],

            [
                'hotel_name' => 'Hotel C',
                'opening' => '2024-02-01',
                'closing' => '2024-11-30',
                'review' => 4.2,
                'description' => 'Description of Hotel C',
                // 'image' => 'hotel_b.jpg',
                'destination_id' => 3,
                'price' => '5800',
                'free_wifi' => 0,
                'image' => 'https://images.pexels.com/photos/10475813/pexels-photo-10475813.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],

            [
                'hotel_name' => 'Hotel C',
                'opening' => '2024-02-01',
                'closing' => '2024-11-30',
                'review' => 4.2,
                'description' => 'Description of Hotel C',
                // 'image' => 'hotel_b.jpg',
                'destination_id' => 4,
                'price' => '4500',
                'free_wifi' => 0,
                'image' => 'https://images.pexels.com/photos/10475813/pexels-photo-10475813.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],

        ]);
    }
}
