@extends('layouts.main')
@if(Auth::user()->access == "user")
@section('title','Member Area')
@else
@section('title','Dashboard')
@endif

@section('content')
@if(Auth::user()->access == "user")
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat Datang di Sistem Reservasi Klinik Ahsana Rumah Sehat dan Herbal Malang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('photos/photo/kesehatan.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <img src="{{ asset('photos/photo/hari-kesehatan.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <img src="{{ asset('photos/photo/alat-kesehatan.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endif

@if((Auth::user()->access == "admin") || (Auth::user()->access == "head") )
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat Datang di Sistem Reservasi Klinik Ahsana Rumah Sehat dan Herbal Malang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('photos/photo/kesehatan.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <img src="{{ asset('photos/photo/hari-kesehatan.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <img src="{{ asset('photos/photo/alat-kesehatan.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endif
@endsection

@push('after-script')
<!-- Charting library -->
<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<!-- Your application script -->
<script>
    const chart = new Chartisan({
        el: '#chart',
        url: '@chart("reservation_chart")',
        hooks: new ChartisanHooks()
        .legend({ position: 'bottom' })
    });

</script>

<script>
    const chartIncome = new Chartisan({
        el: '#chartIncome',
        url: '@chart("income_chart")',
        hooks: new ChartisanHooks()
        .colors(['#ECC94B', '#4299E1'])
        .legend({ position: 'bottom' })
    });

</script>
@endpush
