@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Data Game</h3>
                    <a href="{{ route('game.create') }}" class="btn btn-success"><strong>+ TAMBAH GAME</strong></a>
                </div>

                {{-- pesan success --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark text-center">
                            <tr>
                                <td>NO</td>
                                <td>JUDUL</td>
                                <td>DESKRIPSI</td>
                                <td>HARGA</td>
                                <td>STOCK</td>
                                <td width="200">AKSI</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($game as $g )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $g->judul }}</td>
                                <td>{{ $g->deskripsi }}</td>
                                <td>Rp. {{ $g->harga }}</td>
                                <td>{{ $g->stock }}</td>
                                <td width="200">
                                    <div class="d-flex flex-column gap-2">
                                        <a href="{{ route('game.edit', $g->id) }}" class="btn btn-warning">UBAH</a>
                                        <a href="{{ route('game.show', $g->id) }}" class="btn btn-primary">DETAIL</a>
                                        <form action="{{ route('game.destroy', $g->id) }}" method="post" class="d-inline d-flex flex-column">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('YAKIN HAPUS GAME INI?');">HAPUS</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection