<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = SuratMasuk::all();
        return view('laporan.suratMasuk');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_surat' => 'required|string',
            'kode_surat' => 'required|string',
            'tanggal_surat' => 'required|date',
            'perihal' => 'required|string',
            'pengirim' => 'required|string',
            'foto_surat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jenis_surat' => 'required|string',
        ]);

        $surat = new SuratMasuk();
        $surat->no_surat = $request->no_surat;
        $surat->kode_surat = $request->kode_surat;
        $surat->tanggal_surat = $request->tanggal_surat;
        $surat->perihal = $request->perihal;
        $surat->pengirim = $request->pengirim;
        $surat->jenis_surat = $request->jenis_surat;

        if ($request->hasFile('foto_surat')) {
            $imageName = time() . '.' . $request->foto_surat->extension();
            $request->foto_surat->move(public_path('images'), $imageName);
            $surat->foto_surat = $imageName;
        }

        $surat->save();

        return redirect()->route('surat.index')->with('success', 'Surat berhasil disimpan!');
    }
}

