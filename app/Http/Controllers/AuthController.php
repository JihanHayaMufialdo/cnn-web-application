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
        // dd($user);

        Auth::login($user);

        // if (!Auth::attempt($request->only(['username', 'password']))) {
        //     return back()->with('error', 'Akun Pengguna atau Kata Sandi Anda tidak sesuai')->withInput($request->all());
        // }

        // $user = Auth::user();

        if($user->role == 'admin'){
            return to_route('admin-dashboard');
        }else if($user->role == 'dosen'){
            // return view('layout.dosen-dashboard',$data);
            return to_route('dosen-dashboard');
        }
    }

    public function logout(){
       Auth::logout();
       return to_route('login');
    }

    public function dashboard_dosen(){
        $user = Auth::user();
        $data = [
            'title_page' => 'Dashboard',
            'user'  => $user
        ];
        return view('web.dashboards.dashboard-dosen', $data);
    }

    public function dashboard_admin(){
        $user = Auth::user();
        $data = [
            'title_page' => 'Dashboard',
            'user'  => $user
        ];
        return view('web.dashboards.dashboard-admin', $data);
    }
}
