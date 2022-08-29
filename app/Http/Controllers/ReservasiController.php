<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pasien;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = Reservasi::join('pasiens', 'reservasi.id_pasien', '=', 'pasiens.id')
            ->join('jadwals', 'reservasi.id_jadwal', '=', 'jadwals.id')
            ->select('reservasi.*', 'pasiens.nama', 'jadwals.tanggal', 'jadwals.jam_awal', 'jadwals.jam_akhir')
            ->get();
        return view('admin.reservasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::all();
        $jadwal = Jadwal::all();
        return view('admin.reservasi.create', compact('pasien','jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pasien' => 'required',
            'id_jadwal' => 'required',
            'keluhan' => 'required',
            'status' => '',
            'nik' => 'required',
        ]);

        $user = Pasien::where('id',$request->id_pasien)->first();

        $data = new Reservasi();
        $data->id_user = $user->id_user;
        $data->id_pasien = $request->id_pasien;
        $data->id_jadwal = $request->id_jadwal;
        $data->keluhan = $request->keluhan;
        $data->status = $request->status;
        $data->nik = $request->nik;
        $data->save();

        return redirect(route('index.reservasi'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(Reservasi $reservasi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Reservasi::find($id);
        $pasien = Pasien::all();
        $jadwal = Jadwal::all();
        return view('admin.reservasi.edit', compact('data','pasien','jadwal'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_pasien' => 'required',
            'id_jadwal' => 'required',
            'keluhan' => 'required',
            'status' => '',
            'nik' => 'required',
        ]);
        $user = Pasien::where('id',$request->id_pasien)->first();

        $data = Reservasi::find($id);
        $data->id_user = $user->id_user;
        $data->id_pasien = $request->id_pasien;
        $data->id_jadwal = $request->id_jadwal;
        $data->keluhan = $request->keluhan;
        $data->status = $request->status;
        $data->nik = $request->nik;
        $data->save();

        return redirect(route('index.reservasi'))->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Reservasi::find($id);
        $data->delete();
        return redirect(route('index.reservasi'))->with('success', 'Data berhasil dihapus');
    }
}
