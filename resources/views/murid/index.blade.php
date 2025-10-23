@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow-sm ">
        <div class="mb-4 card-header bg-light">
            <h4 class="mb-0 fw-bold">Data Murid</h4>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        
        <div class="card-body">
            <a href="{{ route('murid.create') }}" class="btn btn-success btn-sm shadow-sm mb-3">+ Tambah Murid</a>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>NO</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Kelas</th>
                            <th width="200">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($murid as $m)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $m->nama_lengkap }}</td>
                            <td>{{ $m->jenis_kelamin }}</td>
                            <td>{{ $m->tanggal_lahir }}</td>
                            <td>{{ $m->tempat_lahir }}</td>
                            <td>{{ $m->agama }}</td>
                            <td>{{ $m->alamat }}</td>
                            <td>{{ $m->email }}</td>
                            <td><strong>{{ $m->kelas->nama_kelas }}</strong></td>
                            <td width="200">
                                <div class="d-flex flex-column gap-2">
                                    <a href="{{ route('murid.edit', $m->id) }}" class="btn btn-sm btn-warning">Ubah</a>
                                    <a href="{{ route('murid.show', $m->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                                    <form action="{{ route('murid.destroy', $m->id) }}" method="POST" class="d-inline d-flex flex-column">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau hapus data ini?')">
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
