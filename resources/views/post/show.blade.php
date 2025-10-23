@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-secondary">
            <h5 class="mb-0">Detail Data Post</h5>
        </div>

        <div class="card-body">
            <table class="table table-borderless mb-4">
                <tr>
                    <th width="150">ID</th>
                    <td>{{ $posts->id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $posts->title }}</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{{ $posts->content }}</td>
                </tr>
                <tr>
                    <th>Cover</th>
                    <td><img src="{{ asset('storage/post/' . $posts->cover) }}" alt="cover image" class="rounded border shadow-sm" width="400" height="200"></td>
                </tr>
            </table>

            <div class="justify-content-between">
                <a href="{{ route('post.index') }}" class="btn btn-outline-secondary">Back</a>
                <a href="{{ route('post.edit', $posts->id) }}" class="btn btn-outline-warning">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
