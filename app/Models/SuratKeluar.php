<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $table = 'surat_keluar';
    protected $fillable = [
        'no_surat',
        'kode_surat',
        'tanggal_surat',
        'perihal',
        'pengirim',
        'kepada',
        'jenis_surat',
        'sifat',
        'petugas_id',
    ];

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
