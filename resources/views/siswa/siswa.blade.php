@extends('layouts.backend.backend')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">DATA SISWA</h1>
        @if (\Session::has('notif'))
            <div class="alert alert-primary" align="center">
                {!! \Session::get('notif') !!}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('tambah-siswa',[]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-user-plus" aria-hidden="true"></i> Tambah</a>
                <!--<a href="/siswa/export" target="_blank" class="btn btn-success btn-sm">
                    <i class="fa fa-file-excel" aria-hidden="true"></i> Export</a>
                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#import">
                    Import
                </button>-->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Pilihan</th>
                                <th>No</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Tempat & Tgl Lahir</th>
                                <th>NIK</th>
                                <th>AYAH</th>
                                <th>IBU</th>
                                <th>PEKERJAAN</th>
                                <th>ALAMAT</th>
                                <th>KECAMATAN</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Pilihan</th>
                                <th >No</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Tempat & Tgl Lahir</th>
                                <th>NIK</th>
                                <th>AYAH</th>
                                <th>IBU</th>
                                <th>PEKERJAAN</th>
                                <th>ALAMAT</th>
                                <th>KECAMATAN</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($siswa as $sis)
                                <tr>
                                    <td align="right">
                                        <a href="/{{$sis->id}}/edit-siswa" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"> </i> Edit
                                        </a>
                                        <a onclick="return confirm('Anda yakin ingin menghapus data ?')"
                                    href="/{{$sis->id}}/delete" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                    </a>
                                    </td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$sis->nama}}</td>
                                    <td>{{$sis->jk}}</td>
                                    <td>{{$sis->tempat}} {{$sis->ttl}}</td>
                                    <td>{{$sis->nik}}</td>
                                    <td>{{$sis->ayah}}</td>
                                    <td>{{$sis->ibu}}</td>
                                    <td>{{$sis->pekerjaan}}</td>
                                    <td>{{$sis->alamat}}</td>
                                    <td>{{$sis->kecamatan}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="/siswa/import" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="import">Import Excel</h5>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    <label>Pilih file excel</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </form>

      </div>

    </div>
  </div>
</div>
</main>
@endsection
