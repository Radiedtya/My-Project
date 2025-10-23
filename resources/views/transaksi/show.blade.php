@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Transaksi</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID Transaksi</th>
            <td>{{ $transaksi->id }}</td>
        </tr>
        <tr>
            <th>Tanggal Transaksi</th>
            <td>{{ $transaksi->tanggal_transaksi }}</td>
        </tr>
        <tr>
            <th>Pembeli</th>
            <td>{{ $transaksi->pembeli->nama_pembeli ?? '-' }}</td>
        </tr>
        <tr>
            <th>Barang</th>
            <td>{{ $transaksi->barang->nama_barang ?? '-' }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $transaksi->jumlah }}</td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
        </tr>
    </table>

    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
