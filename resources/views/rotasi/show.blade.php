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
                                    <h2 class="mb-0">{{ __('Tampilkan Data Rotasi Tanaman') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('rotasi.index')}}" class="breadcrumb-item"><i class="fas fa-sync"></i></a>
                                        <a href="{{route('rotasi.index')}}" class="breadcrumb-item">Rotasi Tanaman</a>
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
                            <a class="btn btn-primary" href="{{ route('rotasi.index') }}"> Back</a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tanaman :</strong>
                                    {{ $rotasi->namatanaman }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jenis Informasi :</strong>
                                    {{ $rotasi->jenisInformasi }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Judul :</strong>
                                    {{ $rotasi->judul }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Isi :</strong>
                                    {{ $rotasi->isi }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan :</strong>
                                    {{ $rotasi->keterangan }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gambar :</strong><br>
                                    <img src="/gambar_tanaman/{{ $rotasi->gambar_tanaman }}" width="500px">
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
