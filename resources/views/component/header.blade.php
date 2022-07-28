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
                    <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="{{ route('media.index') }}">Gallery</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
                    <!-- @if (Route::has('login'))
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
                    @endif -->
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->
