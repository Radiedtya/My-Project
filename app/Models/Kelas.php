<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kelas'];
    public $timestamp = true;

    public function murid()
    {
        return $this->hasMany(Murid::class);
    }

    
}
