@extends('layouts.app')

@section('content')
{{-- <div class=" mb-4 text-center">
    <a href="{{route('home')}}" class="text-primary text-decoration-none "><h5>Kembali ke home</h5></a>
</div> --}}

<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Data Post</h5></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <a href="{{ route('post.create') }}" class="btn btn-outline-success mb-3">+ Add</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Cover</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>
                                    <img src="{{ asset('storage/post/' . $post->cover) }}"
                                     alt="cover image" 
                                     class="rounded-circle shadow-sm border"
                                     width="150" 
                                     height="150">
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-outline-primary btn-sm">Show</a>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('are you sure?')">Delete</button>
                                    </form>
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
