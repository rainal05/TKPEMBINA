@extends('layouts.backend.backend')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA KURIKULUM</h1>
        @if (\Session::has('notif'))
            <div class="alert alert-primary" align="center">
                {!! \Session::get('notif') !!}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('tambah-kurikulum',[]) }}" class="btn btn-primary btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="4%">No</th>
                                <th width="12%">Kode</th>
                                <th>Isi</th>
                                <th width="16%">Pilihan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Isi</th>
                                <th>Pilihan</th>
                            </tr>
                        </tfoot>
                        @foreach ($kurikulum as $k)
                            <tbody>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$k->kode}}</td>
                                <td>{{$k->isi}}</td>
                                <td align="right">
                                    <a href="/{{$k->id}}/edit-kurikulum" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                    </a>
                                    <a href="/delete/{{ $k->id }}" onclick="return confirm('Anda Yakin Hapus Data ?')" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                    </a>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
