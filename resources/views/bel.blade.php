@extends('layouts.frontend.navbar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-default" align='center'> <h3> DATA KEGIATAN PEMBELAJARAN</h3> </div>
                <div class="card-body">
                    <a href="{{ url('tambah-kegiatan-belajar',[]) }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th width="5%">No</th>
                                        <th width="25%">JUDUL</th>
                                        <th width="50%">ISI</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelajaran as $pel)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$pel->judul}}</td>
                                        <td>{{$pel->isi}}</td>
                                        <td align="right">
                                                <a href="" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"> </i> Edit
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ?')">
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
    </div>
</div>

@endsection
