@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-light text-primary">
            <h5 class="mb-0">Ubah Biodata Siswa</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('biodata.update', $biodata->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $biodata->nama_lengkap }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" {{ $biodata->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="laki">Laki-laki</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $biodata->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $biodata->tanggal_lahir }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $biodata->tempat_lahir }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select name="agama" id="agama" class="form-select" required>
                        <option value="Islam" {{ $biodata->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen" {{ $biodata->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katolik" {{ $biodata->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                        <option value="Hindu" {{ $biodata->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Buddha" {{ $biodata->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Konghucu" {{ $biodata->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ $biodata->alamat }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $biodata->telepon }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $biodata->email }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <div class="mt-3">
                        <img src="{{ asset('storage/biodata/' . $biodata->gambar) }}" alt="Gambar {{ $biodata->nama_lengkap }}" width="200" class="border rounded shadow-sm">
                    </div><br>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('biodata.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    <button type="submit" class="btn btn-outline-warning">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection