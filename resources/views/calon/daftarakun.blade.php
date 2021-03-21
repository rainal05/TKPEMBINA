@extends('layouts.frontend.navbar')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><strong>Daftar Akun Orang Tua</strong></h3></div>
                    <div class="card-body">
                        <form action="{{ url('daftar-akun/store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan nama" id="name" data-rule="minlen:3" data-msg="Harap Masukan Nama Minimal 4 Karakter" >
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukan email" id="email" data-rule="email" data-msg="Harap Masukan E-mail Yang Benar">
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan password" id="password" data-rule="minlen:4" data-msg="Harap Isi Password Dengan Minimal 5 Karakter">
                            </div>
                            <!-- <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" id="password" data-rule="minlen:4" data-msg="Harap Isi Password Dengan Minimal 5 Karakter">
                            </div> -->
                            <input type="hidden" name="status" value="DIVERIFIKASI">
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="{{ asset('daftar') }}/assets/img/alur.jpg">Panduan Daftar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

