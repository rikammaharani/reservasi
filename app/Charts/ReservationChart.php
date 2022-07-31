<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use Carbon\Carbon;

class ReservationChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $yearNow = Carbon::now('GMT+8')->format('Y');
        $yearLast = $yearNow-1;

        $jan = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',1)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $feb = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',2)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $mar = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',3)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $apr = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',4)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $may = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',5)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $jun = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',6)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $jul = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',7)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $aug = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',8)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $sep = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',9)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $oct = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',10)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $nov = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',11)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        $dec = Reservasi::join('jadwals','reservasi.id_jadwal','=','jadwals.id')
            ->where('status','selesai')
            ->whereMonth('jadwals.tanggal',12)
            ->whereYear('jadwals.tanggal',$yearNow)
            ->count();

        // ----------------------------LY-----------------

        $Lyjan = Reservasi::join('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',1)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lyfeb = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',2)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lymar = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',3)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lyapr = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',4)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lymay = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',5)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lyjun = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',6)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lyjul = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',7)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lyaug = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->whereMonth('jadwals.tanggal',8)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lysep = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',9)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lyoct = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',10)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lynov = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',11)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        $Lydec = Reservasi::where('jadwal', 'reservasi.id_jadwal', '=', 'jadwals.id')
        ->where('status','selesai')
        ->whereMonth('jadwals.tanggal',12)
        ->whereYear('jadwals.tanggal',$yearLast)
        ->count();

        return Chartisan::build()
            ->labels(['Jan', 'Feb', 'Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])
            ->dataset(''.$yearNow.'', [$jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec])
            ->dataset(''.$yearLast.'', [$Lyjan, $Lyfeb, $Lymar, $Lyapr, $Lymay, $Lyjun, $Lyjul, $Lyaug, $Lysep, $Lyoct, $Lynov, $Lydec]);
    }
}