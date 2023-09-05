<?php

namespace App\Http\Controllers;
use App\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien=\App\Pasien::all();
        return view('pasien.pasien',['pasien'=>$pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_pasien= new \App\Pasien;
        $save_pasien->idPasien=$request->get('idPasien');
        $save_pasien->noDaftar=$request->get('noDaftar');
        $save_pasien->nmPasien=$request->get('nmPasien');
        $save_pasien->tmptLahir=$request->get('tmptLahir');
        $save_pasien->tgl_lahir=$request->get('tgl_lahir');
        $save_pasien->jk=$request->get('jk');
        $save_pasien->almtPasien=$request->get('almtPasien');
        $save_pasien->save();
        return redirect()->route('pasien.index');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = \App\Pasien::findOrFail($id);
        $pasien=\App\Pasien::all();
        return view('pasien.cetak',['pasien'=>$pasien]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_pasien = \App\Pasien::findOrFail($id);
        $obat=\App\Obat::all();
        return view('pasien.diagnosa',['pasien'=>$edit_pasien, 'obat'=>$obat]);

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
        $pasien=\App\pasien::findOrFail($id);
        $pasien->idPasien=$request->get('idPasien');
        $pasien->noDaftar=$request->get('noDaftar');
        $pasien->nmPasien=$request->get('nmPasien');
        $pasien->tmptLahir=$request->get('tmptLahir');
        $pasien->tgl_lahir=$request->get('tgl_lahir');
        $pasien->jk=$request->get('jk');
        $pasien->almtPasien=$request->get('almtPasien');
        $pasien->save();
        return redirect()->route('pasien.index');
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
