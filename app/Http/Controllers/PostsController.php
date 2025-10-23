<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    // middleware auth untuk mengamankan halaman agar tidak bisa diakses sebelum login
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        // return $posts;
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // manual insert data
        $request->validate(
        [
            'title'  => 'required|string|max:255',
            'content'=> 'required|string|max:255',
            'cover'  => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ],
            // custom notif validasi
        [
            'title.required'   => 'title jangan kosong woyy!',
            'content.required' => 'content jangan kosong woyy!',
            'cover.required'   => 'gambar jangan kosong woyy!'
        ]);

        $posts = new Post;
        $posts->title   = $request->title;
        $posts->content = $request->content;
        $posts->cover   = $request->cover;
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/post', $name);
            $posts->cover = $name;
        }
        $posts->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('post.index');


        // mass insert data + validasi
        // $request->validate(
        // [
        //     'title'  => 'required|string|max:255',
        //     'content'=> 'required|string|max:255',
        //     'cover'  => 'required|image|mimes:jpeg,jpg,png|max:2048'
        // ],
        //     // custom notif validasi
        // [
        //     'title.required'   => 'title jangan kosong woyy!',
        //     'content.required' => 'content jangan kosong woyy!',
        //     'cover.required'   => 'gambar jangan kosong woyy!'
        // ]);

        // Post::create($request->all());
        // return redirect('/post')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findOrfail($id);
        return view('post.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findOrfail($id);
        return view('post.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
        [
            'title'  => 'required|string|max:255',
            'content'=> 'required|string|max:255',
            'cover'  => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $posts = Post::findOrFail($id);
        $posts->title   = $request->title;
        $posts->content = $request->content;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/post', $name);
            $posts->cover = $name;
        }

        $posts->save();

        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::findOrFail($id);
        // proses hapus file gambar di dalam folder
        if ($posts->cover) {
            $filePath = public_path('storage/post/' . $posts->cover);
            if(File::exists($filePath)) {
               File::delete($filePath);
            }
        }

        $posts->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('post.index');
    }
}
