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
                                    <h2 class="mb-0">{{ __('Daftar Pupuk') }}</h2>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="pull-right mb-3">
                                <a class="btn btn-success" href="{{ route('pupuk.create') }}"> Tambah Data </a>
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
                                                <th>Tahapan</th>
                                                <th>Jenis Pemupukan</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                            @foreach ($pupuk as $pupuks)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $pupuks->namatanaman}}</td>
                                                <td>{{ $pupuks->judul }}</td>
                                                <td>{{ $pupuks->tahapanPupuk }}</td>
                                                <td>{{ $pupuks->jenisPemupukan }}</td>
                                                <td>
                                                    <form action="{{ route('pupuk.destroy',$pupuks->id) }}" method="POST">
                                        
                                                        <a class="btn btn-info" href="{{ route('pupuk.show',$pupuks->id) }}">Show</a>
                                        
                                                        <a class="btn btn-primary" href="{{ route('pupuk.edit',$pupuks->id) }}">Edit</a>
                                        
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
                {!! $pupuk->links() !!}
            </div>
        </div>
    </section>
</main>
{{-- 

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Daftar Pupuk</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pupuk.create') }}"> Tambah Pupuk </a>
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
            <th>Isi</th>
            <th>Keterangan</th>
            <th>Tahapan</th>
            <th>Jenis Pemupukan</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pupuk as $pupuks)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pupuks->namatanaman}}</td>
            <td>{{ $pupuks->judul }}</td>
            <td>{{ Str::limit($pupuks->isi, 20) }}</td>
            <td>{{ $pupuks->keterangan }}</td>
            <td>{{ $pupuks->tahapanPupuk }}</td>
            <td>{{ $pupuks->jenisPemupukan }}</td>
            <td><img src="/gambar_tanaman/{{ $pupuks->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('pupuk.destroy',$pupuks->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('pupuk.show',$pupuks->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('pupuk.edit',$pupuks->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $pupuk->links() !!} --}}
        
@endsection