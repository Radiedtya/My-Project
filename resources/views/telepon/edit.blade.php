@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white fw-bold">Edit Telepon</div>

                <div class="card-body">
                    {{-- Notifikasi error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div> 
                    @endif

                    {{-- Form Update Telepon --}}
                    <form action="{{ route('telepon.update', $datatelepon->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nomor" class="form-label fw-semibold">Nomor</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" value="{{ old('nomor', $datatelepon->nomor) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="id_pengguna" class="form-label fw-semibold">Nama Pengguna</label>
                            <select name="id_pengguna" id="id_pengguna" class="form-control">
                                <option value="">-- Pilih Pengguna --</option>
                                @foreach ($datapengguna as $dp)
                                    <option value="{{ $dp->id }}" {{ $datatelepon->id_pengguna == $dp->id ? 'selected' : '' }}> {{ $dp->nama }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('telepon.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
