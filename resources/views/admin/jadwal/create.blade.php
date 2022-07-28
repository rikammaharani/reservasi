@extends('layouts.main')

@section('title', 'Jadwal')

@section('content_header')
    <h1>Jadwal</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Jadwal</h3>
                </div>
                <form action="{{ route('store.jadwal') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jam Awal</label>
                            <input type="time" class="form-control" id="exampleInputEmail1"  name="jam_awal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jam Akhir</label>
                            <input type="time" class="form-control" id="exampleInputEmail1"  name="jam_akhir">
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