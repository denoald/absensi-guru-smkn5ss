<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Absensi Guru</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
            <img src="{{ asset('assets/logo-sekolah.png') }}" alt="Logo Sekolah">
        </div>
        <h3>Administrator</h3>
        <nav>
            <ul>
                <li class="active"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Data Guru</a></li>
                <li><a href="#"><i class="fas fa-clipboard-list"></i> Laporan Absensi</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Setting Profile</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="content">
        <!-- Navbar -->
        <div class="navbar">
            <div class="date-time">
                11:20 | Senin, 10 Februari 2025
            </div>
            <div class="logout">
                <a href="#"><i class="fas fa-bell"></i> Logout</a>
            </div>
        </div>

        <!-- Dashboard -->
        <div class="dashboard">
            <h2><strong>Halaman Utama</strong></h2>
            <p>Selamat Datang saat ini anda login sebagai Administrator Anda memiliki akses penuh terhadap sistem.</p>

            <div class="card-container">
                <a href="#" class="card green">
                    <i class="fas fa-user"></i>
                    <p>Data Guru</p>
                </a>
                <a href="#" class="card orange">
                    <i class="fas fa-clipboard"></i>
                    <p>Laporan Absensi</p>
                </a>
                <a href="#" class="card pink">
                    <i class="fas fa-user-cog"></i>
                    <p>Setting Profile</p>
                </a>
            </div>
        </div>
    </main>
</div>

</body>
</html>
