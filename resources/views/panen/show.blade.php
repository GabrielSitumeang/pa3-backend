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
                                    <h2 class="mb-0">{{ __('Tampilkan Data Panen') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('panen.index')}}" class="breadcrumb-item"><i class="far fa-lemon"></i></a>
                                        <a href="{{route('panen.index')}}" class="breadcrumb-item">Panen</a>
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
                            <a class="btn btn-primary" href="{{ route('panen.index') }}"> Back</a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tanaman :</strong>
                                    {{ $panen->namatanaman }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Judul :</strong>
                                    {{ $panen->judul }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Isi :</strong>
                                    {{ $panen->isi }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan :</strong>
                                    {{ $panen->keterangan }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gambar :</strong><br>
                                    <img src="/gambar_tanaman/{{ $panen->gambar_tanaman }}" width="500px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Data Panen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('panen.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanaman :</strong>
                {{ $panen->namatanaman }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul :</strong>
                {{ $panen->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi :</strong>
                {{ $panen->isi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $panen->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong><br>
                <img src="/gambar_tanaman/{{ $panen->gambar_tanaman }}" width="500px">
            </div>
        </div>
    </div> --}}
@endsection
