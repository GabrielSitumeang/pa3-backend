<?php

namespace App\Http\Controllers\API\Budidaya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panen;

class PanenController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $panen = Panen::where('namatanaman', $namaTanaman)->get();
    return response()->json($panen, 200);
}
}
