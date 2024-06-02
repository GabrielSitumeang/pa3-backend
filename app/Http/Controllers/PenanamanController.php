<?php

namespace App\Http\Controllers;

use App\Models\Penanaman;
use Illuminate\Http\Request;

class PenanamanController extends Controller
{
    public function index()
    {
        $penanaman = Penanaman::latest()->paginate(5);
    
        return view('penanaman.index',compact('penanaman'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('penanaman.create');
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
    
        Penanaman::create($input);
     
        return redirect()->route('penanaman.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }



    public function show(Penanaman $penanaman)
    {
        return view('penanaman.show',compact('penanaman'));
    }



    public function edit(Penanaman $penanaman)
    {
        return view('penanaman.edit',compact('penanaman'));
    }



    public function update(Request $request, Penanaman $penanaman)
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
          
        $penanaman->update($input);
    
        return redirect()->route('penanaman.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  


    public function destroy(Penanaman $penanaman)
    {
        $penanaman->delete();
     
        return redirect()->route('penanaman.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
