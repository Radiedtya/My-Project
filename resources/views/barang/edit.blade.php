@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $barang->nama_barang }}">
                </div>
                <div class="mb-3">
                    <label for="merk">Merek</label>
                    <input type="text" name="merk" id="merk" class="form-control" value="{{ $barang->merk }}">
                </div>
                <div class="mb-3">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{ $barang->harga }}">
                </div>
                <div class="mb-3">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control" value="{{ $barang->stok }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('barang.index') }}" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection