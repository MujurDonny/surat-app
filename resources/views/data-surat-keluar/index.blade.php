@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Data Surat Keluar</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No Surat</th>
                <th>Kode Surat</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
                <th>Pengirim</th>
                <th>Jenis Surat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suratKeluar as $surat)
            <tr>
                <td>{{ $surat->no_surat }}</td>
                <td>{{ $surat->kode_surat }}</td>
                <td>{{ $surat->tanggal_surat }}</td>
                <td>{{ $surat->perihal }}</td>
                <td>{{ $surat->pengirim }}</td>
                <td>{{ $surat->jenis_surat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
