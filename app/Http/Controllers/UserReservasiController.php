<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pasien;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class UserReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = auth()->user()->id;
        $data = Reservasi::join('pasiens', 'reservasi.id_pasien', '=', 'pasiens.id')
            ->join('jadwals', 'reservasi.id_jadwal', '=', 'jadwals.id')
            ->select('reservasi.*', 'pasiens.nama', 'jadwals.tanggal', 'jadwals.jam_awal', 'jadwals.jam_akhir')
            ->where('reservasi.id_user', $id_user)
            ->whereNotIn('reservasi.status', ['Selesai'])
            ->get();
        return view('user.reservasi.index', compact('data'));
    }

    public function riwayat()
    {
        $id_user = auth()->user()->id;
        $data = Reservasi::join('pasiens', 'reservasi.id_pasien', '=', 'pasiens.id')
            ->join('jadwals', 'reservasi.id_jadwal', '=', 'jadwals.id')
            ->select('reservasi.*', 'pasiens.nama', 'jadwals.tanggal', 'jadwals.jam_awal', 'jadwals.jam_akhir')
            ->where('reservasi.id_user', $id_user)
            ->where('reservasi.status', '=', 'Selesai')
            ->get();
        return view('user.reservasi.riwayat', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = Jadwal::all();
        return view('user.reservasi.create', compact('jadwal'));
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
            'id_jadwal' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'tlp' => 'required',
        ]);

        $user = auth()->user();

        $pasien = new Pasien();
        $pasien->id_user = $user->id_user;
        $pasien->nama = $request->nama;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->jk = $request->jk;
        $pasien->alamat = $request->alamat;
        $pasien->pekerjaan = $request->pekerjaan;
        $pasien->tlp = $request->tlp;
        $pasien->save();

        $data = new Reservasi();
        $data->id_user = $user->id;
        $data->id_pasien = $pasien->id;
        $data->id_jadwal = $request->id_jadwal;
        $data->keluhan = $request->keluhan;
        $data->status = 'Menunggu';
        $data->save();

        return redirect()->route('reservasi')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
