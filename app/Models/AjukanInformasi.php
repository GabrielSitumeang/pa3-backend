<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AjukanInformasi extends Model
{
    
    use HasFactory;

    protected $table = 'ajukan_informasis';

    protected $fillable = [
        'user_id',
        'namatanaman',
        'judul',
        'isi',
        'gambar_tanaman',
        'keterangan',
        'informasi',
        'status',
        'tahapan',
        'gejala',
        'rekomendasi',
        'penyebab',
        'tindakanpencegahan',
    ];
    
}
