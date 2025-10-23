@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Edit Game</h5></div>

                <div class="card-body">
                    {{-- pesan error (semua) --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ol>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif

                    <form action="{{ route('game.update', $game->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="judul" class="form-label">JUDUL</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="masukkan judul game" value="{{ $game->judul }}">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">DESKRIPSI</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi game" value="{{ $game->deskripsi }}">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">HARGA</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="masukkan harga game" value="{{ $game->harga }}">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">STOCK</label>
                            <input type="number" class="form-control" id="stock" name="stock" placeholder="masukkan stock game" value="{{ $game->stock }}">
                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('game.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection