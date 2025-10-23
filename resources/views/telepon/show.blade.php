@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5 class="text-primary">Detail Telepon</h5></div>

                <div class="card-body">
                    <div class="mb-3">
                        <table class="table table-borderless">
                            <tr>
                                <th>ID</th>
                                <td>{{ $telepon->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama Pengguna</th>
                                <td>{{ $telepon->pengguna->nama }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Pengguna</th>
                                <td>{{ $telepon->nomor }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('telepon.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection