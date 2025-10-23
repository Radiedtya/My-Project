@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Add Data</h5></div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                            @error('title')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <input type="text" class="form-control" id="content" name="content" placeholder="Enter Content">
                            @error('content')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                            {{-- <textarea class="form-control" id="content" rows="3" name="content" placeholder="Enter Content"></textarea> --}}
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover</label>
                            <input type="file" class="form-control" id="cover" name="cover">
                            @error('cover')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-success">Save</button>
                        <a href="{{ route('post.index') }}" class="btn btn-outline-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
