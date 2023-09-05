@extends('layouts.layout')

@section('title')
Pendaftaran Pasien Baru
@endsection
@section('content')
<form action="{{route('pasien.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with border">
                    <div class="card-header"></div>
                    <div class="class box-body">
                        <div class="form-group row">
                            <div class="col-md-5">
                                <label for="idPasien">ID Pasien</label>
                                <input id="idPasien" type="text" name="idPasien" class="form-control" required>
                            </div>
                            <div class="col-md-5">
                                <label for="noDaftar">No. Daftar</label>
                                <input id="noDaftar" type="text" name="noDaftar" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5">
                                <label for="nmPasien">Nama</label>
                                <input id="nmPasien" type="text" name="nmPasien" class="form-control" required>
                            </div>
                            <div class="col-md-5">
                                <label for="tmptLahir">Tempat Lahir</label>
                                <input id="tmptLahir" type="text" name="tmptLahir" class="form-control" required>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <div class="col-md-5">
                                <label for="tgl_lahir">Tgl Lahir</label>
                                <input id="tgl_lahir" type="date" name="tgl_lahir" class="form-control" required>
                            </div>
                            <div class="col-md-5">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="form-control" name="jk" id="jk">
                                    <option value="">--Pilih Gender--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5">
                                <label for="almtPasien">Alamat</label>
                                <input id="almtPasien" type="text" name="almtPasien" class="form-control" required>
                            </div>
                        </div>
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-success btn-send" value="Simpan">
                                <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
                            </div>
                        </div>   
                    </div>   
                </div>   
            </div>   
        </div>   
    </div>   
</form>
@endsection
