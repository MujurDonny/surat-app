<div class="container-fluid">
    <div id="sidebar">
        <button id="toggle-sidebar" class="toggle-btn">&#x00ab;</button>
        
        <div class="sidebar-header">
            <h4>Menu Utama</h4>
        </div>
        <ul class="side-bar">
            <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-list"></span>  Dashboard</a></li>
        </ul>

        <div class="sidebar-header">
            <h4>Daftar Data</h4>
        </div>
        <ul class="side-bar">
            <li><a href="{{ route('data-surat-masuk.index') }}"><span class="fas fa-inbox"></span> Surat Masuk</a></li>
            <li><a href="{{ route('data-surat-keluar.index') }}"><span class="fas fa-paper-plane"></span> Surat Keluar</a></li>
            <li><a href="#"><span class="fas fa-exchange-alt"></span> Disposisi Surat Masuk</a></li>
            <li><a href="{{ route('data-petugas.index') }}"><span class="fas fa-users"></span> Petugas TU</a></li>
        </ul>

        <div class="sidebar-header">
            <h4>Laporan Data</h4>
        </div>
        <ul class="side-bar">
            <li><a href="{{ route('laporan.suratMasuk.index') }}"><span class="fas fa-file-alt"></span> Surat Masuk</a></li>
            <li><a href="{{ route('laporan.suratKeluar') }}"><span class="fas fa-file-alt"></span> Surat Keluar</a></li>
            <li><a href="{{ route('laporan.disposisiSuratMasuk') }}"><span class="fas fa-file-alt"></span> Disposisi Surat Masuk</a></li>
        </ul>
        <div class="sidebar-header">
            <h4>Pengaturan</h4>
        </div>
        <ul class="side-bar">
            <li><a href="#"><span class="fas fa-database"></span> Database</a></li>
            <li><a href="#"><span class="fas fa-inbox"></span> Arsip</a></li>
        </ul>
    </div>
</div>
