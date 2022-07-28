<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap" id="acomodation">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Form Booking Reservasi</h2>
            <p>Silahkan isi data diri dengan benar</p>
        </div>
        <!-- <div class="row mb_30">
            @forelse($data as $o)
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('photos/featured/'.$o->featured_img) }}" alt="">
                        <a href="{{ url('booknow/'.$o->id.'/'.$o->room_price.'/'.$o->room_name) }}" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">{{ $o->room_name }}</h4>
                    </a>
                    <h5>Rp {{ number_format($o->room_price, 0, ',', '.') }}<small>/night</small></h5>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <a href="#">
                    <h4 class="sec_h4">No rooms available</h4>
                </a>
            </div>
            @endforelse
        </div> -->
        <div class="hotel_booking_area position">
        <div class="container">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>Form<br> Reservasi</h2>
                </div>
                <!-- <div class="col-md-9">
                    <form action="{{ route('searchroom') }}" method="get">
                        @csrf
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Pilih tanggal" name="check_in" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Check Out" name="check_out" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide" name="person">
                                                <option data-display="Person">Person</option>
                                                <option value="1">Single</option>
                                                <option value="2">Couple</option>
                                                <option value="3">Group</option>
                                                <option value="4">Family</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <button type="submit" class="book_now_btn button_hover">Buat Reservasi</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </div> 
    </div>
</section>
<!--================ Accomodation Area  =================-->