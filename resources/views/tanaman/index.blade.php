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
                                    <h2 class="mb-0">{{ __('Daftar Tanaman') }}</h2>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="pull-right mb-3">
                                <a class="btn btn-success" href="{{ route('tanaman.create') }}"> Tambah Tanaman </a>
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
                                                <th>Nama</th>
                                                <th>Image</th>
                                                <th width="20%">Aksi</th>
                                            </tr>
                                            @foreach ($tanaman as $tanamans)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $tanamans->nama_tanaman}}</td>
                                                <td><img src="/gambar_tanaman/{{ $tanamans->gambar_tanaman }}" width="100px"></td>
                                                <td>
                                                    <form action="{{ route('tanaman.destroy',$tanamans->id) }}" method="POST">
                                        
                                                        <a class="btn btn-info" href="{{ route('tanaman.show',$tanamans->id) }}">Show</a>
                                        
                                                        <a class="btn btn-primary" href="{{ route('tanaman.edit',$tanamans->id) }}">Edit</a>
                                        
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
                {!! $tanaman->links() !!}
            </div>
        </div>
    </section>
</main>
<script>
  $(function () {
    $('#dataTanaman').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
        
@endsection