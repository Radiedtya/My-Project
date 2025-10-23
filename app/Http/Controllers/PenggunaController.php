<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'nama' => 'required',
        ],
        [
            'nama.required' => 'Nama wajib diisi!',
        ]
        );
        $pengguna = new Pengguna();
        $pengguna->nama = $request->nama;
        $pengguna->save();

        // Pengguna::create($request->all());
        return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        $pengguna = Pengguna::findOrFail($pengguna->id);
        return view('pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        $pengguna = Pengguna::findOrFail($pengguna->id);
        return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        $request->validate(
        [
            'nama' => 'required',
        ],
        [
            'nama.required' => 'Nama wajib diisi!',
        ]
        );
        
        $pengguna = Pengguna::findOrFail($pengguna->id);
        $pengguna->nama = $request->nama;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        $pengguna = Pengguna::findOrFail($pengguna->id);
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Dihapus');
    }
}
