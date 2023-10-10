<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_pelanggan' => 'PL0001',
                'nama' => 'Kaleb',
                'alamat' => 'Yogyakarta',
                'nik' => 340406001,
                'no_telepon' => 6289001,
            ],
            [
                'id_pelanggan' => 'PL0002',
                'nama' => 'Damar',
                'alamat' => 'Surabaya',
                'nik' => 340406002,
                'no_telepon' => 6289002,
            ],
            [
                'id_pelanggan' => 'PL0003',
                'nama' => 'Wenda',
                'alamat' => 'Jakarta',
                'nik' => 340406003,
                'no_telepon' => 6289003,
            ],
        ];

        DB::table('pelanggan')->insert($data);
    }
}
