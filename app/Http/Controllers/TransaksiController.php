<?php

namespace App\Http\Controllers;
use App\Transaksi;
use Illuminate\Http\Request;
use App\DetailTransaksi;
use DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi=\App\Transaksi::all();
        return view('transaksi.transaksi',['transaksi'=>$transaksi]);
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
        $save_trans= new \App\Transaksi;
        $save_trans->idTrans=$request->get('idTrans');
        $save_trans->noRm=$request->get('noRm');
        $save_trans->username=$request->get('username');
        $save_trans->tgl_trans=$request->get('tgl_trans');
        $save_trans->statusPem=$request->get('statusPem');
        $save_trans->save();
        
        //Simpan ke bagian debit
        $savedet = new \App\DetailTransaksi;
        $savedet->idTrans=$request->idTrans;
        $savedet->noAkun= '1-001';
        $savedet->jmldb=$request->jmldb;
        $savedet->jmlcr= '0';
        $savedet->save();

        //Simpan ke bagian kredit
        $savedet = new \App\DetailTransaksi;
        $savedet->idTrans=$request->idTrans;
        $savedet->noAkun='4-101';
        $savedet->jmldb= '0';
        $savedet->jmlcr=$request->jmlcr;
        $savedet->save();
        
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = \App\Transaksi::findOrFail($id);
        //Query Mengambil Data Detail
        $detail = DB::select('SELECT akun.noAkun, akun.nmAkun, detail_trans.jmldb, detail_trans.jmlcr 
        FROM detail_trans, akun WHERE akun.noAkun=detail_trans.noAkun');
        return view( 'transaksi.detail' , ['transaksi' => $transaksi, 'detail_trans' => $detail]);
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
