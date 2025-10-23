<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            overflow-x: hidden;
        }
        .sidebar {
            min-height: 100vh;
            background: #16263cff;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            border-radius: 6px;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }
    </style>
</head>
<body class="bg-secondary">

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar p-3 shadow">
            <h4 class="mb-4">MyApps</h4>
            <ul class="nav flex-column gap-2">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-house"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile" class="nav-link text-white">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-gear"></i> Settings
                    </a>
                </li>
            </ul>
            <hr class="text-white">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-light w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-5">
            <div class="card shadow-sm p-4">
                <h3 class="mb-3">Halo, {{ Auth::user()->name ?? 'User' }} 👋</h3>
                <p class="text-muted">Selamat datang di dashboard kamu!</p>
                <hr>

                

                <!-- Profile -->
                <div id="profile">
                    <div class="card">
                        <div class="card-body bg-dark text-white">

                            <div class="row mt-4">
                                <h5 class="mb-4 text-center text-warning">Ikuti Social Media Radiedtya</h5>
                                <div class="col-md-3">
                                    <div class="card shadow-sm p-3 text-center">
                                        <h6>Instagram</h6>
                                        <a href="https://instagram.com/rdiettyaa" target="_blank">
                                            <i class="bi bi-instagram text-danger fs-3"></i>
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-sm p-3 text-center">
                                        <h6>WhatsApp</h6>
                                        <a href="https://wa.me/6288222150964" target="_blank">
                                            <i class="bi bi-whatsapp text-success fs-3"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-sm p-3 text-center">
                                        <h6>GitHub</h6>
                                        <a href="https://github.com/Radiedtya" target="_blank">
                                            <i class="bi bi-github text-dark fs-3"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-sm p-3 text-center">
                                        <h6>Telegram</h6>
                                        <a href="https://t.me/+6288222150964" target="_blank">
                                            <i class="bi bi-telegram text-info fs-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        
    </div>
</div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
