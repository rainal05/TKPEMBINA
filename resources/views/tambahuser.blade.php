@extends('layouts.admin')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-default" align='center'> <h3> TAMBAH USER</h3> </div>
                        <div class="card-body">

                            <div class="form-group">
                            <a href="{{ url('data-user', []) }}" class="btn btn-sm btn-primary">Kembali</a>
                            </div>
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br/>
                                @endforeach
                            </div>
                            @endif
                        <form action="{{ url('data-user/tambah-user') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukan nama">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukan email">
                                </div>

                                <div class="form-group">
                            <label>status</label> <br>
                            <label class="radio-inline"><input type="radio" name="role" value="admin">Admin</label>
                            <label class="radio-inline"><input type="radio" name="role" value="tu">Tu</label>
                            </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan password">
                                </div>

                                <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
