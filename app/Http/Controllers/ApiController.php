<?php

namespace App\Http\Controllers;

use App\Models\Realestate;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($credentials)){
            return response()->json([
                "Status" => "Login Successful",
                'Token' => $request->user()->createToken('login')->accessToken
            ]);
        }else{
            return response()->json([
                "status" => "Login Failed"
            ]);
        }
    }

    public function transaction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if ($request->email != auth()->user()->email) {
            return response()->json([
                'status' => 'false',
                'message' => 'Email Unauthenticated',
            ]);
        }

        $userId = Auth::id();
        $user = User::find($userId);
        $data = new Collection();

        foreach($user->realestates as $realestate){
            $realestate->status = "Transaction completed";
            $realestate->save();
            $temp = [
                'transaction_date' => Carbon::now()->format('Y-m-d'),
                'transaction_id' => Carbon::now().$userId,
                'user_id' => Auth::id(),
                'type_of_sale' => $realestate->sales_type,
                'building_type' => $realestate->building_type,
                'price' => $realestate->price,
                'location' => $realestate->location,
                'image_path' => $realestate->image,
            ];

            $data->push($temp);
            $realestate->users()->detach();
        }

        $user->realestates()->detach();

        return response()->json([
            'transactions' => $data,
            'user_id' => auth()->user()->id,
        ]);
    }
}
