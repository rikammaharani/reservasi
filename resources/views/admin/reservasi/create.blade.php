@extends('layouts.main')

@section('title', 'Reservasi')

@section('content_header')
    <h1>Reservasi</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">

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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Reservasi</h3>
                </div>
                <form action="{{ route('store.reservasi') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Pasien</label>
                            <select name="id_pasien" id="" class="form-control">
                                @foreach ($pasien as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2 text-right">
                            <a href="{{ route('create.pasien') }}" class="btn btn-primary">Tambah Pasien</a>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Jadwal</label>
                            <select name="id_jadwal" id="" class="form-control">
                                @foreach ($jadwal as $j)
                                    {{-- <option value="{{ $j->id }}">{{ $j->tanggal }}/{{ $j->jam_awal }}-{{ $j->jam_akhir }}</option> --}}
                                    <?php
                                    $check = DB::table('reservasi')
                                        ->where('id_jadwal', $j->id)
                                        ->count();
                                    ?>
                                    @if($check > 0)
                                    <option value="{{ $j->id }}" disabled style="background-color: #ddd;">{{ $j->tanggal }}/{{ $j->jam_awal }}-{{ $j->jam_akhir }}</option>
                                    @else
                                    <option value="{{ $j->id }}">{{ $j->tanggal }}/{{ $j->jam_awal }}-{{ $j->jam_akhir }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keluhan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="keluhan" placeholder="Masukan Keluhan..">
                        </div>
                        @if(Auth::user()->access == "admin")
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="Menunggu">Menunggu</option>
                                <option value="Dilayani">Dilayani</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>
                        @endif
                        @if(Auth::user()->access == "user")
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="Menunggu">Menunggu</option>
                            </select>
                        </div>
                        @endif
                       
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