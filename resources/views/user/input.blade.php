@extends('layouts.layout')

@section('title')
Tambah Data User
@endsection
@section('content')
<form action="{{route('user.store')}}" method="POST">
    @csrf
 <fieldset>
    <div class="form-group row">
        <div class="col-md-5">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" class="form-control" required>
        </div>
    </div>
    <div class="form-group row"> 
        <div class="col-md-5">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="roles">Roles</label>
            <select id="roles" name="roles[]" class="form-control" required>
                <option value="">--PilihRoles--</option>
                <option value="admin">Admin</option>
                <option value="user">Dokter</option>
                <option value="user">Apoteker</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-5">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="kpassw">Konfirmasi Password</label>
            <input id="kpassw" type="password" name="kpassw" class="form-control" required>
        </div>
    </div>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Simpan" >
        <input type="Button" class="btn btn-primary btn-send" value="Batal" onclick="history.go(-1)">
    </div>
 </fieldset>
</form>
@endsection
