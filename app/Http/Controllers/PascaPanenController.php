<?php

namespace App\Http\Controllers;

use App\Models\PascaPanen;
use Illuminate\Http\Request;

class PascaPanenController extends Controller
{
    public function index()
    {
        $pascapanen = PascaPanen::latest()->paginate(5);
    
        return view('pascapanen.index',compact('pascapanen'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('pascapanen.create');
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
    
        PascaPanen::create($input);
     
        return redirect()->route('pascapanen.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }



    public function show(PascaPanen $pascapanen)
    {
        return view('pascapanen.show',compact('pascapanen'));
    }



    public function edit(PascaPanen $pascapanen)
    {
        return view('pascapanen.edit',compact('pascapanen'));
    }



    public function update(Request $request, PascaPanen $pascapanen)
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
          
        $pascapanen->update($input);
    
        return redirect()->route('pascapanen.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  


    public function destroy(PascaPanen $pascapanen)
    {
        $pascapanen->delete();
     
        return redirect()->route('pascapanen.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}