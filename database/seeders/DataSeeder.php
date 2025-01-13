<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data')->insert([
            [
                'nip' => '1234567890',
                'nama' => 'John Doe',
                'tempat' => 'Surabaya',
                'tanggal_lahir' => '1990-01-01',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'status' => 'Menikah',
                'alamat' => 'Jl. Mawar No. 123',
                'posisi' => 'Manager',
                'email' => 'johndoe@gmail.com',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk password
            ],
            [
                'nip' => '0987654321',
                'nama' => 'Jane Doe',
                'tempat' => 'Bandung',
                'tanggal_lahir' => '1992-02-02',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Kristen',
                'status' => 'Belum Menikah',
                'alamat' => 'Jl. Melati No. 456',
                'posisi' => 'Staff',
                'email' => 'janedoe@gmail.com',
                'password' => Hash::make('123456'),
            ],
        ]);
    }
}
