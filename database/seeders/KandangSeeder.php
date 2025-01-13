<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KandangSeeder extends Seeder
{
    public function run(): void
    {
        $kandang = [
            [
                'ayam_id' => 1,
                'Nama' => 'Kandang A',
                'Kapasitas' => 120,
                'Kondisi' => 'Baik',
                'Jumlah' => 100,
                'Kesehatan' => 'Sehat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ayam_id' => 2,
                'Nama' => 'Kandang B',
                'Kapasitas' => 200,
                'Kondisi' => 'Baik',
                'Jumlah' => 150,
                'Kesehatan' => 'Sehat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ayam_id' => 3,
                'Nama' => 'Kandang C',
                'Kapasitas' => 100,
                'Kondisi' => 'Perlu Perbaikan',
                'Jumlah' => 75,
                'Kesehatan' => 'Sehat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('kandang')->insert($kandang);
    }
}
