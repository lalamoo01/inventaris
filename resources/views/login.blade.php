<!DOCTYPE html>
<html>
<head>
    <title>Login - Inventaris SMKN 2 Kraksaan</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f5f6ff;
        }
        .login-page {
            min-height: 100vh;
            display: flex;
            background: linear-gradient(135deg, #152d73, #3154c7, #6678ed);
            position: relative;
            overflow: hidden;
        }
        .login-page::before {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 50%;
            left: -180px;
            top: -100px;
        }
        .login-page::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 50%;
            left: 40%;
            bottom: -190px;
        }
        .left-side {
            width: 55%;
            min-height: 100vh;
            padding: 90px;
            color: white;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        .left-content {
            max-width: 500px;
        }
        .school-name {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 70px;
        }
        .school-name::after {
            content: "";
            display: block;
            width: 45px;
            height: 3px;
            background: rgba(255,255,255,0.8);
            margin-top: 12px;
            border-radius: 5px;
        }
        .left-content h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .left-content h2 {
            font-size: 20px;
            font-weight: normal;
            margin-bottom: 25px;
        }
        .left-content p {
            font-size: 15px;
            line-height: 1.7;
            opacity: 0.85;
        }
        .right-side {
            width: 45%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px;
            position: relative;
            z-index: 2;
        }
        .login-card {
            width: 100%;
            max-width: 520px;
            min-height: 650px;
            background: white;
            border-radius: 15px;
            padding: 55px 50px 30px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.12);
        }
        .login-card h2 {
            text-align: center;
            color: #111;
            font-size: 34px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .login-subtitle {
            text-align: center;
            color: #888;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 45px;
        }
        .form-label {
            font-size: 13px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }
        .input-box {
            position: relative;
        }
        .input-icon {
            position: absolute;
            left: 15px;
            top: 14px;
            font-size: 14px;
            color: #68748a;
            z-index: 2;
        }
        .form-control {
            height: 48px;
            border-radius: 7px;
            border: 1px solid #dce1ea;
            padding: 0 15px 0 40px;
            font-size: 13px;
            background: #fafbfe;
        }
        .form-control:focus {
            border-color: #435ce0;
            box-shadow: 0 0 0 3px rgba(67,92,224,0.1);
            background: white;
        }
        .login-btn {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 7px;
            background: #0d2366;
            color: white;
            font-size: 14px;
            font-weight: bold;
            margin-top: 8px;
            transition: 0.2s;
        }
        .login-btn:hover {
            background: #091a4d;
        }
        .footer-text {
            text-align: center;
            color: #999;
            font-size: 10px;
            margin-top: 35px;
            padding-top: 18px;
            border-top: 1px solid #eee;
        }
        @media (max-width: 768px) {
            .login-page {
                display: block;
            }
            .left-side {
                width: 100%;
                min-height: 300px;
                padding: 45px;
            }
            .school-name {
                margin-bottom: 35px;
            }
            .left-content h1 {
                font-size: 35px;
            }
            .right-side {
                width: 100%;
                min-height: auto;
                padding: 30px 20px;
            }
            .login-card {
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>
<div class="login-page">
    <div class="left-side">
        <div class="left-content">
            <div class="school-name">SMKN 2 KRAKSAAN</div>
            <h1>Selamat Datang Admin!</h1>
            <h2>Sistem Informasi Inventaris Sekolah</h2>
            <p>Kelola data ruangan dan barang inventaris sekolah dengan lebih mudah dan teratur.</p>
        </div>
    </div>
    <div class="right-side">
        <div class="login-card">
            <h2>Login</h2>
            <p class="login-subtitle">Masukkan email dan password Anda<br>untuk melanjutkan ke sistem.</p>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('login.proses') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <div class="input-box">
                        <span class="input-icon">✉</span>
                        <input type="email" name="email" class="form-control" placeholder="Contoh: admin@gmail.com" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <div class="input-box">
                        <span class="input-icon">🔒</span>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    </div>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
            <div class="footer-text">
                SMKN 2 Kraksaan<br>
                Sistem Informasi Inventaris Ruangan & Barang
            </div>
        </div>
    </div>
</div>
</body>
</html>