@extends('layouts.main')

@section('title', 'Reservasi')

@section('content_header')
    <h1>Reservasi</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                @if(Auth::user()->access == "admin")
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Reservasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-2 text-right">
                            <a href="{{ route('create.reservasi') }}" class="btn btn-primary">Tambah Reservasi</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Pasien</th>
                                    <th>NIK</th>
                                    <th>Status</th>
                                    <th>Jadwal</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>
                                        <a href="{{ route('edit.reservasi', $data->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('destroy.reservasi', $data->id) }}" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif

                    @if(Auth::user()->access == "user")
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Reservasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-2 text-right">
                            <a href="{{ route('create.reservasi') }}" class="btn btn-primary">Tambah Reservasi</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Pasien</th>
                                    <th>NIK</th>
                                    <th>Status</th>
                                    <th>Jadwal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>{{ $data->tanggal }} ({{ $data->jam_awal }})</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
    
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop