@extends('layouts.main')

@section('title', 'Rekam Medis')

@section('content_header')
    <h1>Edit Rekam Medis</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Rekam Medis</h3>
                </div>
                <form action="{{ route('update.pasien',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" value="{{ $data->tgl }}" name="tgl">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Diagnosa</label>
                            <input type="text" class="form-control" value="{{ $data->diagnosa }}" id="exampleInputEmail1" placeholder="Masukan Diagnosa" name="tindakan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tindakan</label>
                            <input type="text" class="form-control" value="{{ $data->tindakan }}" id="exampleInputEmail1" placeholder="Masukan Tindakan" name="tindakan">
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