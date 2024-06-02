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
                                    <h2 class="mb-0">{{ __('Edit Data Hama dan Penyakit') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('hama.index')}}" class="breadcrumb-item"><i class="fas fa-shield-virus"></i></a>
                                        <a href="{{route('hama.index')}}" class="breadcrumb-item">Hama dan Penyakit</a>
                                        <span class="breadcrumb-item active">Edit</span>
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
                                    <form action="{{ route('hama.update',$hama->id) }}" class="mt-5" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="namatanaman" class="col-sm-2 col-form-label">Nama Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="namatanaman" name="namatanaman">
                                                @foreach ($tanaman as $t)
                                                    <option value="{{ $t->nama_tanaman }}" {{ $t->nama_tanaman == $hama->namatanaman ? 'selected':'' }}>{{ $t->nama_tanaman }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul :<span></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="{{ $hama->judul }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gejala" class="col-sm-2 col-form-label">Gejala :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="gejala" name="gejala">{{ $hama->gejala }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="info_lebih_lanjut" class="col-sm-2 col-form-label">Info Lebih Lanjut :<span></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="info_lebih_lanjut" id="info_lebih_lanjut" placeholder="Info Lebih Lanjut" value="{{ $hama->info_lebih_lanjut }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="rekomendasi" class="col-sm-2 col-form-label">Rekomendasi :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="rekomendasi" name="rekomendasi">{{ $hama->rekomendasi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pengendalian_hayati" class="col-sm-2 col-form-label">Pengendalian Hayati :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="pengendalian_hayati" name="pengendalian_hayati">{{ $hama->pengendalian_hayati }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pengendalian_kimiawi" class="col-sm-2 col-form-label">Pengendalian Kimiawi :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="pengendalian_kimiawi" name="pengendalian_kimiawi">{{ $hama->pengendalian_kimiawi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="obati_penyebab" class="col-sm-2 col-form-label">Obati Penyebab :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="obati_penyebab" name="obati_penyebab">{{ $hama->obati_penyebab }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tindakan_pencegahan" class="col-sm-2 col-form-label">Tindakan Pencegahan :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="tindakan_pencegahan" name="tindakan_pencegahan">{{ $hama->tindakan_pencegahan }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cegah_penyebab" class="col-sm-2 col-form-label">Cegah Penyebab :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="cegah_penyebab" name="cegah_penyebab">{{ $hama->cegah_penyebab }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan :<span></span></label>
                                            <div class="col-sm-10">
                                                 <textarea class="form-control" id="keterangan" name="keterangan">{{ $hama->keterangan }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahapanPupuk" class="col-sm-2 col-form-label">Tahapan :<span></span></label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="tahapanPupuk" name="tahapanPupuk">
                                                @foreach ($tahapanOptions as $key => $value)
                                                    <option value="{{ $key }}" {{ $key == $hama->tahapanPupuk? 'selected':'' }}>{{ $value }}</option>
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
                                                <img src="/gambar_tanaman/{{ $hama->gambar_tanaman }}" width="300px">
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



    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Hama</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hama.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
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
    
    <form action="{{ route('hama.update',$hama->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Tanaman :</strong>
                    <input type="text" name="namatanaman" value="{{ $hama->namatanaman }}" class="form-control" placeholder="Nama Tanaman">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" value="{{ $hama->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gejala :</strong>
                    <textarea class="form-control" id="gejala" name="gejala">{{ $hama->gejala }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Info Lebih Lanjut :</strong>
                    <textarea class="form-control" id="info_lebih_lanjut" name="info_lebih_lanjut">{{ $hama->info_lebih_lanjut }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rekomendasi :</strong>
                    <textarea class="form-control" id="rekomendasi" name="rekomendasi">{{ $hama->rekomendasi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengendalian Hayati :</strong>
                    <textarea class="form-control" id="pengendalian_hayati" name="pengendalian_hayati">{{ $hama->pengendalian_hayati }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengendalian Kimiawi :</strong>
                    <textarea class="form-control" id="pengendalian_kimiawi" name="pengendalian_kimiawi">{{ $hama->pengendalian_kimiawi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Obati Penyebab :</strong>
                    <textarea class="form-control" id="obati_penyebab" name="obati_penyebab">{{ $hama->obati_penyebab }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tindakan Pencegahan :</strong>
                    <textarea class="form-control" id="tindakan_pencegahan" name="tindakan_pencegahan">{{ $hama->tindakan_pencegahan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cegah Penyebab :</strong>
                    <textarea class="form-control" id="cegah_penyebab" name="cegah_penyebab">{{ $hama->cegah_penyebab }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan :</strong>
                    <textarea class="form-control" id="keterangan" name="keterangan">{{ $hama->keterangan }}</textarea>
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
                    <input type="file" name="gambar_tanaman" class="form-control" placeholder="Gambar">
                    <img src="/gambar_tanaman/{{ $hama->gambar_tanaman }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form> --}}
@endsection