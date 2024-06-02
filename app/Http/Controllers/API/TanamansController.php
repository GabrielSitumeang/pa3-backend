<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tanaman; // Import model Tanaman
use Illuminate\Http\Request;

class TanamansController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel tanaman
        $tanamans = Tanaman::select('nama_tanaman', 'gambar_tanaman')->get();
        return response()->json($tanamans);
    }
}
