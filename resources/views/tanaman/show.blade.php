@extends('layouts.topbar')
   
@section('content')
<main>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="content-header">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h2 class="mb-0">{{ __('Tampilkan Tanaman') }}</h2>
                                </div><!-- /.col -->
                                {{-- <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ route('tanaman.index') }}">Tanaman</a></li>
                                        <li class="breadcrumb-item active">Detail Tanaman</li>
                                    </ol>
                                </div> --}}
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('tanaman.index')}}" class="breadcrumb-item"><i class="fas fa-feather"></i></a>
                                        <a href="{{route('tanaman.index')}}" class="breadcrumb-item">Tanaman</a>
                                        <span class="breadcrumb-item active">Detail</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('tanaman.index') }}"> Back</a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama :</strong>
                                    {{ $tanaman->nama_tanaman }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gambar :</strong><br>
                                    <img src="/gambar_tanaman/{{ $tanaman->gambar_tanaman }}" width="500px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
