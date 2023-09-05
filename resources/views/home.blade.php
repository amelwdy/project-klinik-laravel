@extends('layouts.layout')

@section('title')
Dashboard
@endsection
@section('content')
<div class = "row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class= "box-header with border">
            <div class="card-header" align="center">Welcome {{ Auth::user()->username }}!</div>
            </div>
            <div class= "class box-body" align="center">
                Anda berada pada halaman utama
            </div>
        </div>
    </div>
</div>
@endsection
