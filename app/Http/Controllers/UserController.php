<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('welcome');

        }
    }

    public function signup() {

        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('users/cadastro');


        }
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if ($request == null || $request->email == null || $request->password == null) {
            return redirect()->back()->with('error', 'Preencha todos os campos!');
        } else if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Login realizado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao logar!');
        }
    }


    public function register(Request $request) {
        
       
        if($request == null || $request->name == null || $request->email == null || $request->password == null) {
            return redirect()->back()->with('error', 'Campo(s) vazios!');

        } else if ($request->password == $request->password_confirmation) {
            
            $user = User::where('email', $request->email)->first();

            if($user == null) {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->save();

                return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
            } else {
                return redirect()->back()->with('error', 'Usuário já cadastrado!');
            }
   
        } else {
            return redirect()->back()->with('error', 'As senhas não conferem!');
        }



    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home.login');
    }
}
