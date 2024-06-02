<?php

namespace App\Http\Controllers;

use App\Models\Panen;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function index()
    {
        $panen = Panen::latest()->paginate(5);
    
        return view('panen.index',compact('panen'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('panen.create');
    }



    public function store(Request $request)
    {
        $request->validate([
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
    
        Panen::create($input);
     
        return redirect()->route('panen.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }



    public function show(Panen $panen)
    {
        return view('panen.show',compact('panen'));
    }



    public function edit(Panen $panen)
    {
        return view('panen.edit',compact('panen'));
    }



    public function update(Request $request, Panen $panen)
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
          
        $panen->update($input);
    
        return redirect()->route('panen.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  


    public function destroy(Panen $panen)
    {
        $panen->delete();
     
        return redirect()->route('panen.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
