<?php
namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'no_surat' => 'required|string|unique:surat_masuk',
            'kode_surat' => 'nullable|string',
            'tanggal_surat' => 'required|date',
            'perihal' => 'required|string',
            'pengirim' => 'required|string',
            'kepada' => 'required|string',
            'jenis_surat' => 'required|in:Undangan,Surat Tugas,Surat Resmi,Lainnya',
            'sifat' => 'required|in:Rahasia,Penting,Biasa',
            'petugas_id' => 'required|exists:users,id',
        ]);

        SuratMasuk::create($validatedData);

        return redirect()->route('suratmasuk.index')->with('success', 'Surat Masuk berhasil disimpan!');
    }
}
