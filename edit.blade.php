@extends('layouts.master')

@section('content')
            <h1>Edit Data Pengepul</h1>
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                <form action="/aktif/{{$aktif->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id</label>
                        <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Id"  value="{{$aktif-> id}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{$aktif-> nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="Aktif" @if($aktif->status == 'Aktif') selected @endif>Aktif</option>
                            <option value="Tidak" @if($aktif->status == 'Tidak') selected @endif>Tidak Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
            </div>
@endsection


