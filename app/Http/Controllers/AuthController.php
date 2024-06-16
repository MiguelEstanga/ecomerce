<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function login_post(Request $request)
    {
        //return $request->all();
        $user = User::where('email', $request->email)->first();
        if(!$user){
            return redirect()->route('login')->with('mensaje', 'El usuario no existe');
        }
     
        Auth::login($user);
        return redirect()->route('landing');
    }
    public function registro(){
        return view('auth.register');
    }

    public function registro_post(Request $request) 
    {
        
        if($request->password != $request->passworsd_confirmation){
            return redirect()->route('registro.index')->with('mensaje', 'Las contraseñas no coinciden');
        }
        
        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ])->assignRole('user');

        Auth::login($user);

        return redirect()->route('landing');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('landing');
    }
}
