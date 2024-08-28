<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function novoUsuario(){
        return view('site.novoUsuario');
    }

    public function cadastrarUsuario(Request $request){
        //dd($request);
        $user = $request->all();
        $user['password'] = bcrypt($request->password);

        $userWithEmail = User::where('email', $request->email)->first();
        if($userWithEmail){
            return redirect()->route('novoUsuario')->with('aviso', 'email duplicado...');

        }
        $user = User::create($user);

        Auth::login(($user));

        return redirect()->route('dashboard');


        
    }
}
