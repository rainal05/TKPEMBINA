@extends('layouts.backend.backend')
@section('content')
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8  ml-auto mr-auto mb-4">
            <div class="card">
                <div class="card-header text-center">
                    <strong>ISI DATA KEGIATAN BELAJAR</strong>
                </div>

                <div class="card-body">
                    <a href="{{url ('kegiatan',[])}}" class="btn btn-primary">Kembali</a>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br/>
                            @endforeach
                        </div>
                    @endif

                    <form  class="multisteps-form__form"role="form" method="post" action="{{ url ('tambah-kegiatan/store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Judul</label>
                            <input class="multisteps-form__input form-control" name="judul" type="text" placeholder="Masukan Kegitan"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <label>Isi</label>
                            <textarea name="isi" rows="4" class="multisteps-form__textarea form-control" placeholder="Deskripsi Kegiatan"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-row mt-2 ml-1">
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
