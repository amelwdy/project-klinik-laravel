@extends('layouts.layout')

@section('title')
Input Rekam Medis
@endsection
@section('content')
<form action="{{route('rekam_medis.store', [$pasien->idPasien])}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with border">
                    <div class="class box-body">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="idPasien">ID Pasien :</label>
                                <input id="idPasien" type="text" name="idPasien" class="form-control"
                                    value="{{$pasien->idPasien}}" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="noDaftar">No. Daftar :</label>
                                <input id="noDaftar" type="text" name="noDaftar" class="form-control"
                                    value="{{$pasien->noDaftar}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="nmPasien">Nama :</label>
                                <input id="nmPasien" type="text" name="nmPasien" class="form-control"
                                    value="{{$pasien->nmPasien}}" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="tmptLahir">Tempat Lahir :</label>
                                <input id="tmptLahir" type="text" name="tmptLahir" class="form-control"
                                    value="{{$pasien->tmptLahir}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="tgl_lahir">Tgl Lahir :</label>
                                <input id="tgl_lahir" type="date" name="tgl_lahir" class="form-control"
                                    value="{{$pasien->tgl_lahir}}" readonly>
                            </div>
                            <div class="col-md-3">
                                <label class="col-lg-20 control-label">Jenis Kelamin :</label>
                                <input id="jk" type="text" name="jk" class="form-control" value="{{$pasien->jk}}"
                                    readonly>
                            </div>
                        </div><br>
                        <div class="class box-body">
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="noRm">No. Rekam Medis</label>
                                    <input id="noRm" type="text" name="noRm" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="idPasien"> ID Pasien</label>
                                    <input id="idPasien" type="text" name="idPasien" class="form-control" value="{{$pasien->idPasien}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="keluhan">Keluhan</label>
                                    <textarea rows="4" cols="4" id="keluhan" name="keluhan" class="form-control"></textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="tensi">Tensi</label>
                                    <input id="tensi" type="text" name="tensi" class="form-control" required>
                                </div>    
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="diagnosa">Diagnosa</label>
                                    <textarea rows="4" cols="4" id="diagnosa" name="diagnosa" class="form-control"></textarea>
                                </div>
                                <div class="col-md-3">
                                <label for="kdObat">Obat</label>
                                    <select name="kdObat" id="kdObat" class="form-control">
                                    <option value="0">-- Pilih Obat --</option>
                                    @foreach ($obat as $ob)
                                        <option value="{{ $ob->kdObat }}">{{ $ob->kdObat }} - {{ $ob->nmObat }} </option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="jmlbyr">Jumlah Bayar</label>
                                    <input id="jmlbyr" type="text" name="jmlbyr" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-success btn-send" value="Simpan">
                                <input type="Button" class="btn btn-primary btn-send" value="Kembali"
                                    onclick="history.go(-1)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
