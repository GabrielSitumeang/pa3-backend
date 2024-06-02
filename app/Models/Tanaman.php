<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    protected $table = 'tanaman';

    protected $fillable = [
        'nama_tanaman',
        'gambar_tanaman'
    ];

}
