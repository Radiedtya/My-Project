@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-light text-primary">
            <h5 class="mb-0">Tambah Biodata Siswa</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" >
                    @error('nama_lengkap')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" >
                        <label class="form-check-label" for="laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" >
                        @error('tanggal_lahir')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" >
                        @error('tempat_lahir')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select name="agama" id="agama" class="form-select" >
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    @error('agama')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" ></textarea>
                    @error('alamat')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" >
                        @error('telepon')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" >
                        @error('email')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" >
                    @error('gambar')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('biodata.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    <button type="submit" class="btn btn-outline-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
