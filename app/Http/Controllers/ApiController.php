<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user-> email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json([
            "status" => "Register Success"
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (!auth()->attempt($credentials)) {
            return response()->json([
                'status' => 'Login Failed',
            ]);
        }

        if ($request->remember_me) {
            Cookie::queue('LoginCookie', $request->input('email'), 3);
        }

        return response()->json([
            'status' => 'Login Success',
            'token' => $request->user()->createToken('BearerToken')->accessToken,
        ]);
    }
}
