@extends('layouts.app')

@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Data Pengguna</h5></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <a href="{{ route('pengguna.create') }}" class="btn btn-outline-success mb-3">+ Tambah Pengguna</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($pengguna as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->nama }}</td>
                                <td class="text-center">
                                    <a href="{{ route('pengguna.edit', $p->id) }}" class="btn btn-outline-warning btn-sm">Ubah</a>
                                    <a href="{{ route('pengguna.show', $p->id) }}" class="btn btn-outline-primary btn-sm">Lihat</a>
                                    <form action="{{ route('pengguna.destroy', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin Hapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
