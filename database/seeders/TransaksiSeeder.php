<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'ID_transaksi' => 'TR0001',
                'ID_Mobil' => 'M001',
                'ID_Pegawai' => 'PGW001',
                'ID_Pelanggan' => 'PL0001',
                'tanggal_keluar' => '2023-10-09',
                'jam_keluar' => '08:00:00',
                'tanggal_masuk' => '2023-10-11',
                'jam_masuk' => '10:00:00',
                'uang_muka' => 50000.00,
                'status' => 'Selesai',
            ],
            [
                'ID_transaksi' => 'TR0002',
                'ID_Mobil' => 'M002',
                'ID_Pegawai' => 'PGW002',
                'ID_Pelanggan' => 'PL0002',
                'tanggal_keluar' => '2023-10-12',
                'jam_keluar' => '09:30:00',
                'tanggal_masuk' => '2023-10-15',
                'jam_masuk' => '11:45:00',
                'uang_muka' => 60000.00,
                'status' => 'Selesai',
            ],
            [
                'ID_transaksi' => 'TR0003',
                'ID_Mobil' => 'M003',
                'ID_Pegawai' => 'PGW003',
                'ID_Pelanggan' => 'PL0003',
                'tanggal_keluar' => '2023-10-16',
                'jam_keluar' => '11:15:00',
                'tanggal_masuk' => '2023-10-19',
                'jam_masuk' => '13:30:00',
                'uang_muka' => 75000.00,
                'status' => 'Selesai',
            ],
        ];

        DB::table('transaksi')->insert($data);
    }
}
