@extends('layouts.backend.backend')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA PEMBAYARAN</h1>
        @if (\Session::has('notif'))
            <div class="alert alert-primary" align="center">
                {!! \Session::get('notif') !!}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Pemilik Rekening</th>
                                <th>Metode Bayar</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Pemilik Rekening</th>
                                <th>Metode Bayar</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                <th>Pilihan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($bayar as $b)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$b->nama}}</td>
                                <td>{{$b->pemilik}}</td>
                                <td>{{$b->metode}}</td>
                                <td><a href="{{ url('/biodata_files/'.$b->bukti ??'ss' ) }}" target="_blank">Lihat</a></td>
                                <td>{{$b->sts->status ??'Dicek'}}</td>
                                <td align="right">
                                    <form method="post" action="terima-bayar/{id}/ubahbayar">
                                        {{ csrf_field() }}
                                        <div>
                                        <input type="hidden" name="bukti_id" value="{{$b->id}}">
                                        <input type="hidden" name="user_id" value="{{$b->user_id}}">
                                        <input type="hidden" name="status" value="Terima">
                                        <div class="form-group">
                                            <input onclick="return confirm('Terima Pembayaran')" type="submit" class="btn btn-success btn-sm"
                                            value="Terima Pembayaran">
                                        </div>
                                        <div class="form-group">
                                            <a onclick="return confirm('Anda yakin ingin menghapus data ?')"
                                    href="/{{$b->id}}/hapus" class="btn btn-danger btn-block btn-sm">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                    </a>
                                        </div>
                                        </div>
                                    </form>
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
