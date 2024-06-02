<?php

namespace App\Http\Controllers;

use App\Models\PersiapanLahan;
use Illuminate\Http\Request;

class PersiapanLahanController extends Controller
{
    public function index()
    {
        $persiapan = PersiapanLahan::latest()->paginate(5);
    
        return view('persiapan.index',compact('persiapan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('persiapan.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama_tanaman' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'gambar_tanaman' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar_tanaman')) {
            $destinationPath = 'gambar_tanaman/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_tanaman'] = "$profileImage";
        }
    
        PersiapanLahan::create($input);
     
        return redirect()->route('persiapan.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }



    public function show(PersiapanLahan $persiapan)
    {
        return view('persiapan.show',compact('persiapan'));
    }



    public function edit(PersiapanLahan $persiapan)
    {
        return view('persiapan.edit',compact('persiapan'));
    }



    public function update(Request $request, PersiapanLahan $persiapan)
    {
        $request->validate([
            'isi' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar_tanaman')) {
            $destinationPath = 'gambar_tanaman/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_tanaman'] = "$profileImage";
        }else{
            unset($input['gambar_tanaman']);
        }
          
        $persiapan->update($input);
    
        return redirect()->route('persiapan.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  


    public function destroy(PersiapanLahan $persiapan)
    {
        $persiapan->delete();
     
        return redirect()->route('persiapan.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
