<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- buat icon logout ini -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            margin: 0;
            background-color: #f8f9fc;
        }
        .sidebar {
            width: 250px;
            min-width: 250px;
            height: 100vh;
            background-color: #122e75;
            position: sticky;
            top: 0;
            padding: 25px 15px;
        }
        .sidebar-title {
            padding: 0 10px;
            margin-bottom: 25px;
        }
        .sidebar-title h4 {
            font-weight: 700;
            margin-bottom: 5px;
        }
        .sidebar-title small {
            color: #bfcaf0;
        }
        .sidebar hr {
            border-color: rgba(255,255,255,0.2);
        }
        .menu-title {
            color: #9eadd6;
            font-size: 12px;
            font-weight: 700;
            padding: 0 12px;
            margin: 25px 0 8px;
            text-transform: uppercase;
        }
        .sidebar .nav-link {
            color: #ffffff;
            padding: 12px 14px;
            margin: 5px 0;
            border-radius: 8px;
            transition: 0.2s;
            font-size: 16px;
            font-weight: 500;
        }
        .sidebar .nav-link:hover {
            background-color: rgba(255,255,255,0.12);
            color: #ffffff;
        }
        .sidebar .nav-link.active {
            background-color: #ffffff;
            color: #122e75;
            font-weight: 700;
            box-shadow: 0 3px 8px rgba(0,0,0,0.12);
        }
        .logout {
            position: absolute;
            bottom: 25px;
            left: 15px;
            right: 15px;
        }
        .logout a {
            display: block;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
        }
        .content {
            flex: 1;
            padding: 25px 30px;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <div class="sidebar text-white">
        <div class="sidebar-title">
            <h4>SMKN 2<br>KRAKSAAN</h4>
            <small>Sistem Inventaris Sekolah</small>
        </div>
        <hr>
        <div class="menu-title">Menu Utama</div>
        <ul class="nav flex-column">
            <li>
                <a href="{{ route('dasboard.index') }}" class="nav-link">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('ruangan.index') }}" class="nav-link">
                    Daftar Ruangan
                </a>
            </li>
            <li>
                <a href="{{ route('barang.index') }}" class="nav-link">
                    Daftar Barang
                </a>
            </li>
            <li>
                <a href="{{ route('inventaris.index') }}" class="nav-link active">
                    Inventaris
                </a>
            </li>
        </ul>
        <div class="logout">
            <a href="{{ route('logout') }}" class="btn btn-danger">
                <i class="bi bi-box-arrow-right me-2"></i>Logout
            </a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>