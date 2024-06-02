<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hama;

class HamaController extends Controller
{
    public function index()
    {
        $hama = Hama::latest()->paginate(10);
        
        return view('hama.index',compact('hama'))
            ->with('i', (request()->input('page', 1) - 1) * 10);


    }

    public function create()
    {
        $tahapanOptions = [
            'Tahap Pembibitan' => 'Tahap Pembibitan',
            'Tahap Vegetatif' => 'Tahap Vegetatif',
            'Tahap Berbunga' => 'Tahap Berbunga',
            'Tahap Berbuah' => 'Tahap Berbuah',
            'Tahap Panen' => 'Tahap Panen'
        ];

        return view('hama.create', compact('tahapanOptions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahapanPupuk' => 'required',
            'namatanaman' => 'required',
            'judul' => 'required',
            'gejala' => 'required',
            'gambar_tanaman' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar_tanaman')) {
            $destinationPath = 'gambar_tanaman/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_tanaman'] = "$profileImage";
        }
    
        Hama::create($input);
     
        return redirect()->route('hama.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }


    public function show(Hama $hama)
    {
        return view('hama.show',compact('hama'));
    }


    public function edit($id)
    {
        $hama = Hama::find($id);
        $tahapanOptions = [
            'Tahap Pembibitan' => 'Tahap Pembibitan',
            'Tahap Vegetatif' => 'Tahap Vegetatif',
            'Tahap Berbunga' => 'Tahap Berbunga',
            'Tahap Berbuah' => 'Tahap Berbuah',
            'Tahap Panen' => 'Tahap Panen'
        ];
    
        return view('hama.edit', compact('hama', 'tahapanOptions'));
    }


    public function update(Request $request, Hama $hama)
    {
        $request->validate([
            'namatanaman' => 'required',
            'judul' => 'required',
            'gejala' => 'required',
            'keterangan' => 'required',
            'tahapanPupuk' => 'required',
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
          
        $hama->update($input);
    
        return redirect()->route('hama.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  

    public function destroy(Hama $hama)
    {
        $hama->delete();
     
        return redirect()->route('hama.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
