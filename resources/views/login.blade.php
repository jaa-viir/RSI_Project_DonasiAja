<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - DonasiAja!</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><span class="blue-text"></span>Donasi<span class="blue-text">Aja!</span></div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Program Donasi</a></li>
                    <li><a href="#">Testimoni</a></li>
                    <li><a href="#">Mitra</a></li>
                </ul>
                <div class="auth-buttons">
                    <button class="login-btn">Log In</button>
                    <button class="signup-btn">Sign Up</button>
            </div>
        </nav>
    </header>

    <main>
        <div class="login-form-container">
            <form class="login-form">
            <h2>Log In</h2>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button class="login-btn" onclick="window.location.href='{{ route('login') }}'">Log In</button>
            </form>
        </div>
    </main>
</body>
</html>