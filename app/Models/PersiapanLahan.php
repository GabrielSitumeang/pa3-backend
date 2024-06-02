<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersiapanLahan extends Model
{
    use HasFactory;

    protected $table = 'persiapan_lahans';

    protected $fillable = ['namatanaman','judul', 'isi', 'gambar_tanaman', 'keterangan'];
}
