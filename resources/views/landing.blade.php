@extends('layouts.landing-app')
@section('landing-content')
<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ route('landing.page') }}"><img src="{{ asset('photos/icon/logo.png') }}" alt=""> <strong style="font-weight: bold;">Ahsana Rumah Sehat dan Herbal</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('landing.page') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#acomodation">Reservasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer">Kontak</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">@if((Auth::user()->access == "admin") || (Auth::user()->access == "head")) Dashboard @else Member Area @endif</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->
 
<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Klinik Ahsana Rumah Sehat dan Herbal </h6>
                <h2>Reservasi Sekarang</h2>
                <p>Rumah Sehat & Rumah Herbal AHSANA terletak di Kota Malang, Jawa Timur.</p>
                <h3  >Kami Buka </h3>
                <h5>SENIN-SABTU | 07:30-17:00</h5>
            </div>
        </div>
    </div>
    
</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap" id="acomodation">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Form Booking Reservasi</h2>
            <p>Silahkan isi data diri dengan benar</p>
            <div class=" col-md-10 btn btn-dark text-center">
                <a href="{{ route('index.reservasi') }}" class="btn btn-dark">Tambah Reservasi</a>
            </div>

        </div>
        
    </div> 
    </div>
</section>
<!--================ Accomodation Area  =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">Tentang Kami

                        <!-- <br>Our History<br>Mission & Vision -->

                    </h2>
                    <p>Klinik Ahsana Rumah Sehat dan Herbal merupakan sebuah klinik pelayanan kesehatan alternatif, yang menyediakan pelayanan pijat refleksi. Berdiri sejak tahun ...., kami memberikan pelayanan terbaik untuk kesehatan, kenyamanan, dan kepuasaan pengunjung.Klinik Ahsana berlokasi di  Jl. Kedawung 56, Kota Malang, Jawa Timur. </p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <img class="img-fluid" src="{{ asset('image/grey.jpg') }}" alt="img"> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31611.150015806063!2d112.60588061878633!3d-7.958197833145917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629cff607583b%3A0xe9426b262e57aa61!2sAhsana%20Rumah%20Sehat%20dan%20Herbal!5e0!3m2!1sid!2sid!4v1654677824308!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->

<!--================ start footer Area  =================-->
<footer class="footer-area section_gap" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Kontak</h6>
                    <p>Klinik Ahsana Rumah Sehat dan Herbal merupakan sebuah klinik pelayanan kesehatan alternatif, yang menyediakan pelayanan pijat refleksi. Berdiri sejak tahun ...., kami memberikan pelayanan terbaik untuk kesehatan, kenyamanan, dan kepuasaan pengunjung.Klinik Ahsana berlokasi di  Jl. Kedawung 56, Kota Malang, Jawa Timur. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Navigation Link</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="{{ route('landing.page') }}">Home</a></li>
                                <li><a href="#acomodation">Reservasi</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#about">Tentang Kami</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Rizka_Rika</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->
@endsection