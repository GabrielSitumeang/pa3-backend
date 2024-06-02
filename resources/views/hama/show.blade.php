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
                                    <h2 class="mb-0">{{ __('Tampilkan Data Hama dan Penyakit') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('hama.index')}}" class="breadcrumb-item"><i class="fas fa-shield-virus"></i></a>
                                        <a href="{{route('hama.index')}}" class="breadcrumb-item">Hama dan Penyakit</a>
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
                            <a class="btn btn-primary" href="{{ route('hama.index') }}"> Back</a>
                        </div>
                        <table class="table mt-2">
                            <tr>
                                <td width="20%">
                                    <strong>Nama Tanaman</strong>
                                </td>
                                <td width="5%">:</td>
                                <td width="75%">{{ $hama->namatanaman }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tahapan</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->tahapanPupuk }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Judul</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->judul }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Gejala</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->gejala }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Info Lebih Lanjut</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->info_lebih_lanjut }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Rekomendasi</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->rekomendasi }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Pengendalian Hayati</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->pengendalian_hayati }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Pengendalian Kimiawi</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->pengendalian_kimiawi }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Obati Penyebab</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->obati_penyebab }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tindakan Pencegahan</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->tindakan_pencegahan }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Cegah Penyebab</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->cegah_penyebab }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Keterangan</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->keterangan }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tahapan</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $hama->tahapanPupuk }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Gambar</strong>
                                </td>
                                <td>:</td>
                                <td><img src="/gambar_tanaman/{{ $hama->gambar_tanaman }}" width="500px"></td>
                            </tr>
                        </table>
                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gambar :</strong><br>
                                    <img src="/gambar_tanaman/{{ $hama->gambar_tanaman }}" width="500px"> <br>
                                </div>
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Data Hama </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hama.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tanaman :</strong>
                {{ $hama->namatanaman }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahapan :</strong>
                {{ $hama->tahapanPupuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul :</strong>
                {{ $hama->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gejala :</strong>
                {{ $hama->gejala }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info Lebih Lanjut :</strong>
                {{ $hama->info_lebih_lanjut }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rekomendasi :</strong>
                {{ $hama->rekomendasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Hayati :</strong>
                {{ $hama->pengendalian_hayati }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Kimiawi :</strong>
                {{ $hama->pengendalian_kimiawi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Obati Penyebab :</strong>
                {{ $hama->obati_penyebab }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tindakan Pencegahan :</strong>
                {{ $hama->tindakan_pencegahan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cegah Penyebab :</strong>
                {{ $hama->cegah_penyebab}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $hama->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahapan :</strong>
                {{ $hama->tahapanPupuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong><br>
                <img src="/gambar_tanaman/{{ $hama->gambar_tanaman }}" width="500px"> <br>
            </div>
        </div>
    </div>
@endsection
