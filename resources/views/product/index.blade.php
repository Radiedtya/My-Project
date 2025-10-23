@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="">DATA PRODUCTS</h3>
                    <a href="{{ route('product.create') }}" class="btn btn-success"><strong>+ ADD NEW PRODUCT</strong></a>
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
                                <td>NAME</td>
                                <td>DESCRIPTION</td>
                                <td>PRICE</td>
                                <td>STOCK</td>
                                <td width="200">ACTIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($product as $p )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->description }}</td>
                                <td>${{ $p->price }}</td>
                                <td>{{ $p->stock }}</td>
                                <td width="200">
                                    <div class="d-flex flex-column gap-2">
                                        <a href="{{ route('product.edit', $p->id) }}" class="btn btn-warning">EDIT</a>
                                        <a href="{{ route('product.show', $p->id) }}" class="btn btn-primary">SHOW</a>
                                        <form action="{{ route('product.destroy', $p->id) }}" method="post" class="d-inline d-flex flex-column">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('U SURE?');">DELETE</button>
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