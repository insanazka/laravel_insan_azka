<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    public function run(): void
    {
        $pasiens = [
            ['nama' => 'Insan Azka', 'alamat' => 'Alamat 1', 'telepon' => '081234567890', 'rumah_sakit_id' => 2],
            ['nama' => 'Ana 5', 'alamat' => 'Alamat 2', 'telepon' => '081298765432', 'rumah_sakit_id' => 2],
            ['nama' => 'Tari', 'alamat' => 'Alamat 3', 'telepon' => '081211122233', 'rumah_sakit_id' => 8],
            ['nama' => 'Cak Gembul', 'alamat' => 'Alamat 4', 'telepon' => '081244455566', 'rumah_sakit_id' => 8],
            ['nama' => 'Mc Greg', 'alamat' => 'Alamat 5', 'telepon' => '081277788899', 'rumah_sakit_id' => 9],
            ['nama' => 'Siti Nur', 'alamat' => 'Alamat 6', 'telepon' => '081299988877', 'rumah_sakit_id' => 9],
            ['nama' => 'Budi Santoso', 'alamat' => 'Alamat 7', 'telepon' => '081233344455', 'rumah_sakit_id' => 10],
            ['nama' => 'Rina Marlina', 'alamat' => 'Alamat 8', 'telepon' => '081266677788', 'rumah_sakit_id' => 10],
            ['nama' => 'Dika Pratama', 'alamat' => 'Alamat 9', 'telepon' => '081288899900', 'rumah_sakit_id' => 11],
            ['nama' => 'Fulan', 'alamat' => 'Alamat 10', 'telepon' => '081211100011', 'rumah_sakit_id' => 11],
            ['nama' => 'Tono', 'alamat' => 'Alamat 11', 'telepon' => '081222233344', 'rumah_sakit_id' => 12],
            ['nama' => 'Rizky', 'alamat' => 'Alamat 12', 'telepon' => '081233344455', 'rumah_sakit_id' => 12],
            ['nama' => 'Siti Aminah', 'alamat' => 'Alamat 13', 'telepon' => '081244455566', 'rumah_sakit_id' => 13],
            ['nama' => 'Ahmad', 'alamat' => 'Alamat 14', 'telepon' => '081255566677', 'rumah_sakit_id' => 13],
            ['nama' => 'Lia', 'alamat' => 'Alamat 15', 'telepon' => '081266677788', 'rumah_sakit_id' => 14],
            ['nama' => 'Joko', 'alamat' => 'Alamat 16', 'telepon' => '081277788899', 'rumah_sakit_id' => 14],
            ['nama' => 'Indah', 'alamat' => 'Alamat 17', 'telepon' => '081288899900', 'rumah_sakit_id' => 15],
            ['nama' => 'Andi', 'alamat' => 'Alamat 18', 'telepon' => '081299900011', 'rumah_sakit_id' => 15],
            ['nama' => 'Nina', 'alamat' => 'Alamat 19', 'telepon' => '081211122233', 'rumah_sakit_id' => 16],
            ['nama' => 'Rian', 'alamat' => 'Alamat 20', 'telepon' => '081222233344', 'rumah_sakit_id' => 16],
        ];

        DB::table('pasiens')->insert($pasiens);
    }
}
