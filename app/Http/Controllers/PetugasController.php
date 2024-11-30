<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        // Ambil data pengguna (petugas) yang bukan data privat
        $petugas = User::where('id', '!=', auth()->id()) // Mengabaikan pengguna yang sedang login
            ->select('id', 'name', 'email', 'created_at') // Pilih kolom yang ingin ditampilkan
            ->get();

        return view('data-petugas.index', compact('petugas'));
    }
}
