<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Payment;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dayNow = Carbon::now('GMT+8')->format('d');
        $monthNow = Carbon::now('GMT+8')->format('m');
        $yearNow = Carbon::now('GMT+8')->format('Y');

        if (Auth::user()->access == "user") {
            

            // dd($current_room);

            return view('admin.dashboard');
        }else{
           

            return view('admin.dashboard');
        }
    }

    
}
