<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PakanSeeder extends Seeder
{
    public function run(): void
    {
        $pakan = [
            [
                'kandang_id' => 1,
                'nama_pakan' => 'Pakan Layer Premium',
                'komposisi' => 'Jagung, Dedak, Konsentrat',
                'tglmasuk' => '2024-01-01',
                'tglkeluar' => '2024-01-31',
                'total' => 500,
                'kebutuhan' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kandang_id' => 2,
                'nama_pakan' => 'Pakan Layer Standard',
                'komposisi' => 'Jagung, Dedak, Mineral',
                'tglmasuk' => '2024-01-01',
                'tglkeluar' => '2024-01-31',
                'total' => 750,
                'kebutuhan' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kandang_id' => 3,
                'nama_pakan' => 'Pakan Layer Senior',
                'komposisi' => 'Jagung, Dedak, Vitamin',
                'tglmasuk' => '2024-01-01',
                'tglkeluar' => '2024-01-31',
                'total' => 400,
                'kebutuhan' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('pakan')->insert($pakan);
    }
}
