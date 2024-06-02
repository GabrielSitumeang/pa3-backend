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
                                    <h2 class="mb-0">{{ __('Tambah Tanaman') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('tanaman.index')}}" class="breadcrumb-item"><i class="fas fa-feather"></i></a>
                                        <a href="{{route('tanaman.index')}}" class="breadcrumb-item">Tanaman</a>
                                        <span class="breadcrumb-item active">Tambah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Terdapat beberapa kesalahan pada inputan Anda.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('tanaman.index') }}" class="md-5" style="color: black; text-decoration: none;"><b>< Kembali</b></a>
                                    <form action="{{ route('tanaman.store') }}" class="mt-5" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="Nama" class="col-sm-2 col-form-label">Nama Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_tanaman" id="nama_tanaman" placeholder="" value="{{ old('nama_tanaman') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Gambar" class="col-sm-2 col-form-label">Gambar Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="gambar_tanaman" id="inputFile" value="{{ old('gambar_tanaman') }}">
                                                    <label class="custom-file-label" for="gambar_tanaman">Pilih tanaman</label>
                                                </div>
                                            </div>
                                        </div>

                                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Gambar :</strong>
                                                    <input type="file" name="gambar_tanaman" class="form-control" placeholder="Gambar">
                                                </div>
                                            </div> --}}
                                            <div class="cpl mt-5 col-xs-12 col-sm-12 col-md-12 text-right">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        
    </section>
</main>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    
@endsection