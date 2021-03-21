@extends('layouts.backend.backend')
@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-default" align='center'> <h3> DATA PENDAFTAR</h3> </div>
                <div class="card-body">

                    @foreach ($data as $item)
                      <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <h3 align="center">DATA REGISTRASI TK PEMBINA</h3>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $item->nama}}</td>
                                </tr>
                                <tr>
                                    <th>Tempat & Tgl Lahir</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Tujuan Kelas</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Status Pendaftaran</th>
                                    <td><span class="badge badge-primary" style="font-size:15px"></span></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
