<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
{
    // middleware auth untuk mengamankan halaman agar tidak bisa diakses sebelum login
    public function __construct()
    {
        $this->middleware('auth');
    }

    // menampilkan semua data
    public function index(): View
    {
        $biodata = Biodata::all();
        return view('biodata.index', compact('biodata'));
    }

    // menampilkan form tambah data
    public function create(): View
    {
        return view('biodata.create');
    }

    // tambah data
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
                'telepon'        => 'required|string|max:15',
                'email'          => 'required|email|max:255',
                'gambar'         => 'required|image|mimes:jpeg,jpg,png|max:2048'
            ],
            [
                'nama_lengkap.required'   => 'nama wajib diisi yaa!',
                'jenis_kelamin.required'  => 'jenis kelamin wajib diisi yaa!',
                'tanggal_lahir.required'  => 'tanggal lahir wajib diisi yaa!',
                'tempat_lahir.required'   => 'tempat lahir wajib diisi yaa!',
                'agama.required'          => 'agama wajib diisi yaa!',
                'alamat.required'         => 'alamat wajib diisi yaa!',
                'telepon.required'        => 'telepon wajib diisi yaa!',
                'email.required'          => 'email wajib diisi yaa!',
                'gambar.required'         => 'gambar harus diisi',
            ]
        );

        $biodata                = new Biodata;
        $biodata->nama_lengkap  = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir  = $request->tempat_lahir;
        $biodata->agama         = $request->agama;
        $biodata->alamat        = $request->alamat;
        $biodata->telepon       = $request->telepon;
        $biodata->email         = $request->email;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/biodata', $name);
            $biodata->gambar = $name;
        }

        $biodata->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('biodata.index')->with('success', 'Data berhasil ditambahkan');
    }

    // menampilkan detail data
    public function show($id): View
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodata'));
    }

    // menampilkan form ubah data
    public function edit($id): View
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }

    // ubah data
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_lengkap'   => 'required|string|max:255',
                'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
                'tanggal_lahir'  => 'required|date',
                'tempat_lahir'   => 'required|string|max:255',
                'agama'          => 'required',
                'alamat'         => 'required|string|max:255',
                'telepon'        => 'required|string|max:15',
                'email'          => 'required|email|max:255',
                'gambar'         => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
            ],
            [
                'nama_lengkap.required'   => 'nama wajib diisi yaa!',
                'jenis_kelamin.required'  => 'jenis kelamin wajib diisi yaa!',
                'tanggal_lahir.required'  => 'tanggal lahir wajib diisi yaa!',
                'tempat_lahir.required'   => 'tempat lahir wajib diisi yaa!',
                'agama.required'          => 'agama wajib diisi yaa!',
                'alamat.required'         => 'alamat wajib diisi yaa!',
                'telepon.required'        => 'telepon wajib diisi yaa!',
                'email.required'          => 'email wajib diisi yaa!',
                'gambar.required'         => 'gambar harus diisi',
            ]
        );

        $biodata                = Biodata::findOrFail($id);
        $biodata->nama_lengkap  = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir  = $request->tempat_lahir;
        $biodata->agama         = $request->agama;
        $biodata->alamat        = $request->alamat;
        $biodata->telepon       = $request->telepon;
        $biodata->email         = $request->email;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/biodata', $name);
            $biodata->gambar = $name;
        }

        $biodata->save();
        return redirect()->route('biodata.index')->with('success', 'Data berhasil diubah');
    }

    // hapus data
    public function destroy($id)
    {
        $biodata = Biodata::findOrFail($id);

        // proses hapus file gambar di dalam folder
        if ($biodata->gambar) {
            $filePath = public_path('storage/biodata/' . $biodata->gambar);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $biodata->delete();
        return redirect()->route('biodata.index')->with('success', 'Data berhasil dihapus');
    }
}
