@extends('layouts.layout')

@section('title')
Laporan Transaksi Jurnal
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="cardheader"></div>
                <div class="card-body">
                    <form action="/laporan/cetak" method="PUT" target="_blank">
                        @csrf
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="klasifikasi">Periode Jurnal</label>
                                    <input id="jenis" type="hidden" name="jenis" value="detail_trans" class="form-control">
                                    <select id="periode" name="periode" class="form-control">
                                        <option value="">--Pilih Periode Laporan--</option>
                                        <option value="All">Semua</option>
                                        <option value="periode">Per Periode</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="tglawal">Tanggal Awal</label>
                                    <input id="tglawal" type="date" name="tglawal" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="tglakhir">Tanggal Akhir</label>
                                    <input id="tglakhir" type="date" name="tglakhir" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-primary btn-send" value="Cetak">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
