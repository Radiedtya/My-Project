@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Daftar Pembeli</h1>
    <a href="{{ route('pembeli.create') }}" class="btn btn-primary mb-2">+ Tambah Pembeli</a>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nama Pembeli</th>
                <th>JK</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembeli as $p)
            <tr>
                <td>{{ $p->nama_pembeli }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>{{ $p->telepon }}</td>
                <td class="d-flex gap-1">
                    <a href="{{ route('pembeli.edit', $p->id) }}" class="btn btn-warning">Ubah</a>
                    <a href="{{ route('pembeli.show', $p->id) }}" class="btn btn-info">Lihat</a>
                    <form action="{{ route('pembeli.destroy', $p->id) }}" method="post" class="d-inline">
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