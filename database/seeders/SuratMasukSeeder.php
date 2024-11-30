<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratMasuk;

class SuratMasukSeeder extends Seeder
{
    public function run()
    {
        SuratMasuk::create([
            'no_surat' => '001/SRT/2024',
            'kode_surat' => 'SRT001',
            'tanggal_surat' => '2024-11-01',
            'perihal' => 'Undangan Rapat',
            'pengirim' => 'Admin Kantor',
            'kepada' => 'John Doe',
            'jenis_surat' => 'Undangan',
            'sifat' => 'Penting',
        ]);

        SuratMasuk::create([
            'no_surat' => '002/SRT/2024',
            'kode_surat' => 'SRT002',
            'tanggal_surat' => '2024-11-02',
            'perihal' => 'Laporan Mingguan',
            'pengirim' => 'Admin Kantor',
            'kepada' => 'Jane Smith',
            'jenis_surat' => 'Laporan',
            'sifat' => 'Biasa',
        ]);
    }
}
