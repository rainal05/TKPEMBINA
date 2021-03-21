@extends('layouts.backend.backend')
@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8  ml-auto mr-auto mb-4">
            <div class="card">
                <div class="card-header text-center">
                    <strong>ISI DATA SISWA</strong>
                </div>

                <div class="card-body ">
                    <a href="{{url ('siswa',[])}}" class="btn btn-primary">Kembali</a>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br/>
                            @endforeach
                        </div>
                    @endif

                    <form  class="multisteps-form__form"role="form" method="post" action="{{ url ('tambah-siswa/store')}}" enctype="multipart/form-data">
                        @csrf
                        <h4 style="margin-top: 8px">Data Siswa</h4>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nik</label>
                            <input class="multisteps-form__input form-control" name="nik" type="number" placeholder="Nomor Induk KTP"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nama</label>
                            <input class="multisteps-form__input form-control" name="nama" type="text" placeholder="Masukan Nama"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-4">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="multisteps-form__select form-control">
                                    <option ></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Tempat Lahir</label>
                            <input class="multisteps-form__input form-control" name="tempat" type="text" placeholder="Tempat Lahir"/>
                            </div>
                            <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                <label>Tanggal Lahir</label>
                            <input class="multisteps-form__input form-control" name="ttl" type="date"/>
                            </div>
                        </div>
                        <hr>
                        <h4 style="margin-top: 8px">Data Orang Tua</h4>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nama Ayah</label>
                            <input class="multisteps-form__input form-control" name="ayah" type="text" placeholder="Nama Ayah"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nama Ibu</label>
                            <input class="multisteps-form__input form-control" name="ibu" type="text" placeholder="Nama Ibu"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <label>Pekerjaan Ayah</label>
                            <select name="pekerjaan" class="multisteps-form__select form-control">
                                    <option ></option>
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                        <option value="Nelayan">Nelayan</option>
                                        <option value="Peternak">Peternak</option>
                                        <option value="Petani">Petani</option>
                                        <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Honorer">Honorer</option>
                                        <option value="Pensiunan">Pensiunan</option>
                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                        <option value="Lainnya.">Lainnya.</option>
                            </select>
                        </div>
                        <hr>
                        <h4 style="margin-top: 8px">Alamat</h4>
                        <div class="form-row mt-4">
                            <div class="col-12">
                                <input name="alamat" class="multisteps-form__input form-control" type="text" placeholder="Contoh : Jl.Satu dua tiga">
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12">
                                <label>Kecamatan</label>
                                <input name="kecamatan" class="multisteps-form__input form-control" type="text" placeholder="masukan Kecamatan">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-row mt-3 ml-1">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
