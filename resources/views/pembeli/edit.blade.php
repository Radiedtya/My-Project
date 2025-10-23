@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ubah Pembeli</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_pembeli">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" value="{{ $pembeli->nama_pembeli }}">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" 
                        {{ old('jenis_kelamin', $pembeli->jenis_kelamin ?? '') == 'Laki-laki' ? 'checked' : '' }}>
                    <label for="laki">Laki-laki</label>

                    <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" 
                        {{ old('jenis_kelamin', $pembeli->jenis_kelamin ?? '') == 'Perempuan' ? 'checked' : '' }}>
                    <label for="perempuan">Perempuan</label>
                </div>

                <div class="mb-3">
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $pembeli->telepon }}">
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('pembeli.index') }}" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection