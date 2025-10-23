@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>
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
            <form action="{{ route('barang.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="merk">Merek</label>
                    <input type="text" name="merk" id="merk" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection