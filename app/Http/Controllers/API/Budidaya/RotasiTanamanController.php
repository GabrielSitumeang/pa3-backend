<?php

namespace App\Http\Controllers\API\Budidaya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RotasiTanaman;

class RotasiTanamanController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $rotasitanaman = RotasiTanaman::where('namatanaman', $namaTanaman)->get();
    return response()->json($rotasitanaman, 200);
}
}
