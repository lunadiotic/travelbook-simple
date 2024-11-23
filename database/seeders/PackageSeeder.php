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
                'name' => 'Explore Bali',
                'description' => 'Nikmati keindahan pantai dan budaya Bali selama 4 hari.',
                'days' => 4,
                'nights' => 3,
                'price' => 2500000,
                'max_people' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Discover Tokyo',
                'description' => 'Rasakan kemeriahan Tokyo dengan wisata modern dan tradisional.',
                'days' => 5,
                'nights' => 4,
                'price' => 7500000,
                'max_people' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'European Highlights',
                'description' => 'Jelajahi kota-kota bersejarah di Eropa selama 7 hari.',
                'days' => 7,
                'nights' => 6,
                'price' => 15000000,
                'max_people' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desert Safari Dubai',
                'description' => 'Petualangan seru di gurun pasir Dubai selama 3 hari.',
                'days' => 3,
                'nights' => 2,
                'price' => 5000000,
                'max_people' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maldives Getaway',
                'description' => 'Bersantai di resor mewah Maladewa selama 6 hari.',
                'days' => 6,
                'nights' => 5,
                'price' => 10000000,
                'max_people' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Explore Thailand',
                'description' => 'Kunjungi Bangkok dan Phuket dalam satu paket perjalanan.',
                'days' => 5,
                'nights' => 4,
                'price' => 4000000,
                'max_people' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}