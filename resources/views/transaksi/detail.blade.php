@extends('layouts.layout')

@section('title')
Detail Transaksi Jurnal
@endsection
@section('content')
<form action="" method="POST">
    @csrf
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with border">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="idTrans">ID Transaksi :</label>
                                <input id="idTrans" type="text" name="idTrans" class="form-control"
                                    value="{{$transaksi->idTrans}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="tgl_trans">Tanggal Transaksi :</label>
                                <input id="tgl_trans" type="date" name="tgl_trans" class="form-control"
                                    value="{{$transaksi->tgl_trans}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10"><br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th width="10%">Kode Akun</th>
                                            <th width="10%">Nama Akun</th>
                                            <th width="10%">Debit</th>
                                            <th width="10%">Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detail_trans as $detail)
                                        <tr>
                                            <td>{{$detail->noAkun}}</td>
                                            <td>{{$detail->nmAkun}}</td>
                                            <td>{{$detail->jmldb}}</td>
                                            <td>{{$detail->jmlcr}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </thead>
                                </table>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div>
    </fieldset>
</form>
@endsection
