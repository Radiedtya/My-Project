@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Transaksi</h2>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="id_pembeli" class="form-label">Nama Pembeli</label>
            <select name="id_pembeli" id="id_pembeli" class="form-select" required>
                <option value="">-- Pilih Pembeli --</option>
                @foreach ($pembeli as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_pembeli }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_barang" class="form-label">Nama Barang</label>
            <select name="id_barang" id="id_barang" class="form-select" required>
                <option value="">-- Pilih Barang --</option>
                @foreach ($barang as $b)
                    <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="total_harga" class="form-label">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
