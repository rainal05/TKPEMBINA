@extends('layouts.backend.backend')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA PELAJARAN</h1>
        @if (\Session::has('notif'))
            <div class="alert alert-primary" align="center">
                {!! \Session::get('notif') !!}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('tambah-kegiatan',[]) }}" class="btn btn-primary btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>JUDUL</th>
                                <th>ISI</th>
                                <th width="16%">Pilihan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>JUDUL</th>
                                <th>ISI</th>
                                <th>Pilihan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pelajaran as $pel)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pel->judul}}</td>
                                <td>{{$pel->isi}}</td>
                                <td align="right">
                                    <a href="/{{$pel->id}}/edit-kegiatan" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"> </i> Edit
                                    </a>
                                    <a href="/hapus/{{ $pel->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
