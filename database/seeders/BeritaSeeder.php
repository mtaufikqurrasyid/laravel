<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dummy untuk tabel 'berita'
        $berita = [
            [
                'judul' => 'Berita 1',
                'konten' => 'Ini adalah berita pertama.',
            ],
            [
                'judul' => 'Berita 2',
                'konten' => 'Ini adalah berita kedua.',
            ],
            // Tambahkan data berita lainnya di sini
        ];

        // Masukkan data ke dalam tabel 'berita'
        foreach ($berita as $item) {
            DB::table('berita')->insert($item);
        }
    }
}