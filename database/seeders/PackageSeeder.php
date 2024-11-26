<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'Bali Beach Getaway',
                'description' => 'A relaxing 3 days 2 nights trip to the beautiful beaches of Bali.',
                'days' => 3,
                'nights' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yogyakarta Heritage Tour',
                'description' => 'Explore the cultural and historical sites of Yogyakarta in this 4 days 3 nights tour.',
                'days' => 4,
                'nights' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mount Bromo Adventure',
                'description' => 'A thrilling 2 days 1 night adventure to Mount Bromo and surroundings.',
                'days' => 2,
                'nights' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Komodo Island Expedition',
                'description' => 'A 5 days 4 nights expedition to explore Komodo Island and its unique wildlife.',
                'days' => 5,
                'nights' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Raja Ampat Diving Paradise',
                'description' => 'Discover the underwater wonders of Raja Ampat in this 6 days 5 nights diving trip.',
                'days' => 6,
                'nights' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jakarta City Escape',
                'description' => 'A quick 2 days 1 night escape to explore Jakarta’s vibrant city life.',
                'days' => 2,
                'nights' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
