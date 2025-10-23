@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5 class="text-primary">Detail Pengguna</h5></div>

                <div class="card-body">
                    <div class="mb-3">
                        <table class="table table-borderless">
                            <tr>
                                <th>ID</th>
                                <td>{{ $pengguna->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $pengguna->nama }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('pengguna.index') }}" class="btn btn-outline-secondary">Kembali</a>
                        <a href="{{ route('pengguna.edit', $pengguna->id) }}" class="btn btn-outline-warning">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection