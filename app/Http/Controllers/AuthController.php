<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('web.auth.login');
    }

    public function login_attempt(Request $request){
        if(!Auth::attempt($request->only(['username','password']))){
            return back()->with('error','Akun Pengguna atau Kata Sandi Anda tidak sesuai')->withInput($request->all());
        }

        $user = User::where('username', $request->username)->firstOrFail();

        Auth::login($user);

        if($user->role == 'admin'){
            return to_route('admin-dashboard');
        }else if($user->role == 'dosen'){
            return to_route('dosen-dashboard');
        }
    }

    public function logout(){
       Auth::logout();
       return to_route('login');
    }

}
