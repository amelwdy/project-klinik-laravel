@extends('layouts.layout')

@section('title')
Edit Data Obat
@endsection
@section('content')
<form action="{{route('obat.update', [$obat->kdObat])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
 <fieldset>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="kdObat">Kode Obat</label>
            <input id="kdObat" type="text" name="kdObat" class="form-control" value="{{$obat->kdObat}}" readonly>
        </div>
        <div class="col-md-4">
            <label for="nmObat">Nama Obat</label>
            <input id="nmObat" type="text" name="nmObat" class="form-control" value="{{$obat->nmObat}}" required>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-4">
            <label for="ktg">Kategori</label>
            <input id="ktg" type="text" name="ktg" class="form-control" value="{{$obat->ktg}}"required>
        </div>
        <div class="col-md-4">
            <label for="hrg">Harga</label>
            <input id="hrg" type="text" name="hrg" class="form-control" value="{{$obat->hrg}}"required>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-4">
            <label for="stok">Stok</label>
            <input id="stok" type="number" name="stok" class="form-control" value="{{$obat->stok}}"required>
        </div>
    </div>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Update" >
        <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
    </div>
 </fieldset>
</form>
@endsection
