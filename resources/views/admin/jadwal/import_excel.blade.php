@extends('layouts.main')

@section('title', 'Jadwal')

@section('content_header')
    <h1>Import</h1>
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
				
<form action="{{ route('import_excel.jadwal') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import data</button>
        </form>
		</div>
		</div>
		</div>
@stop