<h3>Data Surat Terbaru</h3>
<div class="pagination-container">
    <div class="search-container">
        <input type="text" id="searchInput" class="search-box" placeholder="Cari surat..." onkeyup="searchTable()">
    </div>
    <div class="pagination-controls">
        <span id="rangeLabel">Showing 1-10 of 20</span>
        <button id="prevButton" class="pagination-btn" onclick="prevPage()">&lt;</button>
        <button id="nextButton" class="pagination-btn" onclick="nextPage()">&gt;</button>
    </div>
</div>

<table class="table table-hover" id="suratTable">
    <thead>
        <tr>
            <th class="text-center">No. Surat</th>
            <th class="text-center">Kode Surat</th>
            <th class="text-center">Tanggal Surat</th>
            <th>Perihal</th>
            <th class="text-center">Pengirim</th>
            <th class="text-center">Kepada</th>
            <th class="text-center">Jenis Surat</th>
            <th class="text-center">Sifat</th>
            <th class="text-center">Petugas</th>
            <th class="text-center">Waktu</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">001</td>
            <td class="text-center">SRT001</td>
            <td class="text-center">2024-11-01</td>
            <td>Undangan Pembukaan</td>
            <td class="text-center">HMPS</td>
            <td class="text-center">Sekertaris Umum</td>
            <td class="text-center">Undangan</td>
            <td class="text-center">Rahasia</td>
            <td class="text-center">Mujur</td>
            <td class="text-center">10:30 AM</td>
        </tr>
        <tr>
            <td class="text-center">022</td>
            <td class="text-center">SRT002</td>
            <td class="text-center">2024-11-02</td>
            <td>Undangan Pelantikan</td>
            <td class="text-center">Admin</td>
            <td class="text-center">Bintang</td>
            <td class="text-center">Surat Tugas</td>
            <td class="text-center">Penting</td>
            <td class="text-center">Dea</td>
            <td class="text-center">02:00 PM</td>
        </tr>
        <tr>
            <td class="text-center">009</td>
            <td class="text-center">A-08</td>
            <td class="text-center">2024-11-01</td>
            <td>Rapat Triwulan</td>
            <td class="text-center">Sekertaris Umum</td>
            <td class="text-center">Anggota HMPS-RPL</td>
            <td class="text-center">Surat Tugas</td>
            <td class="text-center">Penting</td>
            <td class="text-center">Nadila</td>
            <td class="text-center">02:00 PM</td>
        </tr>
    </tbody>
</table>