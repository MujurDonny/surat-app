<?php
namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    public function show()
    {
        return view('laporan.suratKeluar');
    }

    public function downloadTemplate($type)
    {
        $templates = [
            'surat_tugas' => 'templates/surat_tugas.docx',
            'surat_cuti' => 'templates/surat_cuti.docx',
            'surat_ambil_alih' => 'templates/surat_ambil_alih.docx',
            'surat_lembur' => 'templates/surat_lembur.docx',
        ];
    
        if (array_key_exists($type, $templates)) {
            $filePath = storage_path('app/' . $templates[$type]);
    
            if (file_exists($filePath)) {
                return response()->download($filePath, $type . '.docx');
            } else {
                abort(404, 'Template surat tidak ditemukan.');
            }
        }
    
        abort(404, 'Template surat tidak ditemukan.');
    }
    
}


