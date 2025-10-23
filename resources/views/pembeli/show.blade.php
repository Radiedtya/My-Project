@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Pembeli</h1>
        <table class="table table-borderless">
            <tr>
                <th>Nama Pembeli</th>
                <td>{{ $pembeli->nama_pembeli }}</td>
            </tr>
            <tr>
                <th>JK</th>
                <td>{{ $pembeli->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Telepom</th>
                <td>{{ $pembeli->telepon }}</td>
            </tr>
        </table>
        <a href="{{ route('pembeli.index') }}" class="btn btn-dark">Kembali</a>
    </div>
@endsection