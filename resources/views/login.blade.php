<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container-custom d-flex align-items-center justify-content-center">
        <div class="row shadow-lg rounded overflow-hidden main-container">
            <div class="col-md-6 left d-flex flex-column justify-content-center text-center text-white p-5">
                <h1>SELAMAT DATANG!</h1>
                <p>Masuk untuk mengakses akun Anda</p>
                <i class="fas fa-user-circle fa-5x"></i>
            </div>
            <div class="col-md-6 right p-4">
                <h2 class="text-center mb-4">LOGIN</h2>
                <div class="toggle-buttons mb-3 d-flex justify-content-center">
                    <button class="btn active-btn me-2">Login</button>
                    <button class="btn register-btn" id="registerButton">Register</button>
                </div>
                <!-- <p class="text-muted text-center mb-4">Masukkan Username dan Password Untuk Login</p> -->
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control input-custom" id="username" placeholder="Masukkan Username Anda">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control input-custom" id="password" placeholder="Masukkan Password Anda">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                        <a href="#" class="text-decoration-none">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn w-100 login-button">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('registerButton').addEventListener('click', function() {
            window.location.href = '/register';
        });
    </script>
</body>
</html>
