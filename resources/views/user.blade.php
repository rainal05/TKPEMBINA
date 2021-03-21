@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <a href="#" class="btn btn-sm btn-primary">Export Excel</a>
                    <div class="card-header bg-default" align='center'> <h3> DATA USER</h3> </div>
                        <div class="card-body">
                            <a href="{{ url('tambah-user', [])}}" class="btn btn-primary btn-sm mb-3">Tambah User</a>
                            <form action="data-user/tambah-user" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="data">
                                    <thead>
                                        <tr>
                                            <th width="4%">No</th>
                                            <th width="20%">Nama</th>
                                            <th width="20%">Email</th>
                                            <th width="15%">Status</th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $u)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <td>{{$u->role}}</td>
                                            <td align="right">
                                                <a href="#" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"> </i> Edit
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ?')">
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
    </div>
@endsection
