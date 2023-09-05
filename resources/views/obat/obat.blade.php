@extends('layouts.layout')

@section('title')
Data Obat
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with border">
                <div class="card-header py-3" align="right">
                    <a href="{{route('obat.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success btn-sm">
                        <i class="fa fa-fw fa-plus fa-sm text-white-50"></i> Tambah </a>
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
                                <th width="15%">Kode Obat</th>
                                <th width="15%">Nama Obat</th>
                                <th width="20%">Kategori</th>
                                <th width="10%">Harga</th>
                                <th width="10%">Stok</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obat as $ob)
                                <tr>
                                    <td>{{$ob->kdObat}}</td>
                                    <td>{{$ob->nmObat}}</td>
                                    <td>{{$ob->ktg}}</td>
                                    <td>{{number_format($ob->hrg)}}</td>
                                    <td>{{number_format($ob->stok)}}</td>
                                    <td align="center">
                                        <a href="{{route('obat.edit' ,[$ob->kdObat])}}"
                                            class="d-none d-sm-inline-block btn btn-sm btn-primary btn-sm">
                                            <i class="fa fa-fw fa-pencil fa-sm text-white-50"></i> Edit
                                        </a>
                                        <a href="/obat/hapus/{{ $ob->kdObat }}"
                                            onclick="return confirm('Yakin Ingin menghapus data obat?')"
                                            class="d-none d-sm-inline-block btn btn-sm btn-danger btn-sm">
                                            <i class="fa fa-fw fa-trash-o fa-sm text-white-50"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="{{route('obat.index')}}">1</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
