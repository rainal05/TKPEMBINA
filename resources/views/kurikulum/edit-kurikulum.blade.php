@extends('layouts.backend.backend')
@section('content')
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8  ml-auto mr-auto mb-4">
            <div class="card">
                <div class="card-header text-center">
                    <strong>EDIT DATA KURIKULUM</strong>
                </div>

                <div class="card-body">
                    <a href="{{url ('kurikulum',[])}}" class="btn btn-primary">Kembali</a>

                    <form  class="multisteps-form__form"role="form" method="post" action="/{{$kurikulum->id}}/update-kurikulum" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                            <label>Kode</label>
                            <input class="multisteps-form__input form-control" name="kode" type="text" placeholder="kode kurikulum" value="{{$kurikulum->kode}}"/>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <label>Isi</label>
                            <textarea name="isi" rows="8" class="multisteps-form__textarea form-control" placeholder="isi kurikulum">{{$kurikulum->isi}}</textarea>
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
