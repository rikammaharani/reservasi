<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pasien::all();
        return view('admin.pasien.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('access','user')->orWhere('access','user')->get();
       return view('admin.pasien.create', compact('user'));
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
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'tlp' => 'required',
        ]);


        $data = new Pasien();
        $data->id_user = Auth::user()->id;
        $data->nama = $request->nama;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->pekerjaan = $request->pekerjaan;
        $data->tlp = $request->tlp;
        $data->save();

        return redirect(route('create.reservasi'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pasien::find($id);
        return view('admin.pasien.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pasien::find($id);
        return view('admin.pasien.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'tlp' => 'required',
        ]);

        $data = new Reservasi();
        $data->id_user = $user->id_user;
        $data->nama = $request->nama;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->pekerjaan = $request->pekerjaan;
        $data->tlp = $request->tlp;
        $data->save();

        return redirect(route('index.pasien'))->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pasien::find($id);
        $data->delete();
        
        return redirect(route('index.pasien'))->with('success', 'Data berhasil dihapus');
    }
}
