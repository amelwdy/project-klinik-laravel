<?php

namespace App\Http\Controllers;
use App\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun=\App\Akun::all();
        return view('akun.akun',['akun'=>$akun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akun.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_akun= new \App\Akun;
        $save_akun->noAkun=$request->get('noAkun');
        $save_akun->nmAkun=$request->get('nmAkun');
        $save_akun->klas=$request->get('klas');
        $save_akun->subKlas=$request->get('subKlas');
        $save_akun->save();
        return redirect()->route('akun.index');
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
        $edit_akun=\App\Akun::findOrFail($id);
        return view('akun.edit',['akun'=>$edit_akun]);
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
        $akun=\App\akun::findOrFail($id);
        $akun->noAkun=$request->get('noAkun');
        $akun->nmAkun=$request->get('nmAkun');
        $akun->klas=$request->get('klas');
        $akun->subKlas=$request->get('subKlas');
        $akun->save();
        return redirect()->route('akun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = \App\Akun::findOrFail($id);
        $hapus->delete();
        return redirect()->route('akun.index');
    }
}
