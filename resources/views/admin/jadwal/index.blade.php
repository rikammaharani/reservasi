@extends('layouts.main')

@section('title', 'Jadwal')

@section('content_header')
    <h1>Jadwal</h1>
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
                        <h3 class="card-title">Jadwal</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-2 text-right">
                        {{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
                            <a href="{{ route('importExcel.jadwal') }}" class="btn btn-primary">Import Jadwal</a>
                            <a href="{{ route('create.jadwal') }}" class="btn btn-primary">Tambah Jadwal</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    {{-- <th>Hari</th> --}}
                                    <th>Tanggal</th>
                                    <th>Jam Awal</th>
                                    <th>Jam Akhir</th>
                                    {{-- <th>Nomor</th> --}}
                                    @if(Auth::user()->access == "admin")
                                    <th>Opsi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $data->hari }}</td> --}}
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->jam_awal }}</td>
                                    <td>{{ $data->jam_akhir }}</td>
                                    {{-- <td>{{ $data->nomor }}</td> --}}
                                    @if(Auth::user()->access == "admin")
                                    <td>
                                        <a href="{{ route('destroy.jadwal', $data->id) }}" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Delete</a>
                                    </td>
                                    @endif
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