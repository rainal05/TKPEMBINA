@extends('layouts.backend.backend')

@section('content')

<div class="container">
            <div class="card">
                <div class="card-header text-center">
                    Tambah Pemain - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">

                    <br/>
                    <br/>
                    @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
                @endif

                    @if($cek < 1)
                    <form  role="form" method="POST"  action="{{ url('data/'.\Auth::user()->id) }}" enctype="multipart/form-data">
					    @csrf

                         <input type="hidden" name="calon_id" value="{{ auth()->user()->calon->id}}">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label>ttl</label>
                            <input type="date" name="ttl" class="form-control" placeholder="ttl">
                        </div>

                        <div class="form-group">
                            <label>kelas</label>
                            <select name="kelas" class="multisteps-form__select form-control">
                                <option value="Kelas A">Kelas A</option>
                                <option value="Kelas B">Kelas B</option>
                            </select>
                        </div>


                            <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
                    @else
                    <form  role="form" method="POST"  action="{{ url('data/'.\Auth::user()->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                         <input type="hidden" name="calon_id" value="{{ auth()->user()->calon->id}}">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label>ttl</label>
                            <input type="date" name="ttl" class="form-control" placeholder="ttl">
                        </div>

                        <div class="form-group">
                            <label>kelas</label>
                            <select name="kelas" class="multisteps-form__select form-control">
                                <option value="Kelas A">Kelas A</option>
                                <option value="Kelas B">Kelas B</option>
                            </select>
                        </div>


                            <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
                    @endif

                </div>
            </div>
</div>

@endsection
