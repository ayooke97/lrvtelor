<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AyamSeeder extends Seeder
{
    public function run(): void
    {
        $ayam = [
            [
                'nama_ayam' => 'Ayam Petelur A1',
                'umur' => 24,
                'kriteria' => 'Petelur Produktif',
                'jumlah' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_ayam' => 'Ayam Petelur B1',
                'umur' => 18,
                'kriteria' => 'Petelur Muda',
                'jumlah' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_ayam' => 'Ayam Petelur C1',
                'umur' => 36,
                'kriteria' => 'Petelur Senior',
                'jumlah' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('ayam')->insert($ayam);
    }
}
