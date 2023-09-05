@extends('layouts.layout')

@section('title')
Data Transaksi
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
                                <th width="10%">ID Transaksi</th>
                                <th width="10%">Tgl Transaksi</th>
                                <th width="10%">No. Rekam Medis</th>
                                <th width="10%">Username</th>
                                <th width="10%">Status</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $trans)
                                <tr>
                                    <td>{{$trans->idTrans}}</td>
                                    <td>{{$trans->tgl_trans}}</td>
                                    <td>{{$trans->noRm}}</td>
                                    <td>{{$trans->username}}</td>
                                    <td>{{$trans->statusPem}}</td>
                                    <td align="center">
                                        <a href="{{route('transaksi.show' ,[$trans->idTrans])}}"
                                            class="d-none d-sm-inline-block btn btn-sm btn-default btn-sm">
                                            <i class="fa fa-fw fa-pencil fa-sm text-white-50"></i> Detail
                                        </a>  
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="{{route('transaksi.index')}}">1</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
