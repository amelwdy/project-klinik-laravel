<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\LaporanPendapatan;
use App\Transaksi;
use App\DetailTransaksi;
use DB;
use PDF;

class LaporanPendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan.laporan');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(Request $request)
    {
        $periode=$request->get('periode');
        if($periode == 'All')
        {
        $detail = DB::select('SELECT akun.noAkun, akun.nmAkun, detail_trans.idTrans, detail_trans.jmldb, detail_trans.jmlcr 
        FROM detail_trans, akun WHERE akun.noAkun=detail_trans.noAkun');
        $akun=\App\Akun::All();
        $transaksi= DB::select('SELECT transaksi.tgl_trans FROM transaksi');
        $pdf = PDF::loadview('laporan.cetak',['detail_trans'=>$detail,'akun' => $akun, 'transaksi' => $transaksi])->setPaper('A4','landscape');
        return $pdf->stream();
        }elseif($periode == 'periode'){
        $tglawal=$request->get('tglawal');
        $tglakhir=$request->get('tglakhir');
        $detail = DB::select('SELECT akun.noAkun, akun.nmAkun, detail_trans.idTrans, detail_trans.jmldb, detail_trans.jmlcr 
        FROM detail_trans, akun WHERE akun.noAkun=detail_trans.noAkun');
        $akun=\App\Akun::All();
        $transaksi= DB::select('SELECT transaksi.tgl_trans FROM transaksi');
        $transaksi=DB::table('transaksi')
        ->whereBetween('tgl_trans', [$tglawal, $tglakhir])
        ->orderby('tgl_trans','ASC')
        ->get();
        $pdf = PDF::loadview('laporan.cetak',['detail_trans'=>$detail,'akun' => $akun, 'transaksi' => $transaksi])->setPaper('A4','landscape');
        return $pdf->stream();
        }
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
