<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksiTelurSeeder extends Seeder
{
    public function run(): void
    {
        $produksi = [
            [
                'ayam_id' => 1,
                'tglproduksi' => '2024-01-13',
                'jumlah' => 85,
                'kualitas' => 'Grade A',
                'berat' => 60,
                'ukuran' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ayam_id' => 2,
                'tglproduksi' => '2024-01-13',
                'jumlah' => 120,
                'kualitas' => 'Grade A',
                'berat' => 58,
                'ukuran' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ayam_id' => 3,
                'tglproduksi' => '2024-01-13',
                'jumlah' => 60,
                'kualitas' => 'Grade B',
                'berat' => 55,
                'ukuran' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('produksitelur')->insert($produksi);
    }
}
