<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $table = 'surat_masuk';
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
        'created_at',
        'updated_at',
    ];

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
