<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
}