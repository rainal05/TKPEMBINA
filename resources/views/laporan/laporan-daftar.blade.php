@extends('layouts.backend.backend')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA LAPORAN PENDAFTAR</h1>

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
@endsection
@section('grafik')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
                Highcharts.chart('grafik', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                    name: 'Terima',
                    y: {!! json_encode($terima) !!},
                    sliced: true,
                    selected: true
                },
                {
                    name: 'Batal Masuk',
                    y: {!! json_encode($batal) !!}
                },
                {
                    name: 'Seluruh Pendaftar',
                    y: {!! json_encode($all) !!}
                }]
            }]
        });
    </script>
@endsection
