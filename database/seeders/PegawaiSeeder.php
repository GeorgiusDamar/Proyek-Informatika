<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            [
                'ID_Pegawai' => 'PGW001',
                'Nama' => 'John Doe',
                'NIK' => 100,
                'Alamat' => 'Jalan Contoh No. 123',
                'No_telepon' => 123456789,
                'tanggal_bekerja' => '2022-01-15',
            ],
            [
                'ID_Pegawai' => 'PGW002',
                'Nama' => 'Jane Smith',
                'NIK' => 200,
                'Alamat' => 'Jalan Lain No. 456',
                'No_telepon' => 987654321,
                'tanggal_bekerja' => '2022-02-20',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
