@extends('layouts.backend.backend')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8  ml-auto mr-auto mb-4">
            <div class="card">
                <div class="card-header text-center">
                    <strong>EDIT DATA PEGAWAI</strong>
                </div>

                <div class="card-body">
                    <a href="{{url ('pegawai',[])}}" class="btn btn-primary btn-sm">Kembali</a>
                    <form  class="multisteps-form__form"role="form" method="post" action="/{{$pegawai->id}}/update-pegawai" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nama</label>
                            <input class="multisteps-form__input form-control" name="nama" type="text" placeholder="Masukan Nama Pegawai" value="{{$pegawai->nama}}"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-8">
                                <label>NIP</label>
                                <input class="multisteps-form__input form-control" name="nip" type="number" placeholder="Masukan Nomor Induk Pegawai" value="{{$pegawai->nip}}"/>
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Jabatan</label>
                                <select name="jabatan" class="multisteps-form__select form-control">
                                    <option ></option>
                                    <option value="Kepala TK" @if($pegawai->jabatan == 'Kepala TK') selected @endif>Kepala TK</option>
                                    <option value="Guru" @if($pegawai->jabatan == 'Guru') selected @endif>Guru</option>
                                    <option value="Guru Iqro" @if($pegawai->jabatan == 'Guru Iqro') selected @endif>Guru Iqro</option>
                                    <option value="T.U" @if($pegawai->jabatan == 'T.U') selected @endif>T.U</option>
                                </select>
                            </div>
                            <div class="form-row mt-4 ml-1">
                                <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
