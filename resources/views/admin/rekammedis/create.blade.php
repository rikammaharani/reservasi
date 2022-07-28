@extends('layouts.main')

@section('title', 'Rekam Medis')

@section('content_header')
    <h1>Rekam Medis</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Rekam Medis</h3>
                </div>
                <form action="{{ route('store.rekammedis') }}" method="POST">
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="tgl">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Diagnosa</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Diagnosa" name="diagnosa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tindakan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tindakan" name="tindakan">
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