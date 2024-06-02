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
                                    <h2 class="mb-0">{{ __('Daftar Ajukan Informasi') }}</h2>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="container-fluid">
                            {{-- <div class="pull-right mb-3">
                                <a class="btn btn-success" href="{{ route('rotasi.create') }}"> Tambah Data </a>
                            </div> --}}
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
                                                <th>Nama Tanaman</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                            @foreach ($informasi as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $info->namatanaman }}</td>
                                                <td>{{ $info->judul }}</td>
                                                <td>{{ $info->isi }}</td>
                                                <td>{{ $info->status }}</td>
                                                <td>
                                                    <a href="{{ route('ajukan.show', $info->id) }}" class="btn btn-primary">Show</a>
                                                    <a href="{{ route('ajukan.approve', $info->id) }}" class="btn btn-success">Approve</a>
                                                    {{-- <form action="{{ route('ajukan.approve', $info->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Approve</button>
                                                    </form> --}}
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
            </div>
        </div>
    </section>
</main>

{{-- <div class="container">
    <h1>Daftar Ajukan Informasi</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Tanaman</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informasi as $info)
                <tr>
                    <td>{{ $info->id }}</td>
                    <td>{{ $info->namatanaman }}</td>
                    <td>{{ $info->judul }}</td>
                    <td>{{ $info->isi }}</td>
                    <td>{{ $info->status }}</td>
                    <td>
                        <a href="{{ route('ajukan-informasi.show', $info->id) }}" class="btn btn-primary">Show</a>
                        <form action="{{ route('ajukan-informasi.approve', $info->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
@endsection

