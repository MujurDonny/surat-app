<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Persuratan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="manajemen-persuratan">

    <x-Header></x-Header>

    <x-Sidebar></x-Sidebar>

    <x-Dashboard></x-Dashboard>

    <div class="summary-section">
      <div class="summary-box">
          <i class="fas fa-inbox"></i>
          <h3>Surat Masuk</h3>
          <p class="summary-value">120</p>
      </div>
      <div class="summary-box">
          <i class="fas fa-paper-plane"></i>
          <h3>Surat Keluar</h3>
          <p class="summary-value">80</p>
      </div>
      <div class="summary-box">
          <i class="fas fa-check-circle"></i>
          <h3>Disposisi Surat</h3>
          <p class="summary-value">50</p>
      </div>
      <div class="summary-box">
          <i class="fas fa-users"></i>
          <h3>Jumlah Pengguna</h3>
          <p class="summary-value">10</p>
      </div>
  </div>

    <x-Tabel></x-Tabel>

    </div>
  </div>

    @vite('resources/js/app.js')
</body>
</html>

