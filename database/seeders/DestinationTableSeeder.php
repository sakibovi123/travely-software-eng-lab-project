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
                "destination_name" => "Dhaka"
            ],
            [
                "created_at" => now(),
                "destination_name" => "Sreemangal"
            ],
            [
                "created_at" => now(),
                "destination_name" => "Sylhet"
            ]
        ]);
    }
}
