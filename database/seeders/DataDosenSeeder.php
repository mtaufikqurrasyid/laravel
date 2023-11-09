<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Data dummy untuk tabel 'data_dosen'
        $dataDosen = [
            [
                'nama' => 'Dosen 1',
                'jabatan' => 'Profesor',
            ],
            [
                'nama' => 'Dosen 2',
                'jabatan' => 'Doktor',
            ],
            // Tambahkan data dosen lainnya di sini
        ];

        // Masukkan data ke dalam tabel 'data_dosen'
        foreach ($dataDosen as $item) {
            DB::table('data_dosen')->insert($item);
        }
    }
}
