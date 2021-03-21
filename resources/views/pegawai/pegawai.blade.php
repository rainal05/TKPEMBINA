@extends('layouts.backend.backend')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA PEGAWAI</h1>
        @if (\Session::has('notif'))
            <div class="alert alert-primary" align="center">
                {!! \Session::get('notif') !!}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('tambah-pegawai',[]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-user-plus" aria-hidden="true"></i> Tambah</a>
                <!--<a href="/pegawai/export" target="_blank" class="btn btn-success btn-sm">
                    <i class="fa fa-file-excel" aria-hidden="true"></i> Export</a> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th width="16%">Pilihan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Pilihan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pegawai as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->nip}}</td>
                                <td>{{$p->jabatan}}</td>
                                <td align="right">
                                    <a href="/{{$p->id}}/edit-pegawai" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"> </i> Edit
                                    </a>
                                    <a href="/{{$p->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ?')">
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
