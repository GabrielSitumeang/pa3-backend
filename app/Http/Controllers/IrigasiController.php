<?php

namespace App\Http\Controllers;

use App\Models\Irigasi;
use Illuminate\Http\Request;

class IrigasiController extends Controller
{
    public function index()
    {
        $irigasi = Irigasi::latest()->paginate(5);
    
        return view('irigasi.index',compact('irigasi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('irigasi.create');
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
    
        Irigasi::create($input);
     
        return redirect()->route('irigasi.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }



    public function show(Irigasi $irigasi)
    {
        return view('irigasi.show',compact('irigasi'));
    }



    public function edit(Irigasi $irigasi)
    {
        return view('irigasi.edit',compact('irigasi'));
    }



    public function update(Request $request, Irigasi $irigasi)
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
          
        $irigasi->update($input);
    
        return redirect()->route('irigasi.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  


    public function destroy(Irigasi $irigasi)
    {
        $irigasi->delete();
     
        return redirect()->route('irigasi.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
