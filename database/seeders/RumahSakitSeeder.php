<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    public function run(): void
    {
        $rumahSakits = [
            ['nama' => 'RS Harapan', 'alamat' => 'Jl. Sudirman No.1', 'email' => 'rs1@gmail.com', 'telepon' => '021-1111111'],
            ['nama' => 'RS Sehat Selalu', 'alamat' => 'Jl. Gatot Subroto No.2', 'email' => 'rs2@gmail.com', 'telepon' => '021-2222222'],
            ['nama' => 'RS Medika', 'alamat' => 'Jl. Asia Afrika No.3', 'email' => 'rs3@gmail.com', 'telepon' => '021-3333333'],
            ['nama' => 'RS Bhakti Husada', 'alamat' => 'Jl. Merdeka No.4', 'email' => 'rs4@gmail.com', 'telepon' => '021-4444444'],
            ['nama' => 'RS Sentosa', 'alamat' => 'Jl. Diponegoro No.5', 'email' => 'rs5@gmail.com', 'telepon' => '021-5555555'],
            ['nama' => 'RS Mitra Keluarga', 'alamat' => 'Jl. Pahlawan No.6', 'email' => 'rs6@gmail.com', 'telepon' => '021-6666666'],
            ['nama' => 'RS Bunda', 'alamat' => 'Jl. Proklamasi No.7', 'email' => 'rs7@gmail.com', 'telepon' => '021-7777777'],
            ['nama' => 'RS Hermina', 'alamat' => 'Jl. Kebon Jeruk No.8', 'email' => 'rs8@gmail.com', 'telepon' => '021-8888888'],
            ['nama' => 'RS Omni', 'alamat' => 'Jl. Setiabudi No.9', 'email' => 'rs9@gmail.com', 'telepon' => '021-9999999'],
            ['nama' => 'RS Medistra', 'alamat' => 'Jl. Thamrin No.10', 'email' => 'rs10@gmail.com', 'telepon' => '021-1010101'],
        ];

        DB::table('rumah_sakit')->insert($rumahSakits);
    }
}
