<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DisposisiSuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = SuratMasuk::where('status', 'belum didisposisi')->get();
        return view('laporan.disposisiSuratMasuk', compact('suratMasuk'));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'surat_id' => 'required|exists:surat_masuks,id',
            'catatan' => 'required|string|max:500',
        ]);

        $surat = SuratMasuk::findOrFail($request->surat_id);
        $surat->update([
            'status' => 'didisposisi',
            'catatan_disposisi' => $request->catatan,
        ]);

        return redirect()->route('laporan.disposisi.surat_masuk')
            ->with('success', 'Disposisi berhasil disimpan.');
    }
}
