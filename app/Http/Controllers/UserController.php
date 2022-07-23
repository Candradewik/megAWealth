<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index_register(){
        return view('auth.register');
    }

    public function index_login(){
        return view('auth.login');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user-> email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = "user";
        $user->save();

        return redirect()->route('login_page');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($credentials)){
            Cookie::queue('LoginCookie', $request->input('email'), 3);
            return redirect('home');
        }else{
            return redirect()->back()->withErrors(['creds' => 'Invalid Account']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login_page');
    }
}
