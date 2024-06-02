<?php

namespace App\Http\Controllers\API\Budidaya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Irigasi;

class IrigasiController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $irigasi = Irigasi::where('namatanaman', $namaTanaman)->get();
    return response()->json($irigasi, 200);
}
}
