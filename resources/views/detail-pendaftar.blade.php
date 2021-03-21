@extends('layouts.backend.backend')
@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header bg-default" align='center'> <h3> DATA REGISTRASI TK PEMBINA</h3> </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <h4><span class="badge badge-info" style="font-size:18px">Data Anak</h4>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{$detail->nama ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>NIK ANAK</th>
                                    <td>{{$detail->nik ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Panggilan</th>
                                    <td>{{$detail->panggilan ??'' }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{$detail->jk ??'' }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat & Tgl Lahir</th>
                                    <td>{{$detail->tempat ??'' }} <?= Date('d-m-Y', strtotime ($detail->ttl ??'' ));?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>
                                        {{$detail->jalan ??'' }}, {{$detail->lurah ??'' }}, {{$detail->camat ??'' }},
                                        {{$detail->kotakab ??'' }}, {{$detail->kodepos ??'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jarak Rumah KE TK</th>
                                    <td>{{$detail->jarak ??'Belum isi Data' }} Menit</td>
                                </tr>
                                <tr>
                                    <th>Kendaraan</th>
                                    <td>{{$detail->transportasi ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>{{$detail->agama ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Kewarganegaraan</th>
                                    <td>{{$detail->warganegara ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Anak Ke</th>
                                    <td>{{$detail->anakke ??'Belum isi Data' }} dari {{$detail->saudara ??''}}saudara</td>
                                </tr>
                                <tr>
                                    <th>Berat & Tinggi</th>
                                    <td>{{$detail->berat ??'Belum isi Data' }} Kg, {{$detail->tinggi ??''}} Cm</td>
                                </tr>
                                <tr>
                                    <th>Golongan darah</th>
                                    <td>{{$detail->goldarah ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Penyakit yg Pernah Diderita</th>
                                    <td>{{$detail->penyakit ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Imunisasi yg Pernah Diterima</th>
                                    <td>{{$detail->imunisasi ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Ciri Khusus</th>
                                    <td>{{$detail->cirikhusus ??'-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <h4><span class="badge badge-info" style="font-size:18px">Data Orang Tua</h4>
                                <tr>
                                    <th>Nama Ayah</th>
                                    <td>{{$detail->ayah ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Lahir Ayah</th>
                                    <td><?= Date('d-m-Y', strtotime ($detail->ttlayah ??'' ));?></td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Ayah</th>
                                    <td>{{$detail->pendidikanayah ??'' }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ayah</th>
                                    <td>{{$detail->kerjaayah ??'' }}</td>
                                </tr>
                                <tr>
                                    <th>No.HP Ayah</th>
                                    <td>{{$detail->hpayah ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <td>{{$detail->ibu ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Lahir Ibu</th>
                                    <td><?= Date('d-M-Y', strtotime ($detail->ttlibu ??'' ));?></td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Ibu</th>
                                    <td>{{$detail->pendidikanibu ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ibu</th>
                                    <td>{{$detail->kerjaibu ??'Belum isi Data' }}</td>
                                </tr>
                                <tr>
                                    <th>No.HP Ibu</th>
                                    <td>{{$detail->hpibu ??'Belum isi Data' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

@endsection
