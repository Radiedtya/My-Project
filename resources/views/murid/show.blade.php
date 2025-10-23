@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary">
            <h4 class="mb-0 text-white fw-bold">Detail Data Murid</h4>
        </div>

        <div class="card-body">
            <table class="table table-borderless mb-4">
                <tr>
                    <th width="150">ID</th>
                    <td>{{ $murid->id }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $murid->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $murid->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $murid->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $murid->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>{{ $murid->agama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $murid->alamat }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $murid->email }}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>{{ $murid->kelas->nama_kelas }}</td>
                </tr>
            </table>

            <div class="d-flex justify-content-between">
                <a href="{{ route('murid.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
