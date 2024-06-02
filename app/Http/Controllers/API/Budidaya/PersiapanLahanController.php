<?php

namespace App\Http\Controllers\API\Budidaya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersiapanLahan;

class PersiapanLahanController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $persiapan = PersiapanLahan::where('namatanaman', $namaTanaman)->get();
    return response()->json($persiapan, 200);
}
}
