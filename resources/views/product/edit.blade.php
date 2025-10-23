@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-primary"><h5>EDIT PRODUCT</h5></div>

                <div class="card-body">
                    {{-- pesan error (semua) --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ol>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif

                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">NAME</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="enter name" value="{{ $product->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">DESCRIPTION</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="enter description" value="{{ $product->description }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">PRICE</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="enter price" value="{{ $product->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">STOCK</label>
                            <input type="number" class="form-control" id="stock" name="stock" placeholder="enter stock" value="{{ $product->stock }}">
                        </div>

                        <button type="submit" class="btn btn-primary">SAVE</button>
                        <a href="{{ route('product.index') }}" class="btn btn-dark">BACK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection