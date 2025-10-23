<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lupa Password</title>

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
            align-items: center;
            justify-content: center;
        }

        .card {
            background: #ffffffcc;
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid #e2d8c4;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 400px;
            padding: 2rem 2.2rem;
            text-align: center;
        }

        .logo {
            width: 70px;
            height: 70px;
            background: #b18b5e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
        }

        .logo svg {
            width: 36px;
            height: 36px;
            fill: #fff;
        }

        h3 {
            font-weight: 700;
            color: #2f2a23;
            margin-bottom: 1rem;
        }

        .form-label {
            font-weight: 500;
            color: #5a5145;
            text-align: left;
        }

        .form-control {
            background-color: #fcfaf6;
            border: 1px solid #ded3bf;
            border-radius: 10px;
            color: #3c3a36;
            transition: all 0.25s ease;
        }

        .form-control:focus {
            border-color: #b18b5e;
            box-shadow: 0 0 0 0.2rem rgba(177,139,94,0.2);
        }

        .btn-primary {
            background-color: #b18b5e;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.6rem 0;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #a37a4a;
            transform: translateY(-2px);
        }

        .register-link {
            margin-top: 1.3rem;
            font-size: 0.95rem;
            color: #6f655a;
        }

        .register-link a {
            color: #b18b5e;
            font-weight: 600;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 1.5rem;
            color: #8a8379;
            font-size: 0.85rem;
        }

        footer a {
            color: #b18b5e;
            text-decoration: none;
            font-weight: 500;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2l7 4v6c0 5-7 10-7 10S5 17 5 12V6l7-4z"/>
            </svg>
        </div>

        <h3>Lupa Password</h3>

        <p class="text-muted mb-4" style="font-size: 0.9rem;">
            Masukkan email kamu, nanti link reset password akan dikirim.
        </p>

        <!-- Success message -->
        @if (session('status'))
            <div class="alert alert-success small" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Send Reset Link -->
            <button type="submit" class="btn btn-primary w-100">
                Kirim Link Reset
            </button>
        </form>

        <div class="register-link">
            <a href="{{ route('login') }}">← Kembali ke Login</a>
        </div>

        <footer>
            © {{ date('Y') }} crafted with ☕ by <a href="https://instagram.com/rdiettyaa" target="_blank">Bro Yujin</a>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
