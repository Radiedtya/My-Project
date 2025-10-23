<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'merk',
        'harga',
        'stok',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_barang');
    }
}
