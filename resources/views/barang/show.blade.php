@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Barang</h1>
        <table class="table table-borderless">
            <tr>
                <th>Nama Barang</th>
                <td>{{ $barang->nama_barang }}</td>
            </tr>
            <tr>
                <th>Merek</th>
                <td>{{ $barang->merk }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>{{ $barang->harga }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $barang->stok }}</td>
            </tr>
        </table>
        <a href="{{ route('barang.index') }}" class="btn btn-dark">Kembali</a>
    </div>
@endsection