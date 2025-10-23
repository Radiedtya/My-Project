@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pembeli</h1>
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
            <form action="{{ route('pembeli.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_pembeli">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">Perempuan
                </div>
                <div class="mb-3">
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection