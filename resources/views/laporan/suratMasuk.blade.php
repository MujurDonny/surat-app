@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Metode Input Surat</h3>
    <form action="{{ route('suratmasuk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="form-group">
            <label for="no_surat">No. Surat</label>
            <input type="text" class="form-control" id="no_surat" name="no_surat" required>
    
            <label for="kode_surat">Kode Surat</label>
            <input type="text" class="form-control" id="kode_surat" name="kode_surat">
    
            <label for="tanggal_surat">Tanggal Surat</label>
            <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
    
            <label for="perihal">Perihal</label>
            <textarea class="form-control" id="perihal" name="perihal" rows="3" required></textarea>
    
            <label for="pengirim">Pengirim</label>
            <input type="text" class="form-control" id="pengirim" name="pengirim" required>
    
            <label for="kepada">Kepada</label>
            <input type="text" class="form-control" id="kepada" name="kepada" required>
    
            <label for="jenis_surat">Jenis Surat</label>
            <select class="form-control" id="jenis_surat" name="jenis_surat" required>
                <option value="Undangan">Undangan</option>
                <option value="Surat Tugas">Surat Tugas</option>
                <option value="Surat Resmi">Surat Resmi</option>
                <option value="Lainnya">Lainnya</option>
            </select>
    
            <label for="sifat">Sifat</label>
            <select class="form-control" id="sifat" name="sifat" required>
                <option value="Rahasia">Rahasia</option>
                <option value="Penting">Penting</option>
                <option value="Biasa">Biasa</option>
            </select>
    
            <label for="petugas_id">Petugas ID</label>
            <input type="number" class="form-control" id="petugas_id" name="petugas_id" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan Surat</button>
    </form>
    
</div>

<script>
    function toggleInputForm() {
        var manualForm = document.getElementById('manual_form');
        var fotoForm = document.getElementById('foto_form');
        
        if (document.getElementById('manual').checked) {
            manualForm.style.display = 'block';
            fotoForm.style.display = 'none';
        } else if (document.getElementById('foto').checked) {
            manualForm.style.display = 'none';
            fotoForm.style.display = 'block';
        }
    }
</script>

@endsection
