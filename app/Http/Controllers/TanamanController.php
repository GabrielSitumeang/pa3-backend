<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function index()
    {
        $tanaman = Tanaman::latest()->paginate(5);
    
        return view('tanaman.index',compact('tanaman'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('tanaman.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama_tanaman' => 'required',
            'gambar_tanaman' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar_tanaman')) {
            $destinationPath = 'gambar_tanaman/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_tanaman'] = "$profileImage";
        }
    
        Tanaman::create($input);
     
        return redirect()->route('tanaman.index')
                        ->with('sukses','Tanaman berhasil ditambahkan.');
    }



    public function show(Tanaman $tanaman)
    {
        return view('tanaman.show',compact('tanaman'));
    }



    public function edit(Tanaman $tanaman)
    {
        return view('tanaman.edit',compact('tanaman'));
    }



    public function update(Request $request, Tanaman $tanaman)
    {
        $request->validate([
            'nama_tanaman' => 'required'
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
          
        $tanaman->update($input);
    
        return redirect()->route('tanaman.index')
                        ->with('sukses','Tanaman berhasil diupdate');
    }
  


    public function destroy(Tanaman $tanaman)
    {
        $tanaman->delete();
     
        return redirect()->route('tanaman.index')
                        ->with('sukses','Tanaman berhasil dihapus');
    }
}
