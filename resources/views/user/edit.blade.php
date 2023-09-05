@extends('layouts.layout')

@section('title')
Edit Data User
@endsection
@section('content')
<form action="{{route('user.update', [$user->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
 <fieldset>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" class="form-control" value="{{$user->nama}}" readonly>
        </div>
        <div class="col-md-4">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" class="form-control" value="{{$user->username}}" readonly>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-4">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="{{$user->email}}"readonly>
        </div>
        <div class="col-md-4">
            @foreach ($user ->roles as $role)
            <label for="akses">Akses</label>
            <input id="akses" type="text" name="akses" class="form-control" value="{{$role->id}}" readonly>
            @endforeach
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label class="col-lg-20 control-label">Ubah Akses</label>
            <select class="form-control" name="role" id="roles" required>
                <option value="">--Pilih Roles--</option>
                <option value="admin">Admin</option>
                <option value="dokter">Dokter</option>
                <option value="apoteker">Apoteker</option>
            </select>
        </div>
    </div>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Update" >
        <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
    </div>
 </fieldset>
</form>
@endsection
