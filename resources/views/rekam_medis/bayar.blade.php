@extends('layouts.layout')

@section('title')
Input Transaksi
@endsection
@section('content')
<form action="{{route('transaksi.store')}}" method="POST">
    @csrf
 <fieldset>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="idTrans">ID Transaksi</label>
            <input id="idTrans" type="text" name="idTrans" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label for="tgl_trans">Tgl Transaksi</label>
            <input id="tgl_trans" type="date" name="tgl_trans" class="form-control" required>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-3">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" class="form-control" required>
            </select> 
        </div>
        <div class="col-md-3">
            <label for="noRm">No. Rekam Medis</label>
            <input id="noRm" type="text" name="noRm" class="form-control" value="{{$rekam_medis->noRm}}" readonly>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="statusPem">Status Pembayaran</label>
            <select class="form-control" name="statusPem" id="statusPem">
                <option value="">--Pilih Status Pembayaran--</option>
                <option value="Lunas">Lunas</option>
                <option value="Belum">Belum</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="jmlbyr">Total Bayar</label>
            <input id="jmlbyr" type="text" name="jmlbyr" class="form-control" value="{{$rekam_medis->jmlbyr}}" readonly>
        </div>
    </div><br>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="noAkun">Nomor Akun</label>
            <select name="noAkun" id="noAkun" class="form-control">
                <option value="0">--No. Akun--</option>
                @foreach ($akun as $ak)
                    <option value="{{ $ak->noAkun }}">{{ $ak->noAkun }} | {{ $ak->nmAkun }}</option>
                @endforeach
            </select>
            <select name="noAkun" id="noAkun" class="form-control">
                <option value="0">--No. Akun--</option>
                @foreach ($akun as $ak)
                    <option value="{{ $ak->noAkun }}">{{ $ak->noAkun }} | {{ $ak->nmAkun }}</option>
                @endforeach
            </select>
        </div> 
        <div class="col-md-3">
            <label for="jmldb">Debit</label>
            <input id="jmldb" type="text" name="jmldb" class="form-control" required>
        
        </div>
        <div class="col-md-3">
            <label for="jmlcr">Kredit</label>
            <input id="jmlcr" type="text" name="jmlcr" class="form-control" required>
            
        </div>
    </div><br>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Simpan" >
        <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
    </div>
 </fieldset>
</form>
@endsection
