@extends('layouts.dasbor')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 align="center">Selamat Datang <br> {{ Auth::user()->name }}</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="40%">Nama</th>
                                        <th width="40%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ Auth::user()->name }}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
