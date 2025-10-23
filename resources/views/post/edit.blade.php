@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Edit Data</h5></div>

                <div class="card-body">
                    <form action="{{ route('post.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $posts->title }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <input type="text" class="form-control" id="content" name="content" value="{{ $posts->content }}">
                            {{-- <textarea class="form-control" id="content" rows="3" name="content" value="{{ $editData->content }}"></textarea> --}}
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover</label>
                            <input type="file" class="form-control" id="cover" name="cover">
                            <img src="{{ asset('storage/post/' . $posts->cover) }}" alt="cover image" class="rounded border shadow-sm mt-2" width="200" height="100">
                        <button type="submit" class="btn btn-outline-warning">Save</button>
                        <a href="{{ route('post.index') }}" class="btn btn-outline-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
