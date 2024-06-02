<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'namatanaman',
        'judul',
        'isi',
        'image',
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
