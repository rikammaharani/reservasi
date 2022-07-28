<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RekamMedis::all();
        return view('admin.rekammedis.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::where('jk', 'laki-laki')->orWhere('jk','perempuan')->get();
       return view('admin.rekammedis.create', compact('pasien'));
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
            'tgl' => 'required',
            'diagnosa' => 'required',
            'tindakan' => 'required',
        ]);

        $data = new RekamMedis();
        $data->tgl = $request->tgl;
        $data->diagnosa = $request->diagnosa;
        $data->tindakan = $request->tindakan;
        $data->save();

        return redirect(route('index.rekammedis'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RekamMedis::find($id);
        return view('admin.rekammedis.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data = RekamMedis::find($id);
        return view('admin.rekammedis.edit', compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl' => 'required',
            'diagnosa' => 'required',
            'tindakan' => 'required',
        ]);

        $data = RekamMedis::find($id);
        $data->tgl = $request->tgl;
        $data->diagnosa = $request->diagnosa;
        $data->tindakan = $request->tindakan;
        $data->save();

        return redirect(route('index.rekammedis'))->with('success', 'Data berhasil diubah');
    }
    
    public function destroy($id)
    {
        $data = RekamMedis::find($id);
        $data->delete();
        
        return redirect(route('index.rekammedis'))->with('success', 'Data berhasil dihapus');
    }
}
