@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark d-flex justify-content-between">
            <h4 class="mb-0 text-primary">Detail Game</h4>
            <a href="{{ route('game.index') }}" class="btn btn-secondary"><- Kembali</a>
        </div>

        <div class="card-body">
            <table class="table table-borderless mb-4">
                <tr>
                    <th width="150">ID</th>
                    <td>{{ $game->id }}</td>
                </tr>
                <tr>
                    <th>JUDUL</th>
                    <td>{{ $game->judul }}</td>
                </tr>
                <tr>
                    <th>DESKRIPSI</th>
                    <td>{{ $game->deskripsi }}</td>
                </tr>
                <tr>
                    <th>HARGA</th>
                    <td>{{ $game->harga }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $game->stock }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
