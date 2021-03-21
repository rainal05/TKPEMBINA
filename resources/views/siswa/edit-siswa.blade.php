@extends('layouts.backend.backend')
@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8  ml-auto mr-auto mb-4">
            <div class="card">
                <div class="card-header text-center">
                    <strong>EDIT DATA SISWA</strong>
                </div>

                <div class="card-body ">
                    <a href="{{url ('siswa',[])}}" class="btn btn-primary">Kembali</a>
                    <form  class="multisteps-form__form"role="form" method="post" action="/{{$sis->id}}/update-siswa" enctype="multipart/form-data">
                        @csrf
                        <h4 style="margin-top: 8px">Data Siswa</h4>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nik</label>
                            <input class="multisteps-form__input form-control" name="nik" type="number" placeholder="Nomor Induk KTP" value="{{$sis->nik}}"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nama</label>
                            <input class="multisteps-form__input form-control" name="nama" type="text" placeholder="Masukan Nama" value="{{$sis->nama}}"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-4">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="multisteps-form__select form-control">
                                    <option ></option>
                                    <option value="Laki-Laki" @if($sis->jk == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                    <option value="Perempuan" @if($sis->jk == 'Perempuan') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Tempat Lahir</label>
                            <input class="multisteps-form__input form-control" name="tempat" type="text" placeholder="Tempat Lahir" value="{{$sis->tempat}}"/>
                            </div>
                            <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                <label>Tanggal Lahir</label>
                            <input class="multisteps-form__input form-control" name="ttl" type="date" value="{{$sis->ttl}}"/>
                            </div>
                        </div>
                        <hr>
                        <h4 style="margin-top: 8px">Data Orang Tua</h4>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nama Ayah</label>
                            <input class="multisteps-form__input form-control" name="ayah" type="text" placeholder="Nama Ayah" value="{{$sis->ayah}}"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Nama Ibu</label>
                            <input class="multisteps-form__input form-control" name="ibu" type="text" placeholder="Nama Ibu" value="{{$sis->ibu}}"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <label>Pekerjaan Ayah</label>
                            <select name="pekerjaan" class="multisteps-form__select form-control">
                                    <option ></option>
                                    <option value="Tidak Bekerja" @if($sis->pekerjaan == 'Tidak Bekerja') selected @endif>Tidak Bekerja</option>
                                        <option value="Nelayan" @if($sis->pekerjaan == 'Nelayan') selected @endif>Nelayan</option>
                                        <option value="Peternak" @if($sis->pekerjaan == 'Peternak') selected @endif>Peternak</option>
                                        <option value="Petani" @if($sis->pekerjaan == 'Petani') selected @endif>Petani</option>
                                        <option value="PNS/TNI/Polri" @if($sis->pekerjaan == 'PNS/TNI/POLRI') selected @endif>PNS/TNI/Polri</option>
                                        <option value="Wiraswasta" @if($sis->pekerjaan == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                        <option value="Honorer" @if($sis->pekerjaan == 'Honorer') selected @endif>Honorer</option>
                                        <option value="Pensiunan" @if($sis->pekerjaan == 'Pensiunan') selected @endif>Pensiunan</option>
                                        <option value="Ibu Rumah Tangga" @if($sis->pekerjaan == 'Ibu Rumah Tangga') selected @endif>Ibu Rumah Tangga</option>
                                        <option value="Lainnya." @if($sis->pekerjaan == 'Lainnya...') selected @endif>Lainnya.</option>
                            </select>
                        </div>
                        <hr>
                        <h4 style="margin-top: 8px">Alamat</h4>
                        <div class="form-row mt-4">
                            <div class="col-12">
                                <input name="alamat" class="multisteps-form__input form-control" type="text" placeholder="Contoh : Jl.Satu dua tiga" value="{{$sis->alamat}}">
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12">
                                <label>Kecamatan</label>
                                <input name="kecamatan" class="multisteps-form__input form-control" type="text" placeholder="masukan Kecamatan" value="{{$sis->kecamatan}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-row mt-3 ml-1">
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
