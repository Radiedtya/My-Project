<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Game::all();
        return view('games.index', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi (agar tidak error ketika form diisi kosong)
        $request->validate(
        [
            'judul'     => 'required|string',
            'deskripsi' => 'required|string',
            'harga'     => 'required',
            'stock'     => 'required|integer',
        ],
        [
            'judul.required'     => 'judul wajib diisi!',
            'deskripsi.required' => 'deskripsi wajib diisi!',
            'harga.required'     => 'harga wajib diisi!',
            'stock.required'     => 'stock wajib diisi!',
        ]
        );

        // proses tambah
        $game = new Game;
        $game->judul     = $request->judul;
        $game->deskripsi = $request->deskripsi;
        $game->harga     = $request->harga;
        $game->stock     = $request->stock;
        $game->save();

        return redirect()->route('game.index')->with('success', 'Game Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        $game = Game::findOrFail($game->id);
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $game = Game::findOrFail($game->id);
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        // validasi
        $request->validate(
        [
            'judul'     => 'required|string',
            'deskripsi' => 'required|string',
            'harga'     => 'required',
            'stock'     => 'required|integer',
        ],
        [
            'judul.required'     => 'judul wajib diisi!',
            'deskripsi.required' => 'deskripsi wajib diisi!',
            'harga.required'     => 'harga wajib diisi!',
            'stock.required'     => 'stock wajib diisi!',
        ]
        );
        
        // proses ubah
        $game = Game::findOrFail($game->id);
        $game->judul     = $request->judul;
        $game->deskripsi = $request->deskripsi;
        $game->harga     = $request->harga;
        $game->stock     = $request->stock;
        $game->save();

        return redirect()->route('game.index')->with('success', 'Game Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game = Game::findOrFail($game->id);
        $game->delete();
        return redirect()->route('game.index')->with('success', 'Game Berhasil Dihapus');
    }
}
