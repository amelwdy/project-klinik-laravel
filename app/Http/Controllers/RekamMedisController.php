<?php

namespace App\Http\Controllers;
use App\RekamMedis;
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
        $rekam_medis=\App\RekamMedis::all();
        return view('rekam_medis.rm',['rekam_medis'=>$rekam_medis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_rm= new \App\RekamMedis;
        $save_rm->noRm=$request->get('noRm');
        $save_rm->idPasien=$request->get('idPasien');
        $save_rm->kdObat=$request->get('kdObat');
        $save_rm->tensi=$request->get('tensi');
        $save_rm->keluhan=$request->get('keluhan');
        $save_rm->diagnosa=$request->get('diagnosa');
        $save_rm->jmlbyr=$request->get('jmlbyr');
        $save_rm->save();
        return redirect()->route('rekam_medis.index');
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
        $bayar = \App\RekamMedis::findOrFail($id);
        $akun=\App\Akun::all();
        return view('rekam_medis.bayar',['rekam_medis'=>$bayar, 'akun'=>$akun]);
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
