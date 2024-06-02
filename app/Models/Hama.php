<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hama extends Model
{
    use HasFactory;

    protected $table = 'hamas';

    protected $fillable = ['namatanaman','judul','gejala','info_lebih_lanjut', 'rekomendasi', 'pengendalian_hayati','pengendalian_kimiawi','obati_penyebab','tindakan_pencegahan','cegah_penyebab','gambar_tanaman','keterangan','tahapanPupuk'];
}
