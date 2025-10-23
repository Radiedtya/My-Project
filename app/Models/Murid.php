<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $fillable = ['nama_lengkap', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'agama', 'alamat', 'telepon', 'email'];
    public $timestamp = true;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
