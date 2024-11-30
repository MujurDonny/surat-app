<?php
namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Surat;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function store(Request $request, $surat_id)
    {
        $request->validate([
            'folder' => 'required|string',
            'tanggal_arsip' => 'required|date',
        ]);

        $surat = Surat::findOrFail($surat_id);
        $arsip = $surat->arsip()->create($request->all());
        return response()->json($arsip, 201);
    }

    public function show($id)
    {
        $arsip = Arsip::findOrFail($id);
        return response()->json($arsip);
    }
}

