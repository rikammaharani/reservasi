<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Jadwal;
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
            $countNewBook = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','menunggu')
            ->whereYear('jadwals.tanggal',$dayNow)
            ->count();

            $countBook = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','dilayani')
            ->whereYear('jadwals.tanggal',$dayNow)
            ->count();

            $countDoneBook = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereYear('jadwals.tanggal',$dayNow)
            ->count();

            $yearLast = $yearNow-1;


            return view('admin.dashboard', compact('countNewBook', 'countBook','countDoneBook','yearLast','yearNow'));
        }
    }

    
}
