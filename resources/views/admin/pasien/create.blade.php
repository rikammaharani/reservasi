@extends('layouts.main')

@section('title', 'Pasien')

@section('content_header')
    <h1>Pasien</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Pasien</h3>
                </div>
                <form action="{{ route('store.pasien') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pilih User</label>
                            <select name="id_user" id="" class="form-control">
                                @foreach ($user as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukan Nama..">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <select name="jk" id="" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Pekerjaan" name="pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telepon</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor Telepon" name="tlp">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop