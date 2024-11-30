@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Pilih format surat yang ingin diunduh:</h1>

    <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
            <div class="surat-keluar-card text-center shadow">
                <div class="surat-keluar-card-body">
                    <h5 class="surat-keluar-card-title">Surat Tugas</h5>
                    <p class="surat-keluar-card-text">Format untuk surat tugas.</p>
                    <a href="{{ route('laporan.suratKeluar.download', 'surat_tugas') }}" class="surat-keluar-btn btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="surat-keluar-card text-center shadow">
                <div class="surat-keluar-card-body">
                    <h5 class="surat-keluar-card-title">Surat Cuti</h5>
                    <p class="surat-keluar-card-text">Format untuk surat cuti.</p>
                    <a href="{{ route('laporan.suratKeluar.download', 'surat_cuti') }}" class="surat-keluar-btn btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="surat-keluar-card text-center shadow">
                <div class="surat-keluar-card-body">
                    <h5 class="surat-keluar-card-title">Surat Sakit</h5>
                    <p class="surat-keluar-card-text">Format untuk surat sakit.</p>
                    <a href="{{ route('laporan.suratKeluar.download', 'surat_ambil_alih') }}" class="surat-keluar-btn btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="surat-keluar-card text-center shadow">
                <div class="surat-keluar-card-body">
                    <h5 class="surat-keluar-card-title">Surat Lembur</h5>
                    <p class="surat-keluar-card-text">Format untuk surat lembur.</p>
                    <a href="{{ route('laporan.suratKeluar.download', 'surat_lembur') }}" class="surat-keluar-btn btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
