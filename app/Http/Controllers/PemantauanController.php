<?php

namespace App\Http\Controllers;

use App\Models\Pemantauan;
use Illuminate\Http\Request;

class PemantauanController extends Controller
{
    public function index()
    {
        $pemantauan = Pemantauan::latest()->paginate(5);
    
        return view('pemantauan.index',compact('pemantauan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('pemantauan.create');
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
    
        Pemantauan::create($input);
     
        return redirect()->route('pemantauan.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }



    public function show(Pemantauan $pemantauan)
    {
        return view('pemantauan.show',compact('pemantauan'));
    }



    public function edit(Pemantauan $pemantauan)
    {
        return view('pemantauan.edit',compact('pemantauan'));
    }



    public function update(Request $request, Pemantauan $pemantauan)
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
          
        $pemantauan->update($input);
    
        return redirect()->route('pemantauan.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  


    public function destroy(Pemantauan $pemantauan)
    {
        $pemantauan->delete();
     
        return redirect()->route('pemantauan.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
