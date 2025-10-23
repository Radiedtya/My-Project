<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f6f3;
            font-family: 'Poppins', sans-serif;
            color: #3c3a36;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: #ffffffcc;
            backdrop-filter: blur(8px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        nav .navbar-brand {
            font-weight: 700;
            color: #b18b5e;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        nav .navbar-brand i {
            font-size: 1.3rem;
        }

        .nav-link {
            font-weight: 600;
            color: #6c5f4d !important;
            transition: 0.2s;
        }

        .nav-link:hover {
            color: #b18b5e !important;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: #b18b5e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
        }

        .logo svg {
            width: 40px;
            height: 40px;
            fill: #fff;
        }

        h1 {
            font-weight: 700;
            font-size: 2rem;
            color: #2e2a25;
        }

        p {
            color: #7c7366;
            font-size: 1rem;
        }

        footer {
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #8a8379;
        }

        footer a {
            color: #b18b5e;
            font-weight: 600;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shield-fill"></i> RYN Project
            </a>
            <div class="d-flex">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="nav-link me-3">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    @endif
                @endif
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        <div>
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2l7 4v6c0 5-7 10-7 10S5 17 5 12V6l7-4z"/>
                </svg>
            </div>
            <h1>Selamat Datang</h1>
            <p>Tempat sederhana untuk memulai perjalananmu.</p>
        </div>
    </main>

    {{-- Footer --}}
    <footer>
        © {{ date('Y') }} crafted with ☕ by <a href="https://instagram.com/rdiettyaa" target="_blank">Bro Yujin</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
