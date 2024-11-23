<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batches = DB::table('batches')->get(); // Ambil semua batch
        $packages = DB::table('packages')->pluck('price', 'id'); // Ambil harga berdasarkan package_id
        $bookings = [];

        for ($i = 1; $i <= 10; $i++) { // Buat 10 booking
            $batch = $batches->random(); // Pilih batch acak
            $pax = rand(1, 5); // Jumlah peserta acak
            $pricePerPax = $packages[$batch->package_id]; // Ambil harga paket

            $bookings[] = [
                'email' => "user{$i}@example.com",
                'batch_id' => $batch->id,
                'pax' => $pax,
                'total_price' => $pricePerPax * $pax, // Hitung total harga
                'status' => ['pending', 'confirmed', 'canceled'][rand(0, 2)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('bookings')->insert($bookings);
    }
}