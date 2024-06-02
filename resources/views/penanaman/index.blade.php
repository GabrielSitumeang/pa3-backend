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
                                    <h2 class="mb-0">{{ __('Daftar Penanaman') }}</h2>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="pull-right mb-3">
                                <a class="btn btn-success" href="{{ route('penanaman.create') }}"> Tambah Data </a>
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
                                            @foreach ($penanaman as $penanamans)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $penanamans->namatanaman}}</td>
                                                <td>{{ $penanamans->judul }}</td>
                                                <td>{{ Str::limit($penanamans->isi, 20) }}</td>
                                                <td>{{ Str::limit($penanamans->keterangan, 20) }}</td>
                                                <td><img src="/gambar_tanaman/{{ $penanamans->gambar_tanaman }}" width="100px"></td>
                                                <td>
                                                    <form action="{{ route('penanaman.destroy',$penanamans->id) }}" method="POST">
                                        
                                                        <a class="btn btn-info" href="{{ route('penanaman.show',$penanamans->id) }}">Show</a>
                                        
                                                        <a class="btn btn-primary" href="{{ route('penanaman.edit',$penanamans->id) }}">Edit</a>
                                        
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
                {!! $penanaman->links() !!}
            </div>
        </div>
    </section>
</main>
        
@endsection