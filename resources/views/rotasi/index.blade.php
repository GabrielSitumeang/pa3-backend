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
                                    <h2 class="mb-0">{{ __('Daftar Rotasi Tanaman') }}</h2>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="pull-right mb-3">
                                <a class="btn btn-success" href="{{ route('rotasi.create') }}"> Tambah Data </a>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <table id="dataTableLokasipelayanan" class="table table-bordered table-striped"  width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanaman</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Keterangan</th>
                                                <th>Jenis Informasi</th>
                                                <th>Image</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                            @foreach ($rotasi as $rotasis)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $rotasis->namatanaman}}</td>
                                                <td>{{ $rotasis->judul }}</td>
                                                <td>{{ Str::limit($rotasis->isi, 20) }}</td>
                                                <td>{{ Str::limit($rotasis->keterangan, 20) }}</td>
                                                <td>{{ $rotasis->jenisInformasi }}</td>
                                                <td><img src="/gambar_tanaman/{{ $rotasis->gambar_tanaman }}" width="100px"></td>
                                                <td>
                                                    <form action="{{ route('rotasi.destroy',$rotasis->id) }}" method="POST">
                                        
                                                        <a class="btn btn-info" href="{{ route('rotasi.show',$rotasis->id) }}">Show</a>
                                        
                                                        <a class="btn btn-primary" href="{{ route('rotasi.edit',$rotasis->id) }}">Edit</a>
                                        
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
                {!! $rotasi->links() !!}
            </div>
        </div>
    </section>
</main>
{{-- 

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Rotasi Tanaman</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rotasi.create') }}"> Tambah Data </a>
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
            <th>Jenis Informasi</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($rotasi as $rotasis)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $rotasis->namatanaman}}</td>
            <td>{{ $rotasis->judul }}</td>
            <td>{{ Str::limit($rotasis->isi, 20) }}</td>
            <td>{{ Str::limit($rotasis->keterangan, 20) }}</td>
            <td>{{ $rotasis->jenisInformasi }}</td>
            <td><img src="/gambar_tanaman/{{ $rotasis->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('rotasi.destroy',$rotasis->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('rotasi.show',$rotasis->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('rotasi.edit',$rotasis->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $rotasi->links() !!} --}}
        
@endsection