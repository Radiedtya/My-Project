<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="card">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                         0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
            </svg>
        </div>

        <h1>Selamat Datang</h1>
        <p>Masuk untuk melanjutkan atau daftar akun baru.</p>

        <!-- tombol login dan register -->
        @if (Route::has('login'))
            <div class="btns">
                <a class="btn primary" href="{{ route('login') }}">
                    <!-- ikon login -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M7 14a5 5 0 1 1 4.9-6H22v4h-2v2h-2v2h-2v2h-4.1A5 5 0 0 1 7 14z"/>
                    </svg>
                    Login
                </a>
                
                @if (Route::has('register'))
                    <a class="btn outline" href="{{ route('register') }}">
                        <!-- ikon register -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"/>
                        </svg>
                        Register
                    </a>
                @endif
            </div>
        @endif
    </div>
</body>
</html>
