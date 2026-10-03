<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

<div class="d-flex">

    <div class="text-white p-3"
        style="width:250px; min-width:250px; height:100vh; background-color:#122e75; position:sticky; top:0;">

        <h4>SMKN 2 KRAKSAAN</h4>
        <hr>

        <ul class="nav flex-column">
            <li>
                <a href="{{ route('dasboard.index') }}" class="nav-link text-white">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('ruangan.index') }}" class="nav-link text-white">
                    Daftar Ruangan
                </a>
            </li>

            <li>
                <a href="{{ route('barang.index') }}" class="nav-link text-white">
                    Daftar Barang
                </a>
            </li>

            <li>
                <a href="{{ route('inventaris.index') }}" class="nav-link text-white">
                    Inventaris
                </a>
            </li>
        </ul>

        <div style="position:absolute; bottom:20px; left:25px;">
            <a href="{{ route('logout') }}" class="btn btn-danger">
                Logout
            </a>
        </div>

    </div>

    <div class="container mt-4">
        @yield('content')
    </div>

</div>

</body>
</html>
