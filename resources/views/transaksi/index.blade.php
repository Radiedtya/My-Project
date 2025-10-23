@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Transaksi</h1>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-2"><i class="bi bi-plus-square"></i> Tambah Transaksi</a>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Pembeli</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($transaksi as $t)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $t->tanggal_transaksi }}</td>
                <td>{{ $t->pembeli->nama_pembeli ?? '-' }}</td>
                <td>{{ $t->barang->nama_barang ?? '-' }}</td>
                <td>{{ $t->jumlah }}</td>
                <td>{{ $t->total_harga }}</td>
                <td>
                    <a href="{{ route('transaksi.edit', $t->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="{{ route('transaksi.show', $t->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <form action="{{ route('transaksi.destroy', $t->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('barang.index') }}" class="btn btn-success"><i class="bi bi-box"></i> Barang</a>
    <a href="{{ route('pembeli.index') }}" class="btn btn-success"><i class="bi bi-person-badge"></i> Pembeli</a>
    <a href="{{ route('transaksi.index') }}" class="btn btn-success"><i class="bi bi-journal"></i> Transaksi</a>
</div>

@endsection
