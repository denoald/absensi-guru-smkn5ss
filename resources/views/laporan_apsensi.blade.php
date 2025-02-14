<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Absensi - ABSENSI GURU</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo Sekolah">
            </div>
            <h3>Administrator</h3>
            <ul>
                <li><a href="{{ route('home') }}">🏠 Home</a></li>
                <li><a href="{{ route('data_guru') }}">👤 Data Guru</a></li>
                <li class="active"><a href="{{ route('laporan_absensi') }}">📋 Laporan Absensi</a></li>
                <li><a href="{{ route('setting_profile') }}">⚙️ Setting Profile</a></li>
            </ul>
        </div>

        <div class="content">
            <div class="navbar">
                <span>11:20 | Senin, 10 Februari 2025</span>
                <a href="{{ route('logout') }}" class="logout">🔔 Logout</a>
            </div>

            <h1>Laporan Absensi</h1>
            <p>Halaman ini berisi laporan absensi guru.</p>
            <a href="{{ route('home') }}">Kembali ke Home</a>
        </div>
    </div>
</body>
</html>
