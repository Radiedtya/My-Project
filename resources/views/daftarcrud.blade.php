@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-5 fw-bold text-dark">
        <i class="bi bi-database-gear me-2 text-warning"></i> Daftar CRUD
    </h2>

    <div class="row justify-content-center g-4">
        @php
            $menus = [
                ['route' => 'post.index',     'title' => 'Data Post',      'icon' => 'bi-journal-text',      'color' => 'primary'],
                ['route' => 'biodata.index',  'title' => 'Data Biodata',   'icon' => 'bi-person-lines-fill', 'color' => 'success'],
                ['route' => 'pengguna.index', 'title' => 'Data Pengguna',  'icon' => 'bi-people-fill',       'color' => 'info'],
                ['route' => 'telepon.index',  'title' => 'Data Telepon',   'icon' => 'bi-telephone-fill',    'color' => 'warning'],
                ['route' => 'game.index',     'title' => 'Data Game',      'icon' => 'bi-controller',        'color' => 'danger'],
                ['route' => 'product.index',  'title' => 'Data Product',   'icon' => 'bi-box-seam',          'color' => 'secondary'],
                ['route' => 'kelas.index',    'title' => 'Data Kelas',     'icon' => 'bi-mortarboard-fill',  'color' => 'primary'],
                ['route' => 'murid.index',    'title' => 'Data Murid',     'icon' => 'bi-book',              'color' => 'success'],
                ['route' => 'barang.index',   'title' => 'Data Barang',    'icon' => 'bi-bag-fill',          'color' => 'info'],
                ['route' => 'pembeli.index',  'title' => 'Data Pembeli',   'icon' => 'bi-person-fill',       'color' => 'warning'],
                ['route' => 'transaksi.index','title' => 'Data Transaksi', 'icon' => 'bi-receipt-cutoff',    'color' => 'danger'],
            ];

        @endphp

        @foreach ($menus as $menu)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm hover-card rounded-4 text-center p-4 bg-white">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="icon-wrapper mb-3">
                        <i class="bi {{ $menu['icon'] }} icon-glow text-{{ $menu['color'] }}"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">{{ $menu['title'] }}</h5>
                    <a href="{{ route($menu['route']) }}" class="btn btn-outline-{{ $menu['color'] }} px-4 rounded-pill fw-semibold shadow-sm">
                        <i class="bi bi-arrow-right-circle me-1"></i> Kelola
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    /* Card Styling */
    .hover-card {
        transition: all 0.3s ease-in-out;
        border-radius: 1rem;
        background: #fff;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
    }

    .hover-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 28px rgba(0, 0, 0, 0.18);
    }

    /* Icon Styling */
    .icon-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(145deg, #f8f9fa, #e9ecef);
        box-shadow: inset 4px 4px 8px rgba(0,0,0,0.05), inset -4px -4px 8px rgba(255,255,255,0.6);
        transition: all 0.3s ease;
    }

    .icon-wrapper i {
        font-size: 36px;
        transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .hover-card:hover .icon-wrapper {
        transform: scale(1.08);
        box-shadow: 0 0 15px rgba(255, 193, 7, 0.4);
    }

    .hover-card:hover .icon-wrapper i {
        transform: scale(1.1);
        text-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    /* Icon Glow Effect */
    .icon-glow {
        text-shadow: 0 0 6px rgba(0,0,0,0.2);
    }

    /* Button Hover */
    .btn {
        transition: all 0.25s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }

    /* Responsive Grid Gap */
    .g-4 > * {
        margin-bottom: 1.5rem;
    }
</style>
@endsection
