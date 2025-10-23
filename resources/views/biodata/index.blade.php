@extends('layouts.app')

@section('content')

<div class="">
    {{-- pesan success --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card shadow-sm ">
        <div class="mb-4 card-header bg-light">
            <h4 class="mb-0">Data Siswa</h4>
        </div>
        <div class="card-body">
        <a href="{{ route('biodata.create') }}" class="btn btn-outline-success btn-sm shadow-sm mb-3">+ Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-hover table-striped text-center">
                    <thead class="table-light">
                        <tr>
                            <th>NO</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Gambar</th>
                            <th width="200">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($biodata as $b)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $b->nama_lengkap }}</td>
                            <td>{{ $b->jenis_kelamin }}</td>
                            <td>{{ $b->tanggal_lahir }}</td>
                            <td>{{ $b->tempat_lahir }}</td>
                            <td>{{ $b->agama }}</td>
                            <td>{{ $b->alamat }}</td>
                            <td>{{ $b->telepon }}</td>
                            <td>{{ $b->email }}</td>
                            <td>
                                <img src="{{ asset('storage/biodata/' . $b->gambar) }}" 
                                     alt="cover image" 
                                     class="rounded-circle shadow-sm border"
                                     width="150" 
                                     height="150">
                            </td>

                            <td width="200">
                                <div class="d-flex flex-column gap-2">
                                    <a href="{{ route('biodata.edit', $b->id) }}" class="btn btn-sm btn-outline-warning">Ubah</a>
                                    <a href="{{ route('biodata.show', $b->id) }}" class="btn btn-sm btn-outline-primary">Lihat</a>
                                    <form action="{{ route('biodata.destroy', $b->id) }}" method="POST" class="d-inline d-flex flex-column">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin mau hapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
