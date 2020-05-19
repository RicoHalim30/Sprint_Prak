@extends('layouts.master')

@section('content')
            <h1>Edit Data Pengumpul</h1>
            @if(session('berhasil'))
                <div class="alert alert-success" role="alert">
                    {{session('berhasil')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                <form action="/pengumpul/{{$pengumpul->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id</label>
                        <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Id"  value="{{$pengumpul-> id}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{$pengumpul-> nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pemasukkan</label>
                        <input name="pemasukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pemasukkan" value="{{$pengumpul-> pemasukkan}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pengeluaran</label>
                        <input name="pengeluaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pengeluaran" value="{{$pengumpul-> pengeluaran}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Saldo</label>
                        <input name="saldo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Saldo" value="{{$pengumpul-> saldo}}">
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
            </div>
@endsection


