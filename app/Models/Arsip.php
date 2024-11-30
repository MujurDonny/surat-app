<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $fillable = [
        'surat_id', 'folder', 'tanggal_arsip',
    ];

    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }
}

