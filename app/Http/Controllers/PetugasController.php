<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{


    // Fungsi untuk menampilkan halaman petugas dengan data semua pengguna
    public function index()
    {
        // Ambil semua data pengguna dari tabel users
        $users = User::all(); // Mengambil semua data pengguna

        // Kirimkan data ke view
        return view('data-petugas.index', compact('users'));
    }
}
