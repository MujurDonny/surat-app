<?php

namespace App\Http\Controllers\Data\Datamasuk;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;

class DataMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = SuratMasuk::all(); 
        
        return view('data-surat-masuk.index', compact('suratMasuk'));
    }
}
