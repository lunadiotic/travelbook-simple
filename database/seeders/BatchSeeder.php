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
        $packages = DB::table('packages')->get(); // Ambil semua data package
        $batches = [];
        $startDate = today();

        foreach ($packages as $package) {
            for ($i = 0; $i < 3; $i++) { // Buat 3 batch untuk setiap package
                $start = $startDate->copy()->addDays(rand(10, 30) * $i);
                $end = $start->copy()->addDays($package->days - 1); // Durasi perjalanan sesuai jumlah hari
                $batches[] = [
                    'package_id' => $package->id,
                    'start_date' => $start->toDateString(),
                    'end_date' => $end->toDateString(),
                    'quota_available' => rand(5, $package->max_people), // Kuota sesuai kapasitas maksimal
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('batches')->insert($batches);
    }
}