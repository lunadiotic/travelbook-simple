<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batches = [
            // Bali Beach Getaway
            ['package_id' => 1, 'start_date' => '2024-11-15', 'end_date' => '2024-11-17', 'price' => 2000000, 'quota' => 20, 'available' => 20],
            ['package_id' => 1, 'start_date' => '2024-12-01', 'end_date' => '2024-12-03', 'price' => 2100000, 'quota' => 20, 'available' => 20],

            // Yogyakarta Heritage Tour
            ['package_id' => 2, 'start_date' => '2024-10-01', 'end_date' => '2024-10-04', 'price' => 3000000, 'quota' => 15, 'available' => 15],
            ['package_id' => 2, 'start_date' => '2024-12-05', 'end_date' => '2024-12-08', 'price' => 3200000, 'quota' => 15, 'available' => 15],

            // Mount Bromo Adventure
            ['package_id' => 3, 'start_date' => '2024-11-20', 'end_date' => '2024-11-21', 'price' => 1500000, 'quota' => 10, 'available' => 10],
            ['package_id' => 3, 'start_date' => '2024-11-28', 'end_date' => '2024-11-29', 'price' => 1550000, 'quota' => 10, 'available' => 10],

            // Komodo Island Expedition
            ['package_id' => 4, 'start_date' => '2024-11-10', 'end_date' => '2024-11-14', 'price' => 5000000, 'quota' => 12, 'available' => 12],
            ['package_id' => 4, 'start_date' => '2025-01-10', 'end_date' => '2025-01-14', 'price' => 5200000, 'quota' => 12, 'available' => 12],

            // Raja Ampat Diving Paradise
            ['package_id' => 5, 'start_date' => '2024-12-15', 'end_date' => '2024-12-20', 'price' => 8000000, 'quota' => 10, 'available' => 10],
            ['package_id' => 5, 'start_date' => '2025-01-15', 'end_date' => '2025-01-20', 'price' => 8500000, 'quota' => 10, 'available' => 10],

            // Jakarta City Escape
            ['package_id' => 6, 'start_date' => '2024-11-01', 'end_date' => '2024-11-02', 'price' => 1000000, 'quota' => 30, 'available' => 30],
            ['package_id' => 6, 'start_date' => '2024-12-05', 'end_date' => '2024-12-06', 'price' => 1100000, 'quota' => 30, 'available' => 30],
        ];

        foreach ($batches as $batch) {
            DB::table('batches')->insert(array_merge($batch, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
