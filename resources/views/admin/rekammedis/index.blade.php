@extends('layouts.main')

@section('title', 'Rekam Medis')

@section('content_header')
    <h1>Rekam Medis</h1>
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
                
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rekam Medis</h3>
                    </div>
                    <div class="card-body">
                        @if(Auth::user()->access == "admin")
                        <div class="mb-2 text-right">
                            <a href="{{ route('create.rekammedis') }}" class="btn btn-primary">Tambah Data Rekam Medis</a>
                        </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Tanggal</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->tgl }}</td>
                                    <td>{{ $data->diagnosa }}</td>
                                    <td>{{ $data->tindakan }}</td>
                                    <td>
                                        <a href="{{ route('edit.rekammedis', $data->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('destroy.rekammedis', $data->id) }}" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
    
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