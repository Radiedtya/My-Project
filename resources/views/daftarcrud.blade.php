@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5 fw-bold neon-title">
        <i class="bi bi-database-gear me-2"></i> Daftar CRUD
    </h2>

    <div class="row justify-content-center g-4">
        @php
            $menus = [
                ['route' => 'post.index',     'title' => 'Data Post',      'icon' => 'bi-journal-text',      'gradient' => 'linear-gradient(135deg, #00c6ff, #0072ff)'],
                ['route' => 'biodata.index',  'title' => 'Data Biodata',   'icon' => 'bi-person-lines-fill', 'gradient' => 'linear-gradient(135deg, #f7971e, #ffd200)'],
                ['route' => 'pengguna.index', 'title' => 'Data Pengguna',  'icon' => 'bi-people-fill',       'gradient' => 'linear-gradient(135deg, #9b23ea, #ff0080)'],
                ['route' => 'telepon.index',  'title' => 'Data Telepon',   'icon' => 'bi-telephone-fill',    'gradient' => 'linear-gradient(135deg, #00b09b, #96c93d)'],
                ['route' => 'game.index',     'title' => 'Data Game',      'icon' => 'bi-controller',        'gradient' => 'linear-gradient(135deg, #fc466b, #3f5efb)'],
                ['route' => 'product.index',  'title' => 'Data Product',   'icon' => 'bi-bag-fill',          'gradient' => 'linear-gradient(135deg, #f12711, #f5af19)'],
                ['route' => 'kelas.index',    'title' => 'Data Kelas',     'icon' => 'bi-mortarboard-fill',  'gradient' => 'linear-gradient(135deg, #43cea2, #185a9d)'],
                ['route' => 'murid.index',    'title' => 'Data Murid',     'icon' => 'bi-book',              'gradient' => 'linear-gradient(135deg, #8e2de2, #4a00e0)'],
                ['route' => 'barang.index',   'title' => 'Data Barang',    'icon' => 'bi-box-seam',          'gradient' => 'linear-gradient(135deg, #11998e, #38ef7d)'],
                ['route' => 'pembeli.index',  'title' => 'Data Pembeli',   'icon' => 'bi-person-fill',       'gradient' => 'linear-gradient(135deg, #ff512f, #dd2476)'],
                ['route' => 'transaksi.index','title' => 'Data Transaksi', 'icon' => 'bi-receipt-cutoff',    'gradient' => 'linear-gradient(135deg, #00c9ff, #92fe9d)'],
            ];
        @endphp

        @foreach ($menus as $menu)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="crud-card" style="--grad: {{ $menu['gradient'] }}">
                <div class="card-header text-dark fw-semibold">
                    {{ $menu['title'] }}
                </div>
                <div class="card-inner text-center p-4">
                    <div class="icon-circle mb-3">
                        <i class="bi {{ $menu['icon'] }}"></i>
                    </div>
                    <a href="{{ route($menu['route']) }}" class="btn-glow">
                        <i class="bi bi-arrow-right-circle me-1"></i> Kelola
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    /* === Dark Gradient Background === */
    body {
        background: linear-gradient(135deg, #0a0f1f 0%, #1b2735 40%, #2a3550 100%);
        min-height: 100vh;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    /* === Neon Title === */
    .neon-title {
        background: linear-gradient(90deg, #00c6ff, #0072ff, #b721ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 0 15px rgba(0, 183, 255, 0.6);
        letter-spacing: 1px;
    }

    /* === Card Container === */
    .crud-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 1.2rem;
        overflow: hidden;
        backdrop-filter: blur(8px);
        transition: all 0.4s ease;
        position: relative;
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
    }

    .crud-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: var(--grad);
        opacity: 0.08;
        transition: opacity 0.4s ease;
        pointer-events: none; /* ✅ fix biar tombol bisa diklik */
    }

    .crud-card:hover::before {
        opacity: 0.2;
    }

    .crud-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 0 25px rgba(0, 255, 255, 0.25);
    }

    /* === Card Header === */
    .card-header {
        background: rgba(255, 255, 255, 0.08);
        text-align: center;
        padding: 0.8rem;
        font-size: 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
        z-index: 2;
    }

    /* === Icon Circle === */
    .icon-circle {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: var(--grad);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 38px;
        color: #fff;
        box-shadow: 0 0 20px rgba(255,255,255,0.1);
        transition: all 0.3s ease;
        margin: auto;
        position: relative;
        z-index: 2;
    }

    .crud-card:hover .icon-circle {
        transform: rotate(10deg) scale(1.1);
        box-shadow: 0 0 30px rgba(255,255,255,0.4);
    }

    /* === Button Glow === */
    .btn-glow {
        display: inline-block;
        padding: 0.6rem 1.2rem;
        border-radius: 2rem;
        font-weight: 600;
        color: #fff;
        text-decoration: none;
        background: var(--grad);
        border: 2px solid transparent;
        transition: all 0.3s ease;
        box-shadow: 0 0 15px rgba(255,255,255,0.15);
        position: relative;
        z-index: 2;
    }

    .btn-glow:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 25px rgba(255,255,255,0.3);
        border-color: #fff;
    }

    /* === Responsive === */
    @media (max-width: 576px) {
        .icon-circle {
            width: 70px;
            height: 70px;
            font-size: 28px;
        }
        .card-header {
            font-size: 0.9rem;
        }
    }
</style>
@endsection
