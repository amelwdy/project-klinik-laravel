@extends('layouts.layout')

@section('title')
Tambah Data Obat
@endsection
@section('content')
<form action="{{route('obat.store')}}" method="POST">
    @csrf
 <fieldset>
    <div class="form-group row">
        <div class="col-md-5">
            <label for="kdObat">Kode Obat</label>
            <input id="kdObat" type="text" name="kdObat" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="nmObat">Nama Obat</label>
            <input id="nmObat" type="text" name="nmObat" class="form-control" required>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-5">
            <label for="ktg">Kategori</label>
            <input id="ktg" type="text" name="ktg" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="hrg">Harga</label>
            <input id="hrg" type="number" name="hrg" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="stok">Stok</label>
            <input id="stok" type="number" name="stok" class="form-control" required>
        </div>
    </div>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Simpan" >
        <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
    </div>
 </fieldset>
</form>
@endsection
