@extends('layouts.master')

@section('content')
            @if(session('berhasil'))
                <div class="alert alert-success" role="alert">
                    {{session('berhasil')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <h1>Data Pengumpul</h1>
                </div>
                <div class="col-md-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data Pengumpul
                    </button>
                </div>



                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>PEMASUKAN</th>
                        <th>PENGELUARAN</th>
                        <th>SALDO</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_pengumpul as $pengumpul)
                    <tr>
                        <td>{{$pengumpul->id}}</td>
                        <td>{{$pengumpul->nama}}</td>
                        <td>{{$pengumpul->pemasukan}}</td>
                        <td>{{$pengumpul->pengeluaran}}</td>
                        <td>{{$pengumpul->saldo}}</td>
                        <td>
                            <a href="/pengumpul/{{$pengumpul->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pengumpul/{{$pengumpul->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
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
                            <form action="/pengumpul/create" method="POST">
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
                                <label for="exampleInputEmail1">Pemasukan</label>
                                <input name="pemasukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pemasukkan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pengeluaran</label>
                                <input name="pengeluaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pengeluaran">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Saldo</label>
                                <input name="saldo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Saldo">
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


