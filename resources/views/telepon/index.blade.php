@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Data Telepon</h5></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <a href="{{ route('telepon.create') }}" class="btn btn-success mb-3">+ Tambah Telepon</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor</th>
                                <th>Nama Pengguna</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($datatelepon as $dp)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $dp->nomor }}</td>
                                <td>{{ $dp->pengguna->nama }}</td>
                                <td class="text-center">
                                    <a href="{{ route('telepon.edit', $dp->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('telepon.show', $dp->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                                    <form action="{{ route('telepon.destroy', $dp->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus data ini?')">Hapus</button>
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
