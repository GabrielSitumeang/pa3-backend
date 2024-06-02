@extends('layouts.topbar')
     
@section('content')
    <main>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h2 class="mb-0">{{ __('Daftar Hama dan Penyakit') }}</h2>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="pull-right mb-3">
                                <a class="btn btn-success" href="{{ route('hama.create') }}"> Tambah Data </a>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped"  width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanaman</th>
                                                <th>Judul</th>
                                                <th>Image</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                            @foreach ($hama as $hamas)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $hamas->namatanaman}}</td>
                                                <td>{{ $hamas->judul }}</td>
                                                {{-- <td>{{ Str::limit($hamas->isi, 20) }}</td>
                                                <td>{{ Str::limit($hamas->keterangan, 20) }}</td> --}}
                                                <td><img src="/gambar_tanaman/{{ $hamas->gambar_tanaman }}" width="100px"></td>
                                                <td>
                                                    <form action="{{ route('hama.destroy',$hamas->id) }}" method="POST">
                                        
                                                        <a class="btn btn-info" href="{{ route('hama.show',$hamas->id) }}">Show</a>
                                        
                                                        <a class="btn btn-primary" href="{{ route('hama.edit',$hamas->id) }}">Edit</a>
                                        
                                                        @csrf
                                                        @method('DELETE')
                                            
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>               
                {!! $hama->links() !!}
            </div>
        </div>
    </section>
</main>
{{-- 

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Daftar Hama dan Penyakit</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('hama.create') }}"> Tambah Data </a>
            </div>
            <br>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanaman</th>
            <th>Judul</th>
            <th>Gejala</th>
            <th>Info Lebih Lanjut</th>
            <th>Rekomendasi</th>
            <th>Pengendalian Hayati</th>
            <th>Pengendalian Kimiawi</th>
            <th>Obati Penyebab</th>
            <th>Tindakan Pencegahan</th>
            <th>Cegah Penyebab</th>
            <th>Keterangan</th>
            <th>Tahapan Pupuk</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($hama as $hamas)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $hamas->namatanaman}}</td>
            <td>{{ $hamas->judul }}</td>
            <td>{{ Str::limit($hamas->gejala, 20) }}</td>
            <td>{{ Str::limit($hamas->info_lebih_lanjut, 20) }}</td>
            <td>{{ Str::limit($hamas->rekomendasi, 20) }}</td>
            <td>{{ Str::limit($hamas->pengendalian_hayati, 20) }}</td>
            <td>{{ Str::limit($hamas->pengendalian_kimiawi, 20) }}</td>
            <td>{{ Str::limit($hamas->obati_penyebab, 20) }}</td>
            <td>{{ Str::limit($hamas->tindakan_pencegahan, 20) }}</td>
            <td>{{ Str::limit($hamas->cegah_penyebab, 20) }}</td>
            <td>{{ Str::limit($hamas->keterangan, 20) }}</td>
            <td>{{ $hamas->tahapanPupuk }}</td>
            <td><img src="/gambar_tanaman/{{ $hamas->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('hama.destroy',$hamas->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('hama.show',$hamas->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('hama.edit',$hamas->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $hama->links() !!} --}}
        
@endsection