<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pupuk;

class PupukController extends Controller
{
    public function index()
    {
        $pupuk = Pupuk::latest()->paginate(10);
        
        return view('pupuk.index',compact('pupuk'))
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
        
        $jenispemupukanOptions = [
            'Pemupukan Organik' => 'Pemupukan Organik',
            'Pemupukan Kimiawi' => 'Pemupukan Kimiawi',
        ];

        return view('pupuk.create', compact('tahapanOptions', 'jenispemupukanOptions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahapanPupuk' => 'required',
            'namatanaman' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'keterangan' => 'required',
            'gambar_tanaman' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar_tanaman')) {
            $destinationPath = 'gambar_tanaman/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_tanaman'] = "$profileImage";
        }
    
        Pupuk::create($input);
     
        return redirect()->route('pupuk.index')
                        ->with('sukses','Data berhasil ditambahkan.');
    }


    public function show(Pupuk $pupuk)
    {
        return view('pupuk.show',compact('pupuk'));
    }


    public function edit($id)
    {
        $pupuk = Pupuk::find($id);
        $tahapanOptions = [
            'Tahap Pembibitan' => 'Tahap Pembibitan',
            'Tahap Vegetatif' => 'Tahap Vegetatif',
            'Tahap Berbunga' => 'Tahap Berbunga',
            'Tahap Berbuah' => 'Tahap Berbuah',
            'Tahap Panen' => 'Tahap Panen'
        ];
        
        $jenispemupukanOptions = [
            'Pemupukan Organik' => 'Pemupukan Organik',
            'Pemupukan Kimiawi' => 'Pemupukan Kimiawi',
        ];
        return view('pupuk.edit', compact('pupuk', 'tahapanOptions', 'jenispemupukanOptions'));
    }


    public function update(Request $request, Pupuk $pupuk)
    {
        $request->validate([
            'namatanaman' => 'required',
            'judul' => 'required',
            'isi' => 'required',
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
          
        $pupuk->update($input);
    
        return redirect()->route('pupuk.index')
                        ->with('sukses','Data berhasil diupdate');
    }
  

    public function destroy(Pupuk $pupuk)
    {
        $pupuk->delete();
     
        return redirect()->route('pupuk.index')
                        ->with('sukses','Data berhasil dihapus');
    }
}
