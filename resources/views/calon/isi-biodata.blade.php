@extends('layouts.backend.backend')

@section('content')

<section>

    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>ISI DATA CALON</strong>
                    </div>

                    <div class="card-body">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br/>
                                @endforeach
                            </div>
                        @endif

                        @if ($cek <1)
                        <form  method="post" action="{{ url('data/'.\Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input type="hidden" name="calon_id" value="{{ auth()->user()->calon->nama}}">
                                <input type="hidden" name="status" value="DIVERIFIKASI">
                                <input type="hidden" name="bayar" value="BELUM">
                                <h3 align="center">DATA ANAK</h3>
                                <div class="form-group">
                                <label>NIK Anak</label>
                                <input type="number" class="form-control" name="nik" placeholder="Nomor Induk KTP Anak">
                                </div>
                                <div class="form-group">
                                <label>Nomor Kartu Keluarga</label>
                                <input type="number" class="form-control" name="nokk" placeholder="Nomor Kartu Keluarga">
                                </div>
                                <hr>
                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Nama Panggilan</label>
                                    <input type="text" class="form-control" name="panggilan" placeholder="Nama Panggilan">
                                </div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-4">
                                        <label>Jenis Kelamin</label>
                                        <select name="jk" class="form-control">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label>Tempat Lahir</label>
                                    <input class="multisteps-form__input form-control" type="text" name="tempat" placeholder="Tempat Lahir"/>
                                    </div>
                                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                        <label>Tanggal lahir</label>
                                    <input class="multisteps-form__input form-control" type="date" min="2014-01-01" max="2018-12-31" name="ttl"/>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                    <label>Agama</label>
                                    <select name="agama" class="multisteps-form__select form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>KEwarganegaraan</label>
                                    <select name="warganegara" class="multisteps-form__select form-control">
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Golongan Darah</label>
                                    <select name="goldarah" class="multisteps-form__select form-control">
                                        <option value="O">O</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-3">
                                    <label>Anak Ke</label>
                                    <input type="number" class="form-control" name="anakke" placeholder="Anak Ke-">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Jumlah Saudara</label>
                                    <input type="number" class="form-control" name="saudara" placeholder="Jumlah saudara">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Berat Badan</label>
                                    <input type="number" class="form-control" name="berat" placeholder="Kg">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Tinggi Badan</label>
                                    <input type="number" class="form-control" name="tinggi" placeholder="Cm.">
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                <label>Penyakit yg Pernah Diderita</label>
                                <input type="text" class="form-control" name="penyakit" placeholder="Penyakit yg Pernah Diderita">
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Imunisasi yg Pernah Diterima</label>
                                <input type="text" class="form-control" name="imunisasi" placeholder="Imunisasi yg Pernah Diterima">
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Ciri Khusus</label>
                                <input type="text" class="form-control" name="cirikhusus" placeholder="Ciri Khusus / Boleh Kosong">
                            </div>
                            </div>
                            <hr>
                            <h3 align="center">ALAMAT</h3>
                            <div class="form-group">
                            <div class="form-row mt-4">
                                <textarea class="multisteps-form__textarea form-control" name="jalan" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                <label>Kelurahan</label>
                                <input type="text" class="form-control" name="lurah" placeholder="Kelurahan">
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="camat" placeholder="Kecamatan">
                            </div>
                            <div class="col-12 col-sm-4">
                                    <label>Kota / Kabupaten</label>
                                    <input type="text" class="form-control" name="kotakab" placeholder="Kota/Kabupaten">
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                    <label>Kode Pos</label>
                                    <input type="number" class="form-control" name="kodepos" placeholder="Kode Pos">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Transportasi</label>
                                    <input type="text" class="form-control" name="transportasi" placeholder="Kendaraan yang digunakan">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Jarak Rumah Ke TK</label>
                                    <input type="number" class="form-control" name="jarak" placeholder="Menit">
                                </div>
                            </div>
                            <hr>
                            <h3 align="center">DATA ORANG TUA</h3>
                            <span class="badge badge-secondary" style="font-size:15px">Data Ayah</span>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-8">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" name="ayah" placeholder="Nama Legkap Ayah">
                                </div>
                            <div class="col-12 col-sm-4">
                                <label>Tanggal Lahir Ayah</label>
                                <input type="date" min="1960-01-01" max="2005-12-31" class="form-control" name="ttlayah" placeholder="Anak Ke-">
                            </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                    <label>Pendidikan Ayah</label>
                                    <select name="pendidikanayah" class="form-control">
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="D4/S1">D4/S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Pekerjaan Ayah</label>
                                    <select name="kerjaayah" class="form-control">
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
                                <div class="col-12 col-sm-4">
                                    <label>No HP.Ayah</label>
                                    <input type="number" class="form-control" name="hpayah" placeholder="Nomor HP Ayah">
                                </div>
                            </div>
                            <hr>
                            <span class="badge badge-secondary" style="font-size:15px">Data Ibu</span>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-8">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" name="ibu" placeholder="Nama Legkap ibu">
                                </div>
                            <div class="col-12 col-sm-4">
                                <label>Tanggal Lahir Ibu</label>
                                <input type="date" min="1960-01-01" max="2005-12-31" class="form-control" name="ttlibu" placeholder="Anak Ke-">
                            </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                    <label>Pendidikan Ibu</label>
                                    <select name="pendidikanibu" class="form-control">
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="D4/S1">D4/S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Pekerjaan Ibu</label>
                                    <select name="kerjaibu" class="form-control">
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
                                <div class="col-12 col-sm-4">
                                    <label>No HP.ibu</label>
                                    <input type="number" class="form-control" name="hpibu" placeholder="Nomor HP ibu">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan Data Calon">
                            </div>
                            </div>
                            </div>
                        </form>
                        @else
                        <form  method="post" action="{{ url('data/'.\Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div>
                                <input type="hidden" name="calon_id" value="{{ auth()->user()->calon->nama}}">
                                <input type="hidden" name="status" value="DIVERIFIKASI">
                                <h3 align="center">DATA ANAK</h3>
                                <div class="form-group">
                                <label>NIK Anak</label>
                                <input type="number" class="form-control" name="nik" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="Nomor Induk KTP Anak" value="{{$dt->nik}}">
                                </div>
                                <div class="form-group">
                                <label>Nomor Kartu Keluarga</label>
                                <input type="number" class="form-control" name="nokk" placeholder="Nomor Kartu Keluarga" value="{{$dt->nokk}}">
                                </div>
                                <hr>
                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{$dt->nama}}">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Nama Panggilan</label>
                                    <input type="text" class="form-control" name="panggilan" placeholder="Nama Panggilan" value="{{$dt->panggilan}}">
                                </div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-4">
                                        <label>Jenis Kelamin</label>
                                        <select name="jk" class="form-control">
                                            <option value="Laki-Laki" @if($dt->jk == 'Laki-Laki') selected @endif> Laki-Laki</option>
                                            <option value="Perempuan" @if($dt->jk == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label>Tempat Lahir</label>
                                    <input class="multisteps-form__input form-control" type="text" name="tempat" placeholder="Tempat Lahir" value="{{$dt->tempat}}"/>
                                    </div>
                                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                        <label>Tanggal lahir</label>
                                    <input class="multisteps-form__input form-control" type="date" min="2014-01-01" max="2018-12-31" name="ttl" value="{{$dt->ttl}}"/>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                    <label>Agama</label>
                                    <select name="agama" class="multisteps-form__select form-control">
                                        <option value="Islam" @if($dt->agama == 'Islam') selected @endif>Islam</option>
                                        <option value="Protestan" @if($dt->agama == 'Protestan') selected @endif>Protestan</option>
                                        <option value="Katolik" @if($dt->agama == 'Katolik') selected @endif>Katolik</option>
                                        <option value="Hindu" @if($dt->agama == 'Hindu') selected @endif>Hindu</option>
                                        <option value="Budha" @if($dt->agama == 'Budha') selected @endif>Budha</option>
                                        <option value="Khonghucu" @if($dt->agama == 'Khonghucu') selected @endif>Khonghucu</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>KEwarganegaraan</label>
                                    <select name="warganegara" class="multisteps-form__select form-control">
                                        <option value="WNI" @if($dt->warganegara == 'WNI') selected @endif>WNI</option>
                                        <option value="WNA" @if($dt->warganegara == 'WNA') selected @endif>WNA</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Golongan Darah</label>
                                    <select name="goldarah" class="multisteps-form__select form-control">
                                        <option value="O" @if($dt->goldarah == 'O') selected @endif>O</option>
                                        <option value="A" @if($dt->goldarah == 'A') selected @endif>A</option>
                                        <option value="B" @if($dt->goldarah == 'B') selected @endif>B</option>
                                        <option value="AB" @if($dt->goldarah == 'AB') selected @endif>AB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-3">
                                    <label>Anak Ke</label>
                                    <input type="number" class="form-control" name="anakke" placeholder="Anak Ke-" value="{{$dt->anakke}}">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Jumlah Saudara</label>
                                    <input type="number" class="form-control" name="saudara" placeholder="Jumlah saudara" value="{{$dt->saudara}}">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Berat Badan</label>
                                    <input type="number" class="form-control" name="berat" placeholder="Kg" value="{{$dt->berat}}">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Tinggi Badan</label>
                                    <input type="number" class="form-control" name="tinggi" placeholder="Cm." value="{{$dt->tinggi}}">
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                <label>Penyakit yg Pernah Diderita</label>
                                <input type="text" class="form-control" name="penyakit" placeholder="Penyakit yg Pernah Diderita" value="{{$dt->penyakit}}">
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Imunisasi yg Pernah Diterima</label>
                                <input type="text" class="form-control" name="imunisasi" placeholder="Imunisasi yg Pernah Diterima" value="{{$dt->imunisasi}}">
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Ciri Khusus</label>
                                <input type="text" class="form-control" name="cirikhusus" placeholder="Ciri Khusus / Boleh Kosong" value="{{$dt->cirikhusus}}">
                            </div>
                            </div>
                            <hr>
                            <h3 align="center">ALAMAT</h3>
                            <div class="form-group">
                            <div class="form-row mt-4">
                                <textarea class="multisteps-form__textarea form-control" name="jalan" placeholder="Alamat">{{$dt->jalan}}</textarea>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                <label>Kelurahan</label>
                                <input type="text" class="form-control" name="lurah" placeholder="Kelurahan" value="{{$dt->lurah}}">
                            </div>
                            <div class="col-12 col-sm-4">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="camat" placeholder="Kecamatan" value="{{$dt->camat}}">
                            </div>
                            <div class="col-12 col-sm-4">
                                    <label>Kota / Kabupaten</label>
                                    <input type="text" class="form-control" name="kotakab" placeholder="Kota/Kabupaten" value="{{$dt->kotakab}}">
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                    <label>Kode Pos</label>
                                    <input type="number" class="form-control" name="kodepos" placeholder="Kode Pos" value="{{$dt->kodepos}}">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Transportasi Ke TK</label>
                                    <input type="text" class="form-control" name="transportasi" placeholder="Kendaraan yang digunakan" value="{{$dt->transportasi}}">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Jarak Rumah Ke TK</label>
                                    <input type="number" class="form-control" name="jarak" placeholder="Menit" value="{{$dt->jarak}}">
                                </div>
                            </div>
                            <hr>
                            <h3 align="center">DATA ORANG TUA</h3>
                            <span class="badge badge-secondary" style="font-size:15px">Data Ayah</span>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-8">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" name="ayah" placeholder="Nama Legkap Ayah" value="{{$dt->ayah}}">
                                </div>
                            <div class="col-12 col-sm-4">
                                <label>Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control" name="ttlayah" value="{{$dt->ttlayah}}">
                            </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">

                                    <label>Pendidikan Ayah</label>
                                    <select name="pendidikanayah" class="form-control">
                                            <option value="Tidak Sekolah" @if($dt->pendidikanayah == 'Tidak Sekolah') selected @endif>Tidak Sekolah</option>
                                            <option value="SD" @if($dt->pendidikanayah == 'SD') selected @endif>SD</option>
                                            <option value="SMP" @if($dt->pendidikanayah == 'SMP') selected @endif>SMP</option>
                                            <option value="SMA" @if($dt->pendidikanayah == 'SMA') selected @endif>SMA</option>
                                            <option value="D1" @if($dt->pendidikanayah == 'D1') selected @endif>D1</option>
                                            <option value="D2" @if($dt->pendidikanayah == 'D2') selected @endif>D2</option>
                                            <option value="D3" @if($dt->pendidikanayah == 'D3') selected @endif>D3</option>
                                            <option value="D4/S1" @if($dt->pendidikanayah == 'D4/S1') selected @endif>D4/S1</option>
                                            <option value="S2" @if($dt->pendidikanayah == 'S2') selected @endif>S2</option>
                                            <option value="S3" @if($dt->pendidikanayah == 'S3') selected @endif>S3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Pekerjaan Ayah</label>
                                    <select name="kerjaayah" class="form-control">
                                        <option value="Tidak Bekerja" @if($dt->kerjaayah == 'Tidak Bekerja') selected @endif>Tidak Bekerja</option>
                                        <option value="Nelayan" @if($dt->kerjaayah == 'Nelayan') selected @endif>Nelayan</option>
                                        <option value="Peternak" @if($dt->kerjaayah == 'Peternak') selected @endif>Peternak</option>
                                        <option value="Petani" @if($dt->kerjaayah == 'Petani') selected @endif>Petani</option>
                                        <option value="PNS/TNI/Polri" @if($dt->kerjaayah == 'PNS/TNI/Polri') selected @endif>PNS/TNI/Polri</option>
                                        <option value="Wiraswasta" @if($dt->kerjaayah == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                        <option value="Honorer" @if($dt->kerjaayah == 'Honorer') selected @endif>Honorer</option>
                                        <option value="Pensiunan" @if($dt->kerjaayah == 'Pensiunan') selected @endif>Pensiunan</option>
                                        <option value="Ibu Rumah Tangga" @if($dt->kerjaayah == 'Ibu Rumah Tangga') selected @endif>Ibu Rumah Tangga</option>
                                        <option value="Lainnya." @if($dt->kerjaayah == 'Lainnya.') selected @endif>Lainnya.</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>No HP.Ayah</label>
                                    <input type="number" class="form-control" name="hpayah" placeholder="Nomor HP Ayah" value="{{$dt->hpayah}}">
                                </div>
                            </div>
                            <hr>
                            <span class="badge badge-secondary" style="font-size:15px">Data Ibu</span>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-8">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" name="ibu" placeholder="Nama Legkap ibu" value="{{$dt->ibu}}">
                                </div>
                            <div class="col-12 col-sm-4">
                                <label>Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control" name="ttlibu" value="{{$dt->ttlibu}}">
                            </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-4">
                                    <label>Pendidikan Ibu</label>
                                    <select name="pendidikanibu" class="form-control">
                                            <option value="Tidak Sekolah"  @if($dt->pendidikanibu == 'Tidak Sekolah') selected @endif>Tidak Sekolah</option>
                                            <option value="SD" @if($dt->pendidikanibu == 'SD') selected @endif>SD</option>
                                            <option value="SMP" @if($dt->pendidikanibu == 'SMP') selected @endif>SMP</option>
                                            <option value="SMA" @if($dt->pendidikanibu == 'SMA') selected @endif>SMA</option>
                                            <option value="D1" @if($dt->pendidikanibu == 'D1') selected @endif>D1</option>
                                            <option value="D2" @if($dt->pendidikanibu == 'D2') selected @endif>D2</option>
                                            <option value="D3" @if($dt->pendidikanibu == 'D3') selected @endif>D3</option>
                                            <option value="D4/S1" @if($dt->pendidikanibu == 'D4/S1') selected @endif>D4/S1</option>
                                            <option value="S2" @if($dt->pendidikanibu == 'S2') selected @endif>S2</option>
                                            <option value="S3" @if($dt->pendidikanibu == 'S3') selected @endif>S3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>Pekerjaan Ibu</label>
                                    <select name="kerjaibu" class="form-control">
                                        <option value="Tidak Bekerja" @if($dt->kerjaibu == 'Tidak Bekerja') selected @endif>Tidak Bekerja</option>
                                        <option value="Nelayan" @if($dt->kerjaibu == 'Nelayan') selected @endif>Nelayan</option>
                                        <option value="Peternak" @if($dt->kerjaibu == 'Peternak') selected @endif>Peternak</option>
                                        <option value="Petani" @if($dt->kerjaibu == 'Petani') selected @endif>Petani</option>
                                        <option value="PNS/TNI/Polri" @if($dt->kerjaibu == 'PNS/TNI/Polri') selected @endif>PNS/TNI/Polri</option>
                                        <option value="Wiraswasta" @if($dt->kerjaibu == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                        <option value="Honorer" @if($dt->kerjaibu == 'Honorer') selected @endif>Honorer</option>
                                        <option value="Pensiunan" @if($dt->kerjaibu == 'Pensiunan') selected @endif>Pensiunan</option>
                                        <option value="Ibu Rumah Tangga" @if($dt->kerjaibu == 'Ibu Rumah Tangga') selected @endif>Ibu Rumah Tangga</option>
                                        <option value="Lainnya." @if($dt->kerjaibu == 'Lainnya.') selected @endif>Lainnya.</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label>No HP.ibu</label>
                                    <input type="number" class="form-control" name="hpibu" placeholder="Nomor HP ibu" value="{{$dt->hpibu}}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update Data Calon">
                            </div>
                            </div>
                            </div>
                        </form>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
