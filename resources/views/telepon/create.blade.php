@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Telepon</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('telepon.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor</label>
                            <input type="text" class="form-control" id="nomor" name="nomor">
                        </div>
                        
                        <div class="mb-3">
                            <label for="id_pengguna" class="form-label">Nama Pengguna</label>
                            <select name="id_pengguna" id="id_pengguna" class="form-control">
                                @foreach ($datapengguna as $dp )
                                    <option value="{{ $dp->id }}" >{{ $dp->nama }}</option>
                                @endforeach
                            </select>
                        </div>


                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('telepon.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection