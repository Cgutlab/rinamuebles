<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::orderBy('id', 'ASC')->get();
        return view('adm.usuario.index', compact('usuarios'));
    }

    public function showCreate(){
        return view('adm.usuario.create');
    }

    public function store(Request $request)
    {
        $user = new User ();
        $user->name     = $request->name;
        $user->username = $request->username;
        $user->email    = $request->email;
        $user->isAdmin  = $request->isAdmin;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('usuario')->with('alert', "Usuario registrado exitósamente" );
    }

    public function showEdit($id){
        $usuario         = User::find($id);
        return view('adm.usuario.edit', compact('usuario'));
    }

    public function update(Request $request, $id){
        $user           = User::find($id);
        $user->name     = $request->name;
        $user->username = $request->username;
        $user->email    = $request->email;
        if ($request->password){
            $user->password = Hash::make($request->password);
        }else{
            $user->password = $user->password;
        }

        $user->save();
        return redirect()->route('usuario')->with('alert', "Usuario actualizado exitósamente" );
    }

    public function eliminar($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('usuario')->with('alert', "Usuario eliminado exitósamente" );
    }
}
