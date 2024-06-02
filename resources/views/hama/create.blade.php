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
                                    <h2 class="mb-0">{{ __('Tambah Data Hama dan Penyakit') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('hama.index')}}" class="breadcrumb-item"><i class="fas fa-shield-virus"></i></a>
                                        <a href="{{route('hama.index')}}" class="breadcrumb-item">Hama dan Penyakit</a>
                                        <span class="breadcrumb-item active">Tambah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Terdapat beberapa kesalahan pada inputan Anda<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('hama.index') }}" class="md-5" style="color: black; text-decoration: none;"><b>< Kembali</b></a>
                                    <form action="{{ route('hama.store') }}" class="mt-5" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="namatanaman" class="col-sm-2 col-form-label">Nama Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="namatanaman" name="namatanaman">
                                                @foreach ($tanaman as $t)
                                                    <option value="{{ $t->nama_tanaman }}">{{ $t->nama_tanaman }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul :<span></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="{{ old('judul') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gejala" class="col-sm-2 col-form-label">Gejala :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="gejala" name="gejala">{{ old('gejala') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="info_lebih_lanjut" class="col-sm-2 col-form-label">Info Lebih Lanjut :<span></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="info_lebih_lanjut" id="info_lebih_lanjut" placeholder="Info Lebih Lanjut" value="{{ old('judul') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="rekomendasi" class="col-sm-2 col-form-label">Rekomendasi :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="rekomendasi" name="rekomendasi">{{ old('rekomendasi') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pengendalian_hayati" class="col-sm-2 col-form-label">Pengendalian Hayati :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="pengendalian_hayati" name="pengendalian_hayati">{{ old('pengendalian_hayati') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pengendalian_kimiawi" class="col-sm-2 col-form-label">Pengendalian Kimiawi :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="pengendalian_kimiawi" name="pengendalian_kimiawi">{{ old('pengendalian_kimiawi') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="obati_penyebab" class="col-sm-2 col-form-label">Obati Penyebab :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="obati_penyebab" name="obati_penyebab">{{ old('obati_penyebab') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tindakan_pencegahan" class="col-sm-2 col-form-label">Tindakan Pencegahan :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="tindakan_pencegahan" name="tindakan_pencegahan">{{ old('tindakan_pencegahan') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cegah_penyebab" class="col-sm-2 col-form-label">Cegah Penyebab :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="cegah_penyebab" name="cegah_penyebab">{{ old('cegah_penyebab') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan :<span></span></label>
                                            <div class="col-sm-10">
                                                 <textarea class="form-control" id="keterangan" name="keterangan">{{ old('keterangan') }}</textarea>
                                                {{-- <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{ old('nama_tanaman') }}"> --}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahapanPupuk" class="col-sm-2 col-form-label">Tahapan :<span></span></label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="tahapanPupuk" name="tahapanPupuk">
                                                @foreach ($tahapanOptions as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Gambar" class="col-sm-2 col-form-label">Gambar Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                     <input type="file" name="gambar_tanaman" class="form-control" placeholder="Gambar">
                                                </div>
                                            </div>
                                        </div>
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

{{-- 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Form Tambah Data Hama </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('hama.index') }}"> Back</a>
        </div>
    </div>
</div>
<br>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('hama.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Nama Tanaman :</strong>
                <input type="text" name="namatanaman" class="form-control" placeholder="Nama Tanaman">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul :</strong>
                <input type="text" name="judul" class="form-control" placeholder="Judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="gejala">Gejala :</label>
                <textarea class="form-control" id="gejala" name="gejala" placeholder="Gejala"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info Lebih Lanjut :</strong>
                <input type="text" name="info_lebih_lanjut" class="form-control" placeholder="Info Lebih Lanjut">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rekomendasi :</strong>
                <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Hayati :</strong>
                <input type="text" name="pengendalian_hayati" class="form-control" placeholder="Pengendalian Hayati">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Kimiawi :</strong>
                <input type="text" name="pengendalian_kimiawi" class="form-control" placeholder="Pengendalian Kimiawi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Obati Penyebab :</strong>
                <input type="text" name="obati_penyebab" class="form-control" placeholder="Obati Penyebab">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tindakan Pencegahan :</strong>
                <input type="text" name="tindakan_pencegahan" class="form-control" placeholder="Tindakan Pencegahan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cegah Penyebab :</strong>
                <input type="text" name="cegah_penyebab" class="form-control" placeholder="cegah_penyebab">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>keterangan :</strong>
                <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahapan :</strong>
                <select class="form-control" id="tahapanPupuk" name="tahapanPupuk">
                @foreach ($tahapanOptions as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong>
                <input type="file" name="gambar_tanaman[]" class="form-control" placeholder="Gambar" multiple>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form> --}}
@endsection