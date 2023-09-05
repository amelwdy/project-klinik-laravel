@extends('layouts.layout')

@section('title')
Edit Data Akun
@endsection
@section('content')
<form action="{{route('akun.update', [$akun->noAkun])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
 <fieldset>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="noAkun">Nomor Akun</label>
            <input id="noAkun" type="text" name="noAkun" class="form-control" value="{{$akun->noAkun}}" readonly>
        </div>
        <div class="col-md-4">
            <label for="nmAkun">Nama Akun</label>
            <input id="nmAkun" type="text" name="nmAkun" class="form-control" value="{{$akun->nmAkun}}" required>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-4">
            <label for="klas">Klasifikasi</label>
            <input id="klas" type="text" name="klas" class="form-control" value="{{$akun->klas}}"required>
        </div>
        <div class="col-md-4">
            <label for="subKlas">Sub Klasifikasi</label>
            <input id="subKlas" type="text" name="subKlas" class="form-control" value="{{$akun->subKlas}}"required>
        </div>
    </div>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Update" >
        <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
    </div>
 </fieldset>
</form>
@endsection
