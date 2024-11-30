@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Daftar Semua Surat Masuk</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No Surat</th>
                <th>Kode Surat</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
                <th>Pengirim</th>
                <th>Kepada</th>
                <th>Jenis Surat</th>
                <th>Sifat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($suratMasuk as $surat)
                <tr>
                    <td>{{ $surat->no_surat }}</td>
                    <td>{{ $surat->kode_surat }}</td>
                    <td>{{ $surat->tanggal_surat }}</td>
                    <td>{{ $surat->perihal }}</td>
                    <td>{{ $surat->pengirim }}</td>
                    <td>{{ $surat->kepada }}</td>
                    <td>{{ $surat->jenis_surat }}</td>
                    <td>{{ $surat->sifat }}</td>
                    <td>{{ $surat->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data surat masuk</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
