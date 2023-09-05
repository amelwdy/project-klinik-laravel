@extends('layouts.layout')

@section('title')
Tambah Data Akun
@endsection
@section('content')
<form action="{{route('akun.store')}}" method="POST">
    @csrf
 <fieldset>
    <div class="form-group row">
        <div class="col-md-5">
            <label for="noAkun">Nomor Akun</label>
            <input id="noAkun" type="text" name="noAkun" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="nmAkun">Nama Akun</label>
            <input id="nmAkun" type="text" name="nmAkun" class="form-control" required>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-5">
            <label for="klas">Klasifikasi</label>
            <input id="klas" type="text" name="klas" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="subKlas">Sub Klasifikasi</label>
            <input id="subKlas" type="text" name="subKlas" class="form-control" required>
        </div>
    </div>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Simpan" >
        <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
    </div>
 </fieldset>
</form>
@endsection
