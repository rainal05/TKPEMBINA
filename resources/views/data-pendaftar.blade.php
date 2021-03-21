@extends('layouts.backend.backend')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA PENDAFTAR</h1>
        @if (\Session::has('notif'))
            <div class="alert alert-primary" align="center">
                {!! \Session::get('notif') !!}
            </div>
        @endif
        <div class="card mb-4">

            <div class="card-body">
                <div align="center">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>ID Registrasi</th>
                                <th>Nama Orang Tua</th>
                                <th>Nama anak</th>
                                <th>Status</th>
                                <th width="31%">Pilihan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>ID Registrasi</th>
                                <th>Nama Orang Tua</th>
                                <th>Nama anak</th>
                                <th>Status</th>
                                <th>Pilihan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($calon as $c)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$c->id_registrasi}}</td>
                                <td>{{$c->calon_id}}</td>
                                <td>{{$c->nama}}</td>
                                <td>{{$c->status}}</td>
                                <td align="right">
                                    <a href="/{{$c->id}}/detail-pendaftar/" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"> </i>Lihat
                                    </a>
                                    <a onclick="return confirm('Terima Pendaftar')" class="btn btn-sm btn-success"
                                    href="{{ url ('detail-pendaftar/ubah-status/'.$c->id, []) }}"><i class="fa fa-check"></i>Terima
                                    </a>
                                    <a onclick="return confirm('Tolak/Batalkan Pendaftar ?')" class="btn btn-sm btn-danger"
                                    href="{{ url ('detail-pendaftar/ubah-batal/'.$c->id, []) }}"><i class="fa fa-ban"></i> Batal
                                    </a>
                                    <a onclick="return confirm('Anda yakin ingin menghapus data ?')"
                                    href="/{{$c->id}}/delete" class="btn btn-danger btn-sm">
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
