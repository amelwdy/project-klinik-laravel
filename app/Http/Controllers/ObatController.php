<?php

namespace App\Http\Controllers;
use App\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat=\App\Obat::all();
        return view('obat.obat',['obat'=>$obat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_obat= new \App\Obat;
        $save_obat->kdObat=$request->get('kdObat');
        $save_obat->nmObat=$request->get('nmObat');
        $save_obat->ktg=$request->get('ktg');
        $save_obat->hrg=$request->get('hrg');
        $save_obat->stok=$request->get('stok');
        $save_obat->save();
        return redirect()->route('obat.index');
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
        $edit_obat=\App\Obat::findOrFail($id);
        return view('obat.edit',['obat'=>$edit_obat]);
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
        $obat=\App\obat::findOrFail($id);
        $obat->kdObat=$request->get('kdObat');
        $obat->nmObat=$request->get('nmObat');
        $obat->ktg=$request->get('ktg');
        $obat->hrg=$request->get('hrg');
        $obat->stok=$request->get('stok');
        $obat->save();
        return redirect()->route('obat.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = \App\Obat::findOrFail($id);
        $hapus->delete();
        return redirect()->route('obat.index');
    }
}
