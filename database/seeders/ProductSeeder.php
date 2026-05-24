<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nama_alat' => 'Tenda Dome Kapasitas 4 Orang',
                'harga_sewa' => 50000,
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Carrier Eiger 60 Liter',
                'harga_sewa' => 35000,
                'stok' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Sleeping Bag Polar',
                'harga_sewa' => 15000,
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}