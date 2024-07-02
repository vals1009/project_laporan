<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Remix Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>REGISTER</title>
    <style>
        body {
            background-image: url('/img/background login.jpg'); /* Ganti 'background.jpg' dengan nama gambar yang ada di direktori 'public/img' */
            background-size: cover; /* Mengatur gambar agar menutupi seluruh latar belakang */
            background-position: center; /* Mengatur posisi gambar agar berada di tengah */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 400px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa; /* Ubah warna latar belakang card */
            padding: 30px;
        }

        .card-header {
            background-color: transparent;
            text-align: center;
            margin-bottom: 20px;
        }

        .card-header h3 {
            color: #2c3e50;
            font-weight: bold;
            font-size: 28px;
            margin-bottom: 0;
        }

        .form-label {
            color: #2c3e50;
            font-weight: bold;
        }

        .btn-info {
            background-color: #ffffff;
            border-color: #101111;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-info:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .form-control {
            border-radius: 20px;
        }

        .input-group-text {
            background-color: #000000;
            color: #fffcfc;
            border-color: #3498db;
            border-radius: 20px 0 0 20px;
        }

        .input-group-text i {
            color: #ffffff;
        }

        .text-center {
            margin-top: 20px;
        }

        .login-link {
            color: #3498db;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
        .logo-img {
            width: 70px; /* Sesuaikan dengan ukuran logo Anda */
            margin-right: 10px; /* Sesuaikan jarak antara logo dan teks */
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <img src="{{ asset('img/logo.jpeg') }}" alt="Logo" class="logo-img"> 
            <h3>Registrasi Akun!!</h3>
        </div>
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-user-fill"></i></span>
                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-user-fill"></i></span>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-mail-fill"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-lock-fill"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
                </div>
            </div>

            <div class="mb-3 text-center">
                <button name="submit" type="submit" class="btn btn-info"><i class="ri-save-fill"></i> Daftar</button>
            </div>
        <p class="text-center text-muted">Sudah memiliki akun? <a href="{{ url('login') }}" class="login-link">Masuk</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
