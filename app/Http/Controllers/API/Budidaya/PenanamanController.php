<?php

namespace App\Http\Controllers\API\Budidaya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penanaman;

class PenanamanController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $penanaman = Penanaman::where('namatanaman', $namaTanaman)->get();
    return response()->json($penanaman, 200);
}
}
