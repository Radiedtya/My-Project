<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::all();
        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('murid.create', compact('kelas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap'   => 'required|string|max:255',
                'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
                'tanggal_lahir'  => 'required|date',
                'tempat_lahir'   => 'required|string|max:255',
                'agama'          => 'required',
                'alamat'         => 'required|string|max:255',
                'email'          => 'required|email|max:255',
            ]
        );

        $murid                = new Murid;
        $murid->nama_lengkap  = $request->nama_lengkap;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir  = $request->tempat_lahir;
        $murid->agama         = $request->agama;
        $murid->alamat        = $request->alamat;
        $murid->email         = $request->email;
        $murid->id_kelas      = $request->id_kelas;
        $murid->save();

        return redirect()->route('murid.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid  = Murid::findOrFail($id);
        $kelas = Kelas::all();
        return view('murid.edit', compact('murid', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_lengkap'   => 'required|string|max:255',
                'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
                'tanggal_lahir'  => 'required|date',
                'tempat_lahir'   => 'required|string|max:255',
                'agama'          => 'required',
                'alamat'         => 'required|string|max:255',
                'email'          => 'required|email|max:255',
            ]
        );

        $murid                = Murid::findOrFail($id);
        $murid->nama_lengkap  = $request->nama_lengkap;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir  = $request->tempat_lahir;
        $murid->agama         = $request->agama;
        $murid->alamat        = $request->alamat;
        $murid->email         = $request->email;
        $murid->id_kelas      = $request->id_kelas;
        $murid->save();

        return redirect()->route('murid.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();
        return redirect()->route('murid.index')->with('success', 'Data berhasil dihapus!');

    }
}
