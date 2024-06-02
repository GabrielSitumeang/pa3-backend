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
                                    <h2 class="mb-0">{{ __('Daftar Postingan') }}</h2>
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
                                                <th>Nama User</th>
                                                <th>Isi</th>
                                                <th>Tanggal Postingan</th>
                                                <th>Jumlah komentar</th>
                                                <th>Aksi</th>
                                            </tr>
                                            @foreach ($informasi as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $info->name }}</td>
                                                <td>{{ limit_words($info->body, 25) }}</td>
                                                <td>{{ \Carbon\Carbon::parse($info->created_at)->translatedFormat('d F Y H:i:s') }}</td>
                                                <td>{{ $info->jumlah_komentar}}</td>
                                                <td>
                                                    <a href="{{ route('komunitas.show', $info->id) }}" class="btn btn-primary">Show</a>
                                                    <a href="{{ route('komunitas.delete', $info->id) }}" class="btn btn-danger">Delete</a>
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
@php
function limit_words($string, $limit = 25)
    {
        $words = explode(' ', $string);
        if (count($words) <= $limit) {
            return $string;
        }

        return implode(' ', array_slice($words, 0, $limit)) . '...';
    }    
@endphp
<script>
    $(document).ready(function() {
        $('#dataTableLokasipelayanan').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>


@endsection

