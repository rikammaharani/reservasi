@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2>Reservasi</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('userstore.reservasi') }}" method="POST">
                        @csrf
                        <div class="card-body">
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
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keluhan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="keluhan" placeholder="Masukan Keluhan..">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Jadwal Tanggal & Waktu</label>
                                <select name="id_jadwal" id="" class="form-control">
                                    @foreach ($jadwal as $j)
                                        <option value="{{ $j->id }}">{{ $j->tanggal }} / {{ $j->jam_awal }}-{{ $j->jam_akhir }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="p-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
