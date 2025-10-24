<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $transaksi = Transaksi::all();
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        return view('transaksi.index', compact('transaksi', 'pembeli', 'barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        return view('transaksi.create', compact('pembeli', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_transaksi' => 'required|date',
            'id_pembeli' => 'required|exists:pembelis,id', 
            'id_barang' => 'required|exists:barangs,id',   
            'jumlah' => 'required|numeric|min:1',
            'total_harga' => 'required|numeric|min:0',
        ]);

        $transaksi = new Transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        return view('transaksi.edit', compact('transaksi', 'pembeli', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal_transaksi' => 'required|date',
            'id_pembeli' => 'required|exists:pembelis,id', 
            'id_barang' => 'required|exists:barangs,id',   
            'jumlah' => 'required|numeric|min:1',
            'total_harga' => 'required|numeric|min:0',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
