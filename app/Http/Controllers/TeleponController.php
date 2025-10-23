<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatelepon = Telepon::all();
        return view('telepon.index', compact('datatelepon'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapengguna = Pengguna::all();
        return view('telepon.create', compact('datapengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor'       => 'required',
        ]);

        $telepon = new Telepon;
        $telepon->nomor        = $request->nomor;
        $telepon->id_pengguna  = $request->id_pengguna;
        $telepon->save();

        return redirect()->route('telepon.index')->with('success', 'berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        return view('telepon.show', compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datatelepon  = Telepon::findOrFail($id);
        $datapengguna = Pengguna::all();
        return view('telepon.edit', compact('datatelepon', 'datapengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomor'       => 'required',
        ]);

        $telepon = Telepon::findOrFail($id);
        $telepon->nomor        = $request->nomor;
        $telepon->id_pengguna  = $request->id_pengguna;
        $telepon->save();

        return redirect()->route('telepon.index')->with('success', 'berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datatelepon = Telepon::findOrFail($id);
        $datatelepon->delete();
        return redirect()->route('telepon.index')->with('success', 'berhasil dihapus!');
    }
}
