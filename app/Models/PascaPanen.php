<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PascaPanen extends Model
{
    use HasFactory;

    protected $table = 'pasca_panens';

    protected $fillable = ['namatanaman','judul', 'isi', 'gambar_tanaman', 'keterangan'];
}
