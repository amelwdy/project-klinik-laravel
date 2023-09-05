@extends('layouts.layout')

@section('title')
Data Rekam Medis
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with border">
                <div class="card-header py-3" align="right">
                    <form action="#" method="get" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                        class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="class box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr align="center">
                                <th width="10%">No. Rekam Medis</th>
                                <th width="10%">ID Pasien</th>
                                <th width="15%">Kode Obat</th>
                                <th width="10%">Tensi</th>
                                <th width="10%">Keluhan</th>
                                <th width="10%">Diagnosa</th>
                                <th width="10%">Total</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekam_medis as $rm)
                                <tr>
                                    <td>{{$rm->noRm}}</td>
                                    <td>{{$rm->idPasien}}</td>
                                    <td>{{$rm->kdObat}}</td>
                                    <td>{{$rm->tensi}}</td>
                                    <td>{{$rm->keluhan}}</td>
                                    <td>{{$rm->diagnosa}}</td>
                                    <td>{{$rm->jmlbyr}}</td>
                                    <td align="center">  
                                        <a href="{{route('rekam_medis.edit' ,[$rm->noRm])}}"
                                            class="d-none d-sm-inline-block btn btn-sm btn-primary btn-sm">
                                            <i class="fa fa-fw fa-usd fa-sm text-white-50"></i> Bayar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="{{route('rekam_medis.index')}}">1</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
