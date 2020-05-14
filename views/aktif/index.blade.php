@extends('layouts.master')

@section('content')
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <h1>Data Pengepul</h1>
                </div>
                <div class="col-md-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data Pengepul
                    </button>
                </div>



                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_aktif as $aktif)
                    <tr>
                        <td>{{$aktif->id}}</td>
                        <td>{{$aktif->nama}}</td>
                        <td>{{$aktif->status}}</td>
                        <td>
                            <a href="/aktif/{{$aktif->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/aktif/{{$aktif->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/aktif/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id</label>
                                <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak">Tidak Aktif</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>
@endsection


