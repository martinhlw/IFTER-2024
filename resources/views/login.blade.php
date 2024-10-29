<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Ohaiyo Onicha!</h1>
            <p>Lorem Ipsum is simply</p>
        </div>
        <div class="right">
            <h2>Welcome to lorem..!</h2>
            <div class="toggle-buttons">
                <button class="active">Login</button>
                <button class="inactive" id="registerButton">Register</button>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <label for="username">User name</label>
            <input type="text" id="username" placeholder="Enter your User name">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your Password">
            <div class="remember-forgot">
                <div>
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <a href="#">Forgot Password ?</a>
            </div>
            <button class="login-button">Login</button>
        </div>
    </div>
    <script>
        document.getElementById('registerButton').addEventListener('click', function() {
            window.location.href = '/register';
        });
    </script>
</body>
</html>