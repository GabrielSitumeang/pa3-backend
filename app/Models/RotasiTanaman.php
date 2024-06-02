<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RotasiTanaman extends Model
{
    use HasFactory;

    protected $table = 'rotasi_tanamen';

    protected $fillable = ['jenisInformasi','namatanaman','judul', 'isi', 'gambar_tanaman', 'keterangan'];
}
