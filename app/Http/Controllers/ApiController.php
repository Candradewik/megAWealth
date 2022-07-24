<?php

namespace App\Http\Controllers;

use App\Models\Realestate;
use App\Models\User;
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

        $transactions = Realestate::where('user_id', auth()->user()->id)->get();
        $data = new Collection();
        foreach ($transactions as $transaction) {
            $temp = [
                'transaction_date' => $transaction->created_at,
                'transaction_id' => $transaction->id,
                'user_id' => $transaction->user_id,
                'type_of_sale' => $transaction->sales_type->name,
                'building_type' => $transaction->building_type->name,
                'price' => $transaction->price,
                'location' => $transaction->location,
                'image_path' => $transaction->image,
            ];
            $data->push($temp);
        }

        return response()->json([
            'transactions' => $data,
            'user_id' => auth()->user()->id,
        ]);
    }
}
