<?php

namespace App\Http\Controllers\API\Budidaya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemantauan;

class PemantauansController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $pemantauan = Pemantauan::where('namatanaman', $namaTanaman)->get();
    return response()->json($pemantauan, 200);
}
}
