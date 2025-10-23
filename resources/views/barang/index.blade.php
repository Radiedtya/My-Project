@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-2">+ Tambah Barang</a>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $b)
            <tr>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->merk }}</td>
                <td>{{ $b->harga }}</td>
                <td>{{ $b->stok }}</td>
                <td class="d-flex gap-1">
                    <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-warning">Ubah</a>
                    <a href="{{ route('barang.show', $b->id) }}" class="btn btn-info">Lihat</a>
                    <form action="{{ route('barang.destroy', $b->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection