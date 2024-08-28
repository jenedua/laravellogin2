<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    
    public function auth(Request $request){
        $credencias = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ],[
            'email.required' => 'O campo email é obrigado!',
            'email.email' => 'O campo não é válido',
            'password.required' => 'O campo senha é obrigado!',
        ]);

        $userWithEmail = User::where('email', $request->email)
                        ->whereNotNull('provider_name')
                      ->first();
        if($userWithEmail){
            return redirect()->route('site.login')->with('aviso', 'E-mail cadastrado para-se logar com google');

        }

        if(Auth::attempt($credencias)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            return redirect()->back()->with('erro', 'Email ou senha inválida.');
        }

    }
}
