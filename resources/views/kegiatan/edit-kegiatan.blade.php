@extends('layouts.backend.backend')
@section('content')
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8  ml-auto mr-auto mb-4">
            <div class="card">
                <div class="card-header text-center">
                    <strong>EDIT DATA KEGIATAN BELAJAR</strong>
                </div>

                <div class="card-body">
                    <a href="{{url ('kegiatan',[])}}" class="btn btn-primary">Kembali</a>

                    <form  class="multisteps-form__form"role="form" method="post" action="/{{$kegiatan->id}}/update-kegiatan" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Judul</label>
                            <input class="multisteps-form__input form-control" name="judul" type="text" placeholder="Masukan Kegitan" value="{{$kegiatan->judul}}"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <label>Isi</label>
                            <textarea name="isi" rows="4" class="multisteps-form__textarea form-control" placeholder="Deskripsi Kegiatan">{{$kegiatan->isi}}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-row mt-2 ml-1">
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
