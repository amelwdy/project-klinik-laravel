@extends('layouts.layout')

@section('title')
Data Pasien
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with border">
                <div class="card-header py-3" align="right">
                        <a href="{{route('pasien.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success btn-sm">
                        <i class="fa fa-fw fa-edit fa-sm text-white-50"></i> Daftar </a>
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
                                <th width="10%">ID Pasien</th>
                                <th width="10%">No. Daftar</th>
                                <th width="15%">Nama</th>
                                <th width="15%">Tempat Lahir</th>
                                <th width="10%">Tgl Lahir</th>
                                <th width="10%">Jenis Kelamin</th>
                                <th width="10%">Alamat</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasien as $psn)
                                <tr>
                                    <td>{{$psn->idPasien}}</td>
                                    <td>{{$psn->noDaftar}}</td>
                                    <td>{{$psn->nmPasien}}</td>
                                    <td>{{$psn->tmptLahir}}</td>
                                    <td>{{$psn->tgl_lahir}}</td>
                                    <td>{{$psn->jk}}</td>
                                    <td>{{$psn->almtPasien}}</td>
                                    <td align="center">
                                        <a href="{{route('pasien.edit' ,[$psn->idPasien])}}"
                                            class="d-none d-sm-inline-block btn btn-sm btn-info btn-sm">
                                            <i class="fa fa-fw fa-search fa-sm text-white-50"></i> Diagnosa
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="{{route('pasien.index')}}">1</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
