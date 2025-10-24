<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        :root {
            --sidebar-bg: linear-gradient(180deg, #212529, #343a40);
            --navbar-bg: #212529;
            --main-bg: #f4f6f9;
            --main-text: #212529;
            --accent: #ffc107;
        }

        body.dark-mode {
            --sidebar-bg: linear-gradient(180deg, #1a1d20, #2a2f35);
            --navbar-bg: #1a1d20;
            --main-bg: #121416;
            --main-text: #f1f3f5;
            --accent: #ffd43b;
        }

        body {
            background: var(--main-bg);
            color: var(--main-text);
            font-family: 'Nunito', sans-serif;
            overflow-x: hidden;
            transition: all 0.4s ease;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--sidebar-bg);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-right: 1px solid rgba(255,255,255,0.1);
            box-shadow: 4px 0 15px rgba(0,0,0,0.3);
            transition: transform 0.4s cubic-bezier(.68,-0.55,.27,1.55);
        }

        .sidebar.hidden {
            transform: translateX(-260px);
        }

        .sidebar-header {
            text-align: center;
            padding: 25px 0 10px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-header h5 {
            color: var(--accent);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 25px;
            gap: 10px;
            font-size: 15px;
            transition: all 0.25s ease-in-out;
        }

        .sidebar a:hover {
            color: #fff;
            background-color: rgba(255, 193, 7, 0.15);
            border-left: 4px solid var(--accent);
        }

        .sidebar a.active {
            color: #fff;
            background-color: rgba(255, 193, 7, 0.25);
            border-left: 4px solid var(--accent);
            font-weight: 600;
        }

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
        }

        /* Navbar */
        .navbar {
            margin-left: 250px;
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: var(--navbar-bg) !important;
            transition: all 0.4s ease;
        }

        /* Sidebar toggle */
        .sidebar-toggle {
            background: none;
            border: none;
            color: var(--accent);
            font-size: 1.7rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar-toggle:hover {
            transform: scale(1.15);
            color: #fff;
        }

        /* Theme toggle */
        .theme-toggle {
            background: none;
            border: none;
            color: var(--accent);
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            transform: rotate(25deg);
            color: #fff;
        }

        /* Tooltip */
        .btn-tooltip {
            position: relative;
        }
        .btn-tooltip::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: -35px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0,0,0,0.75);
            color: #fff;
            padding: 4px 8px;
            font-size: 12px;
            border-radius: 4px;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .btn-tooltip:hover::after {
            opacity: 1;
            bottom: -30px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 40px;
            background-color: var(--main-bg);
            min-height: 100vh;
            transition: all 0.4s ease;
        }

        body.sidebar-hidden .navbar,
        body.sidebar-hidden .main-content {
            margin-left: 0 !important;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar, .main-content { margin-left: 0 !important; }
            .sidebar { transform: translateX(-260px); }
            .sidebar.show { transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm px-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <!-- Sidebar Toggle -->
                <button id="sidebarToggle" class="sidebar-toggle btn-tooltip" data-tooltip="Sidebar">
                    <i class="bi bi-list"></i>
                </button>
                <a class="navbar-brand fw-bold text-light" href="{{ url('/') }}">
                    <i class="bi bi-layers"></i> RYN Project
                </a>
            </div>
            <!-- Dark Mode Toggle -->
            <button id="themeToggle" class="theme-toggle btn-tooltip" data-tooltip="Mode">
                <i class="bi bi-moon-stars-fill"></i>
            </button>
        </nav>

        <!-- Sidebar -->
        <div id="sidebar" class="sidebar">
            <div>
                <div class="sidebar-header">
                    <h5><i class="bi bi-grid-1x2-fill text-white me-2"></i> MENU</h5>
                </div>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    <i class="bi bi-house-fill"></i> Home
                </a>
                <a href="{{ route('daftarcrud.index') }}" class="{{ request()->routeIs('daftarcrud.index') ? 'active' : '' }}">
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
    <script>
        const body = document.body;
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = themeToggle.querySelector('i');
        const sidebarIcon = sidebarToggle.querySelector('i');

        // Load theme
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode');
            themeIcon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
        }

        // Load sidebar
        if (localStorage.getItem('sidebar') === 'hidden') {
            sidebar.classList.add('hidden');
            body.classList.add('sidebar-hidden');
            sidebarIcon.classList.replace('bi-list', 'bi-x-lg');
        }

        // Toggle theme
        themeToggle.addEventListener('click', () => {
            const isDark = body.classList.toggle('dark-mode');
            themeIcon.classList.replace(isDark ? 'bi-moon-stars-fill' : 'bi-sun-fill',
                                        isDark ? 'bi-sun-fill' : 'bi-moon-stars-fill');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });

        // Toggle sidebar
        sidebarToggle.addEventListener('click', () => {
            const isHidden = sidebar.classList.toggle('hidden');
            body.classList.toggle('sidebar-hidden', isHidden);
            sidebarIcon.classList.replace(isHidden ? 'bi-list' : 'bi-x-lg',
                                          isHidden ? 'bi-x-lg' : 'bi-list');
            localStorage.setItem('sidebar', isHidden ? 'hidden' : 'shown');
        });
    </script>
</body>
</html>
