<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
                <button class="inactive" id="loginButton">Login</button>
                <button class ="active">Register</button>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your Email Address" required>
                </div>
                <div class="form-group">
                    <label for="username">User name</label>
                    <input type="text" id="username" name="username" placeholder="Enter your User name" required>
                </div>
                <div class="form-group password-icon">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                    <!-- <i class="fas fa-eye"></i> -->
                </div>
                <button type="submit" class="register-button">Register</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            window.location.href = '/login';
        });
    </script>
</body>
</html>