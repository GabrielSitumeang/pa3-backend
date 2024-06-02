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
                                    <h2 class="mb-0">{{ __('Daftar PascaPanen') }}</h2>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="pull-right mb-3">
                                <a class="btn btn-success" href="{{ route('pascapanen.create') }}"> Tambah Data </a>
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
                                                <th>Isi</th>
                                                <th>Keterangan</th>
                                                <th>Image</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                            @foreach ($pascapanen as $pascapanens)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $pascapanens->namatanaman}}</td>
                                                <td>{{ $pascapanens->judul }}</td>
                                                <td>{{ Str::limit($pascapanens->isi, 20) }}</td>
                                                <td>{{ Str::limit($pascapanens->keterangan, 20) }}</td>
                                                <td><img src="/gambar_tanaman/{{ $pascapanens->gambar_tanaman }}" width="100px"></td>
                                                <td>
                                                    <form action="{{ route('pascapanen.destroy',$pascapanens->id) }}" method="POST">
                                        
                                                        <a class="btn btn-info" href="{{ route('pascapanen.show',$pascapanens->id) }}">Show</a>
                                        
                                                        <a class="btn btn-primary" href="{{ route('pascapanen.edit',$pascapanens->id) }}">Edit</a>
                                        
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
                {!! $pascapanen->links() !!}
            </div>
        </div>
    </section>
</main>

    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Pasca Panen</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pascapanen.create') }}"> Tambah Data </a>
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
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pascapanen as $pascapanens)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pascapanens->namatanaman}}</td>
            <td>{{ $pascapanens->judul }}</td>
            <td>{{ Str::limit($pascapanens->isi, 20) }}</td>
            <td>{{ Str::limit($pascapanens->keterangan, 20) }}</td>
            <td><img src="/gambar_tanaman/{{ $pascapanens->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('pascapanen.destroy',$pascapanens->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('pascapanen.show',$pascapanens->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('pascapanen.edit',$pascapanens->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $pascapanen->links() !!} --}}
        
@endsection