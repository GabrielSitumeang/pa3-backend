<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupuk extends Model
{
    use HasFactory;

    protected $table = 'pupuks';

    protected $fillable = ['jenisPemupukan','tahapanPupuk','namatanaman','judul', 'isi', 'gambar_tanaman', 'keterangan'];

}
