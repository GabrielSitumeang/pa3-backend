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
                                    <h2 class="mb-0">{{ __('Postingan') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('komunitas.index')}}" class="breadcrumb-item"><i class="fas fa-people-arrows"></i></a>
                                        <a href="{{route('komunitas.index')}}" class="breadcrumb-item">Postingan</a>
                                        <span class="breadcrumb-item active">Detail</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <p>Diposting oleh: {{ $posts->name }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <p>Pada Tanggal: {{ \Carbon\Carbon::parse($posts->created_at)->translatedFormat('d F Y H:i:s')  }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <fieldset style="border: 1px solid #000;padding: 10px;border-radius: 5px;" >
                                    <div class="mb-4" align="center">
                                        <img src="{{ asset('storage/posts/' . $posts->image) }}" width="600px">
                                    </div>
                                   <div class="form-group">
                                    <div class="">
                                        <p>{{ $posts->body }}</p>
                                    </div>
                                    
                                </div> 
                                </fieldset>
                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {{-- <strong>Gambar :</strong><br> --}}
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <div class="col-auto d-flex align-items-center mr-2">
                                        <a href="#" class="" style="margin-left: 5px;margin-right: 5px;"><i class="far fa-thumbs-up"></i></a>
                                        <a href="#" class="" style="margin-left: 5px;margin-right: 5px;">{{ $posts->like_count }}</a>
                                    </div>|
                                    <div class="col ml-2">
                                        <a href="#" class="breadcrumb-item" style="margin-left: 5px;margin-right: 5px;"><i class="far fa-comment-dots"></i></a>
                                        <a href="#" class="" style="margin-left: 5px;margin-right: 5px;">{{ $posts->comment_count }}</a>
                                    </div>
                                </div>
                            </div>
                            <h4>Komentar</h4>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                @foreach($comments as $comment)
                                <fieldset style="border: 1px solid #d4d4d4;padding: 10px;border-radius: 5px;" class="mb-3">
                                    <div class="form-group row">
                                        <div class="col">
                                            <p>{{ $comment->name }}</p>
                                        </div>
                                        <div class="col text-right">
                                            <p>{{ \Carbon\Carbon::parse($comment->created_at)->translatedFormat('d F Y H:i:s') }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </fieldset>
                                
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
