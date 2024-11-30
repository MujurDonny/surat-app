<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat', 'judul', 'deskripsi', 'tanggal', 'status',
    ];

    public function arsip()
    {
        return $this->hasOne(Arsip::class);
    }
}
