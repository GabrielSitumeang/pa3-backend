<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'id',
        'user_id',
        'body',
        'image',
        'created_at'
    ];

}
