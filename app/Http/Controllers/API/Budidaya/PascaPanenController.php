<?php

namespace App\Http\Controllers\API\Budidaya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PascaPanen;

class PascaPanenController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $pascapanen = PascaPanen::where('namatanaman', $namaTanaman)->get();
    return response()->json($pascapanen, 200);
}
}
