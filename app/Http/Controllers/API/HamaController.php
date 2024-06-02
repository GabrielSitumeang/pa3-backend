<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hama;

class HamaController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $hama = Hama::where('namatanaman', $namaTanaman)->get();
    return response()->json($hama, 200);
}
}
