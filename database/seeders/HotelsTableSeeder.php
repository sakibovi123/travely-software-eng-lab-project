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
                'image' => 'hotel_a.jpg',
                'destination_id' => 1,
                'price' => '200.0',
            ],
            [
                'hotel_name' => 'Hotel B',
                'opening' => '2024-02-01',
                'closing' => '2024-11-30',
                'review' => 4.2,
                'description' => 'Description of Hotel B',
                'image' => 'hotel_b.jpg',
                'destination_id' => 2,
                'price' => '180',
            ],
            
        ]);
    }
}
