<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            /* background-color: #d9d9d9; */
            background-image: url('/img/background login.jpg'); /* Ganti 'background.jpg' dengan nama gambar yang ada di direktori 'public/img' */
            background-size: cover; /* Mengatur gambar agar menutupi seluruh latar belakang */
            background-position: center; /* Mengatur posisi gambar agar berada di tengah */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Membuat konten berada di tengah vertikal */
        }
        .card {
            margin-top: 50px; 
            border: none;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            transition: transform 0.3s;
        }
        .card-header {
            background-color: #ffffff;
            color: #2c3e50;
            text-align: center;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            font-size: 24px;
        }
        .card-body {
            padding: 30px; /* increased padding */
        }
        .form-group {
            position: relative; /* Add relative positioning */
            margin-bottom: 20px; /* increased margin */
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding-left: 40px; /* Adjusted padding */
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .input-icon {
            position: absolute;
            left: 15px; /* Adjusted position */
            top: 70%;
            transform: translateY(-50%);
            color: #000000;
        }
        .btn-primary {
            background-color: #0a0a0a;
            border-color: #ffffff;
            border-radius: 5px;
            width: 100%;
            padding: 15px 0; /* increased padding */
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0f0f0f;
            border-color: #0f0f0f;
        }
        .text-center {
            text-align: center;
        }
        .register-link {
            color: #007bff;
            text-decoration: none;
        }
        .register-link:hover {
            text-decoration: underline;
        }
        /* Additional Style */
        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #ced4da;
            border-radius: 0 0 10px 10px;
            padding: 20px;
        }
        .logo-img {
            width: 70px; /* Sesuaikan dengan ukuran logo Anda */
            margin-right: 10px; /* Sesuaikan jarak antara logo dan teks */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto"> <!-- Added mx-auto class for centering -->
            {{-- @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endif --}}

            {{-- @if (session('loginErrors'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('loginEroors') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endif --}}

            <div class="card-header">
                <img src="{{ asset('img/logo.jpeg') }}" alt="Logo" class="logo-img"> 
                <h5><strong>Login Akun!!</strong></h5>
            </div>
            <div class="card-body">
                <div class="mb-3 position-relative"> <!-- Add position relative -->
                    <i class="fas fa-envelope input-icon"></i><label for="email_or_username" class="form-label">Email/Username:</label>
                    
                    <input type="text" class="form-control" placeholder="Email atau Username" name="email_or_username" required>
                </div>
                <div class="form-group position-relative"> <!-- Add position relative -->
                    <label for="password" class="form-label"><i class="fas fa-lock input-icon"></i>Password:</label>
                    
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
                <div class="text-center mt-3">
                    Belum punya akun? <a href="{{ url('register') }}" class="register-link">Daftar disini</a>
                </div>
            </div>
            <div class="card-footer text-muted text-center">
                &copy; 2024 Your Website. All rights reserved.
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
