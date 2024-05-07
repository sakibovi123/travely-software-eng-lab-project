<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DestinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                "created_at" => now(),
                "thumbnail" => "https://images.pexels.com/photos/2662116/pexels-photo-2662116.jpeg?cs=srgb&dl=pexels-jaime-reimer-1376930-2662116.jpg&fm=jpg",
                "destination_name" => "Dhaka"
            ],
            [
                "created_at" => now(),
                "thumbnail" => "https://images.pexels.com/photos/402028/pexels-photo-402028.jpeg?cs=srgb&dl=pexels-belle-co-99483-402028.jpg&fm=jpg",
                "destination_name" => "Sreemangal"
            ],
            [
                "created_at" => now(),
                "thumbnail" => "https://images.pexels.com/photos/402028/pexels-photo-402028.jpeg?cs=srgb&dl=pexels-belle-co-99483-402028.jpg&fm=jpg",
                "destination_name" => "Sylhet"
            ],
            [
                "created_at" => now(),
                "thumbnail" => "https://images.pexels.com/photos/402028/pexels-photo-402028.jpeg?cs=srgb&dl=pexels-belle-co-99483-402028.jpg&fm=jpg",
                "destination_name" => "Seoul"
            ],
            [
                "created_at" => now(),
                "thumbnail" => "https://images.pexels.com/photos/402028/pexels-photo-402028.jpeg?cs=srgb&dl=pexels-belle-co-99483-402028.jpg&fm=jpg",
                "destination_name" => "Kyoto"
            ],
            [
                "created_at" => now(),
                "thumbnail" => "https://images.pexels.com/photos/2339009/pexels-photo-2339009.jpeg",
                "destination_name" => "Tokyo"
            ],
            [
                "created_at" => now(),
                "thumbnail" => "https://images.pexels.com/photos/1031798/pexels-photo-1031798.jpeg",
                "destination_name" => "Chittagong"
            ]
        ]);
    }
}
