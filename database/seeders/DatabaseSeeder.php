<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AyamSeeder;
use Database\Seeders\KandangSeeder;
use Database\Seeders\PakanSeeder;
use Database\Seeders\ProduksiTelurSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AyamSeeder::class,
            KandangSeeder::class,
            PakanSeeder::class,
            ProduksiTelurSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
