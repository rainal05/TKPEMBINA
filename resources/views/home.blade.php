@extends('layouts.backend.backend')

@section('content')
<br>
@if(auth()->user()->role == 'admin')


<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">

                    <div id="grafik">
                    </div>

                    <div id="gr">

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@section('grafik')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('grafik', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Total'
            },
            xAxis: {
                categories: [
                    ''
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:1f} Orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Pendaftar',
                data: [{!! json_encode($all) !!}]

            }, {
                name: 'Pendaftar Terima',
                data: [{!! json_encode($terima) !!}]

            },
                {
                name: 'Telah Bayar',
                data: [{!! json_encode($byr) !!}]

            },
            {
                name: 'Belum Bayar',
                data: [{!! json_encode($blm) !!}]

            },
            {
                name: 'Batal Masuk',
                data: [{!! json_encode($batal) !!}]

            }]
        });

    </script>
@endsection
@endif

@if(auth()->user()->role == 'siswa')

    <div class="content-wrapper" style="min-height: 455px;">
        <div class="content"><div class="container">
            <br>

            @if ($cek <1)
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" align="center"><h2>Selamat Datang {{ auth()->user()->name}}</h2></div>
                                <div class="card-body">

                                    <h1><span class="badge badge-info" style="font-size:20px">Silahkan Isi Data Anak, Dan Lakukan Pembayaran</h1>
                                        <p align="center"><a href="{{ asset('daftar') }}/assets/img/alur.jpg" target="_blank">klik disini</a> lihat panduan DAFTAR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row justify-content-center mb-4">
                    <div class="col-md-7 mb-3">
                        @if (\Session::has('notif'))
                        <div class="alert alert-primary" align="center">
                            {!! \Session::get('notif') !!}
                        </div>
                    @endif
                        <div class="card h-100">

                            @foreach ($data as $item)
                            <div class="card-header white bg-TK card-TK-outline">
                                <h5 align="center">Data Calon Peserta</h5>
                                <h5 align="center">TK PEMBINA NEGERI 2 KOTA JAMBI</h5>

                            </div>

                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center text-uppercase">{{ $item->nama}}</h3>
                                <h5 class="profile-username text-center"><i>{{ $item->id_registrasi}}</i></h5>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item"><b>Status Pendaftaran</b>
                                        @if ($item['status']=='DIVERIFIKASI')
                                            <a class="float-right"><span class="badge badge-warning" style="font-size:18px">{{$item->status}}</a>
                                        @elseif($item['status']=='DITERIMA')
                                            <a class="float-right"><span class="badge badge-info" style="font-size:18px">{{$item->status}}</a>
                                        @else
                                            <a class="float-right"><span class="badge badge-danger" style="font-size:18px">{{$item->status}}</a>
                                        @endif
                                    </li>
                                    <li class="list-group-item"><b>Tempat, Tanggal lahir</b>
                                        <a class="float-right">{{ $item->tempat}} <?= Date('d-m-Y', strtotime ($item->ttl ??'' ));?></a>
                                    </li>
                                    <li class="list-group-item"><b>Jenis Kelamin</b>
                                        <a class="float-right">{{ $item->jk}}</a>
                                    </li>
                                    <li class="list-group-item"><b>Orang Tua</b>
                                        <a class="float-right">{{ $item->calon_id}}<b></b></a>
                                    </li>
                                    <li class="list-group-item"><b>Tanggal Daftar</b>
                                        <a class="float-right"><?= Date('d-m-Y', strtotime ($item->created_at ??'' ));?></a>
                                    </li>


                                    <div align="center">
                                        <a href="/formulir/exportpdf" target="_blank" class="btn btn-success mt-3">Cetak Formulir Pendaftaran</a>
                                    </div>

                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

        </div>
        </div>
    </div>
@endif
@endsection
