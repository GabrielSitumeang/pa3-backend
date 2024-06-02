<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemantauan extends Model
{
    use HasFactory;

    protected $table = 'pemantauans';

    protected $fillable = ['namatanaman','judul', 'isi', 'gambar_tanaman', 'keterangan'];
}
