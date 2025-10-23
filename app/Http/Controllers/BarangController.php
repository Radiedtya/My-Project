<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->merk = $request->merk;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect()->route('barang.index')->with('success', 'barang baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->merk = $request->merk;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect()->route('barang.index')->with('success', 'barang baru berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'barang baru berhasil dihapus');

    }
}
