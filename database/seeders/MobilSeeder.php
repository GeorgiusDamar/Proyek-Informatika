<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ctrl alt I
        DB::table('mobil')->insert([
            [
                'no_polisi' => 'AB123CD',
                'warna' => 'Merah',
                'id_mobil' => 'M001',
                'jenis' => 'Sedan',
                'harga_sewa' => 200000,
            ],
            [
                'no_polisi' => 'XY789ZW',
                'warna' => 'Biru',
                'id_mobil' => 'M002',
                'jenis' => 'SUV',
                'harga_sewa' => 250000,
            ],
            [
                'no_polisi' => 'JK567OP',
                'warna' => 'Hijau',
                'id_mobil' => 'M003',
                'jenis' => 'Hatchback',
                'harga_sewa' => 180000,
            ],
            [
                'no_polisi' => 'MN890QR',
                'warna' => 'Putih',
                'id_mobil' => 'M004',
                'jenis' => 'Sedan',
                'harga_sewa' => 220000,
            ],
            [
                'no_polisi' => 'EF456GH',
                'warna' => 'Hitam',
                'id_mobil' => 'M005',
                'jenis' => 'SUV',
                'harga_sewa' => 260000,
            ],
        ]);

        // php artisan db:seed --class=MobilSeeder

    }
}
