<?php

namespace App\Http\Controllers\Data\Datakeluar;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class DataKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = SuratKeluar::all(); 
        
        return view('data-surat-keluar.index', compact('suratKeluar'));
    }
}
