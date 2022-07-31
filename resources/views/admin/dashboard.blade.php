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
    <div class="row">
    <div class="col-lg-4 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $countNewBook }}</h3>

                <p>New Reservation</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="{{ route('index.reservasi') }}" class="small-box-footer">
                Validate Now <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $countBook }}</h3>

                <p>Booked</p>
            </div>
            <div class="icon">
                <i class="fas fa-door-closed"></i>
            </div>
            <a  class="small-box-footer">
                Check <i class="fas fa-info-circle"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $countDoneBook }}</h3>

                <p>Reservation Done</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a  class="small-box-footer">
                Check <i class="fas fa-info-circle"></i>
            </a>
        </div>
    </div>
    
</div>

<!-- Chart's container -->
<div class="card">
        <div class="card-body">
        <h5 class="card-title">Reservasi {{ $yearNow }} vs {{ $yearLast }}</h5>
            <div id="chart" style="height: 300px;"></div>
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

@endpush
