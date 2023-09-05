<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=\App\User::all();
        return view('user.user',['user'=>$user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $save_user= new \App\User;
        $save_user->nama=$request->get('nama');
        $save_user->username=$request->get('username');
        $save_user->email=$request->get('email');
        $save_user->password=bcrypt('password');
        if ($request->get('roles')=='ADMIN') {
        # code...
        $save_user->assignRole('admin');
        } elseif ($request->get('roles')=='DOKTER') {
        # code...
        $save_user->assignRole('dokter');
        } else {
        # code...
        $save_user->assignRole('apoteker');
        }
        $save_user->save();
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name')->all();
        $userRole = $user->roles->pluck('name')->all();
        return view('user.edit',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('role'));
        return redirect()->route( 'user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = \App\User::findOrFail($id);
        $hapus->delete();
        $hapus->removeRole('admin','dokter','apoteker');
        return redirect()->route('user.index');
    }
}
