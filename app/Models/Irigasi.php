<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irigasi extends Model
{
    use HasFactory;

    protected $table = 'irigasis';

    protected $fillable = ['namatanaman','judul', 'isi', 'gambar_tanaman', 'keterangan'];
}
