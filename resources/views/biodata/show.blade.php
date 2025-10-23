@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light">
            <h5 class="mb-0 text-primary">Detail Data Siswa</h5>
        </div>

        <div class="card-body">
            <table class="table table-borderless mb-4">
                <tr>
                    <th width="150">ID</th>
                    <td>{{ $biodata->id }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $biodata->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $biodata->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $biodata->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $biodata->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>{{ $biodata->agama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $biodata->alamat }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $biodata->telepon }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $biodata->email }}</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td><img src="{{ asset('storage/biodata/' . $biodata->gambar) }}" alt="cover image" class="rounded border shadow-sm" width="400" height="200"></td>
                </tr>
            </table>

            <div class="d-flex justify-content-between">
                <a href="{{ route('biodata.index') }}" class="btn btn-outline-secondary">Kembali</a>
                <a href="{{ route('biodata.edit', $biodata->id) }}" class="btn btn-outline-warning">Ubah</a>
            </div>
        </div>
    </div>
</div>
@endsection
