<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pupuk;

class PupuksController extends Controller
{
    public function index(Request $request)
{
    $namaTanaman = $request->input('nama_tanaman');
    $pupuk = Pupuk::where('namatanaman', $namaTanaman)->get();
    return response()->json($pupuk, 200);
}
}
