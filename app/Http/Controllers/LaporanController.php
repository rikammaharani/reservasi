<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function cetak($tglawal,$tglakhir)
    {
        if (request()->date != '') {
        
            $date = explode(' - ',request()->date);
            $tglawal = Carbon::parse($date[0])->format('m-d-Y').'00:00:01';
            $tglakhir = Carbon::parse($date[0])->format('m-d-Y').'23:59:59';
            }
    
            $cetak = Reservasi::join('pasiens', 'reservasi.id_pasien', '=', 'pasiens.id')
            ->join('jadwals', 'reservasi.id_jadwal', '=', 'jadwals.id')
            ->select('reservasi.*', 'pasiens.nama', 'jadwals.tanggal', 'jadwals.jam_awal', 'jadwals.jam_akhir')
            ->whereBetween('reservasi.created_at',[$tglawal,$tglakhir])->get();
    
            
    
            $pdf = PDF::loadview('admin.laporan.report_pdf',['cetak'=>$cetak])->setPaper('a4','portrait');
            
            return $pdf->download('Laporan-Berkas-pdf.pdf');
    }
}
