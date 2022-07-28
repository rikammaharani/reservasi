@extends('layouts.main')

@section('title', 'Reservasi')

@section('content_header')
    <h1>Reservasi</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Reservasi</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" required>
                                <div class="valid-feedback">
                                  Masukan Tanggal Untuk Download & Cetak Data
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" required>
                                
                              </div>
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <a href=# onclick="this.href='{{ url('/report_pdf/') }}'+'/'+document.getElementById('tglawal').value+'/' 
                                      + document.getElementById('tglakhir').value" target="_blank" class="btn btn-success col-md-12">Download & Cetak Data
                            </a>
                          </div>
                        </form>
                    </div>
    
                    <div class="card-footer clearfix">
                    </div>
                </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop