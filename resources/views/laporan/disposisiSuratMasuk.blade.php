@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Disposisi Surat Masuk</h1>
    <p>Berikut adalah daftar surat masuk yang dapat didisposisi.</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nomor Surat</th>
                <th>Pengirim</th>
                <th>Tanggal Masuk</th>
                <th>Disposisi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($suratMasuk as $surat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $surat->pengirim }}</td>
                    <td>{{ $surat->tanggal_masuk }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#disposisiModal-{{ $surat->id }}">
                            Disposisi
                        </button>
                    </td>
                </tr>

                <!-- Modal Disposisi -->
                <div class="modal fade" id="disposisiModal-{{ $surat->id }}" tabindex="-1" aria-labelledby="disposisiModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="disposisiModalLabel">Disposisi Surat Masuk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('laporan.disposisi.surat_masuk.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="surat_id" value="{{ $surat->id }}">
                                    <div class="mb-3">
                                        <label for="catatan" class="form-label">Catatan Disposisi</label>
                                        <textarea name="catatan" id="catatan" rows="4" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada surat masuk yang tersedia untuk disposisi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
