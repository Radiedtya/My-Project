<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            overflow-x: hidden;
            background-color: #f4f6f9;
            font-family: 'Nunito', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #212529, #343a40);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
            border-right: 1px solid rgba(255, 255, 255, 0.08);
        }

        .sidebar-header {
            text-align: center;
            padding: 25px 0 10px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-header h5 {
            color: #ffc107;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 0;
        }

        /* Links */
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 25px;
            gap: 10px;
            font-size: 15px;
            transition: all 0.25s ease-in-out;
            position: relative;
        }

        .sidebar a i {
            font-size: 18px;
        }

        .sidebar a:hover {
            color: #fff;
            background-color: rgba(255, 193, 7, 0.15);
            border-left: 4px solid #ffc107;
            box-shadow: inset 3px 0 8px rgba(255,193,7,0.2);
        }

        .sidebar a.active {
            color: #fff;
            background-color: rgba(255, 193, 7, 0.25);
            border-left: 4px solid #ffc107;
            font-weight: 600;
        }

        /* Logout */
        .logout-container {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 15px 0;
        }

        .logout-link {
            color: #ff6b6b !important;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 25px;
        }

        .logout-link:hover {
            background-color: rgba(255,107,107,0.1);
            color: #fff !important;
            border-left: 4px solid #ff6b6b;
            text-shadow: 0 0 8px rgba(255, 107, 107, 0.8);
        }

        /* Navbar */
        .navbar {
            margin-left: 250px;
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #212529 !important;
        }

        .navbar-brand {
            font-weight: 800;
            letter-spacing: 1px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 40px;
            background-color: #f4f6f9;
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        .main-content h2 {
            font-weight: 700;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content, .navbar {
                margin-left: 200px;
                padding: 30px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                display: none;
            }

            .navbar, .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="bi bi-layers"></i> RYN Project
                </a>
            </div>
        </nav>

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <div class="sidebar-header">
                    <h5><i class="bi bi-grid-1x2-fill text-white me-2"></i>MENU</h5>
                </div>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    <i class="bi bi-house-fill"></i> Home
                </a>
                <a href="{{ route('daftarcrud') }}" class="{{ request()->routeIs('daftarcrud') ? 'active' : '' }}">
                    <i class="bi bi-database-gear"></i> Daftar CRUD
                </a>
            </div>

            @auth
            <div class="logout-container">
                <a href="{{ route('logout') }}" class="logout-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i> Logout ({{ Auth::user()->name }})
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </div>
            @endauth
        </div>

        <!-- Main Content -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
