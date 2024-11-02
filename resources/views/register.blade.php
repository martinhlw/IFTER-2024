<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container-custom">
        <div class="main-container">
            <div class="left">
                <h1>SELAMAT DATANG!</h1>
                <p>Silahkan Buat Akun Anda</p>
                <i class="fas fa-user-plus fa-3x"></i>
            </div>
            <div class="right">
                <h2>Buat Akun Anda</h2>
                <div class="toggle-buttons">
                    <button class="btn register-btn" id="loginButton">Login</button>
                    <button class="btn active-btn">Register</button>
                </div>
                <!-- <p>Silahkan isi sesuai dengan detail diri anda</p> -->
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" name="nip" class="input-custom" placeholder="Masukkan NIP Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" class="input-custom" placeholder="Masukkan Alamat Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" id="username" name="username" class="input-custom" placeholder="Masukkan Nama Pengguna Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" class="input-custom" placeholder="Masukkan Kata Sandi Anda" required>
                    </div>
                    <button type="submit" class="login-button">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            window.location.href = '/login';
        });
    </script>
</body>
</html>
