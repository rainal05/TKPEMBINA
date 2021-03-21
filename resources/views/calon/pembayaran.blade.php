@extends('layouts.backend.backend')

@section('content')

<section>
<br>
    @if ($cek <1)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8  ml-auto mr-auto mb-4">

                    <div class="card">
                            <div class="card-header text-center">
                                <strong>UPLOAD BUKTI PEMBAYARAN</strong>
                            </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('pembayaran/'.\Auth::user()->id) }}" enctype="multipart/form-data">
                                <form action="{{ url('pembayaran/'.\Auth::user()->id) }}" method="put">
                                @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id ??'' }}">
                                    <input type="hidden" name="nama" value="{{ auth()->user()->name ??''}}">
                                    <input type="hidden" name="data_calon_id" value="{{ auth()->user()->datacalon->id ??''}}">

                                    <input type="hidden" name="bayar" value="BAYAR">
                                <div class="form-group">
                                    <label>Nama Pengirim Rekening</label>
                                    <input type="text" name="pemilik" class="form-control" placeholder="Nama Pemilik Rekening">
                                </div>

                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-6">
                                        <label>Metode Pembayaran</label>
                                        <select name="metode" class="form-control">
                                            <option >--Pilih Metode--</option>
                                            <option value="ATM">ATM</option>
                                            <option value="Setor Tunai">Setor Tunai</option>
                                            <option value="E-BANKING">E-BANKING</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label>Upload Bukti Pembayaran</label>
                                        <input type="file" name="bukti" class="form-control" placeholder="file">
                                        <i>File Maksimal 2mb, Ekstensi: jpg, jpeg, png</i>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                                <div class="container">
                                    <a href="{{ asset('daftar') }}/assets/img/clients/kirim.jpg" target="_blank">Rincian Pembayaran</a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @else

    <div class="content-wrapper" style="min-height: 455px;">
        <div class="content"><div class="container">
            <br>
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 mb-3">
                    @if (\Session::has('notif'))
                        <div class="alert alert-primary" align="center">
                            {!! \Session::get('notif') !!}
                        </div>
                    @endif
                    <div class="card h-100">
                        <div class="card-header white bg-TK card-TK-outline">
                            <h5 align="center">Data Registrasi</h5>
                            <h5 align="center">TK PEMBINA NEGERI 2 KOTA JAMBI</h5>
                        </div>
                        <div class="card-body box-profile">
                            @if ($sts <1)
                                <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item"><b>Status Pembayaran</b>
                                    <a class="float-right"><span class="badge badge-primary" style="font-size:18px">{{$item->status ??'Dicek'}}</a>
                                </li>
                                </ul>
                                <div class="clearfix text-center">
                                    <h4><span class="badge badge-warning" style="font-size:18px">Silahkan Tunggu Status DITERIMA Dari Admin Untuk Cetak Kwitansi</h4>
                                </div>
                            @else

                            @foreach ($data as $item)
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item"><b>Status Pembayaran</b>
                                        <a class="float-right"><span class="badge badge-info" style="font-size:18px">{{$item->status ??'Dicek'}}</a>
                                    </li>
                                </ul>

                            @endforeach
                                <div class="clearfix text-center">
                                    <h4>Pembayaran Di Terima</h4>
                                    <h4><span class="badge badge-warning" style="font-size:18px">Silahkan Cetak Kwitansi Untuk Melakukan Pengukuran Baju Anak</h4>
                                    <hr>
                                        <a href="/bukti/exportpdf" class="btn btn-success mt-3 " target="_blank">
                                            Cetak Kwitansi Pembayaran
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endif

</section>

@endsection
