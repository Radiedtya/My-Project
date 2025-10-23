@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5 class="text-primary">DESCRIPTION</h5></div>

                <div class="card-body">
                    <div class="mb-3">
                        <table class="table table-borderless">
                            <tr>
                                <th class="text-dark"><i>ID</i></th>
                                <td class="text-dark">{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th class="text-dark"><i>NAME</i></th>
                                <td class="text-dark">{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-dark"><i>DESCRIPTION</i></th>
                                <td class="text-dark">{{ $product->description }}</td>
                            </tr>
                            <tr>
                                <th class="text-dark"><i>PRICE</i></th>
                                <td class="text-dark">{{ $product->price }}</td>
                            </tr>
                            <tr>
                                <th class="text-dark"><i>STOCK</i></th>
                                <td class="text-dark">{{ $product->stock }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('product.index') }}" class="btn btn-dark"><- BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection