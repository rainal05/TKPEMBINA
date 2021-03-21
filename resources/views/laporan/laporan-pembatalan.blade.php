@extends('layouts.backend.backend')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA LAPORAN PEMBATALAN</h1>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">

                    <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                        <div id="kolom">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div id="kolomm">
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
@endsection
@section('grafik')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('kolom', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Pendaftaran'
            },
            xAxis: {
                categories: [
                    'PENDAFTARAN'
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
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
                name: 'DITERIMA',
                data: [{!! json_encode($daftrm) !!}]

            }, {
                name: 'BATAL',
                data: [{!! json_encode($dafbtl) !!}]

            }]
        });

    </script>

    <script>
        Highcharts.chart('kolomm', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Pembayaran'
            },
            xAxis: {
                categories: [
                    'PEMBAYARAN'
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
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
                name: 'DITERIMA',
                data: [{!! json_encode($byr) !!}]

            }, {
                name: 'BATAL',
                data: [[{!! json_encode($btl) !!}]]

            }]
        });

    </script>
@endsection
