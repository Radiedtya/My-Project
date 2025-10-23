@extends('layouts.app')

@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white"><h5 class="fw-bold">Data Kelas</h5></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <a href="{{ route('kelas.create') }}" class="btn btn-success mb-3 fw-bold">+ Tambah Kelas</a>
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($kelas as $k)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $k->nama_kelas }}</td>
                                <td class="text-center">
                                    <a href="{{ route('kelas.edit', $k->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('kelas.show', $k->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                                    <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" class="d-inline">
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
