<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    public function run()
    {
        Pasien::create([
            'nama' => 'Andi Saputra',
            'nik' => '3201123456789012',
            'alamat' => 'Jl. Merdeka No. 10, Jakarta',
            'telepon' => '081234567890',
            'tanggal_lahir' => '1990-05-20',
            'jenis_kelamin' => 'Laki-laki',
        ]);

        Pasien::create([
            'nama' => 'Sari Wulandari',
            'nik' => '3201987654321098',
            'alamat' => 'Jl. Sudirman No. 25, Bandung',
            'telepon' => '082345678901',
            'tanggal_lahir' => '1988-12-15',
            'jenis_kelamin' => 'Perempuan',
        ]);
    }
}
