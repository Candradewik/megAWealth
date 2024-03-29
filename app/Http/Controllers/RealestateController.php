<?php

namespace App\Http\Controllers;

use App\Models\Realestate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RealestateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function rent()
    {
        $realestates = Realestate::query()->where('sales_type', '=', 'Rent')->where('status', '<>', 'Transaction completed')->paginate(4);
        return view('rent', compact('realestates'));
    }

    public function buy()
    {
        $realestates = Realestate::query()->where('sales_type', '=', 'Sale')->where('status', '<>', 'Transaction completed')->paginate(4);
        return view('buy', compact('realestates'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $realestates = Realestate::query()->where('sales_type', 'LIKE', $keyword)->orWhere('building_type', 'LIKE', $keyword)->orWhere('location', 'LIKE', "%".$keyword."%")->paginate(4);

        return view('searchResult', compact('keyword', 'realestates'));
    }

    public function manageRealestate()
    {
        $realestates = Realestate::paginate(4);
        return view('manageRealEstate', compact('realestates'));
    }

    public function updateStatus($id){
        $realestate = Realestate::find($id);
        $realestate->status = "Transaction completed";
        $realestate->save();

        $realestate->users()->detach();

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addRealEstate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sales' => 'required|in:Sale,Rent',
            'building' => 'required|in:House,Apartment',
            'price' => 'required',
            'location' => 'required',
            'image' => 'required|image|max: 10000| mimes:jpg,jpeg,png'
        ]);


        if($validator->fails()){
            return redirect('/addRealEstate')->withErrors($validator)->withInput();
        }

        $realestate = new Realestate();
        $realestate->sales_type = $request->sales;
        $realestate->building_type = $request->building;
        $realestate->price = $request->price;
        $realestate->location = $request->location;

        $image = time().$request->image->getClientOriginalName();
        $realestate->image = $image;

        $store = $request->image->storeAs('public/realestate', $image);

        $realestate->save();

        return redirect('/addRealEstate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $realestate = Realestate::find($id);
        return view('updateRealEstate', compact('realestate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'sales' => 'required|in:Sale,Rent',
            'building' => 'required|in:House,Apartment',
            'price' => 'required',
            'location' => 'required',
        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $realestate = Realestate::find($id);
        $realestate->sales_type = $request->sales;
        $realestate->building_type = $request->building;
        $realestate->price = $request->price;
        $realestate->location = $request->location;

        $realestate->save();

        return redirect('/manageRealEstate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $realestate = Realestate::find($id);
        $realestate->users()->detach();
        $realestate->delete();

        return redirect()->back();
    }

    public function cart(){
        $userId = Auth::id();
        $user = User::find($userId);

        $realestates = $user->realestates()->paginate(4);

        return view('cart', compact('realestates'));
    }

    public function addToCart($id){
        $userId = Auth::id();
        $realestate = Realestate::find($id);

        if($realestate->users()->where('user_id', $userId)->exists()){
            return redirect()->back();
        }

        else if($realestate->status == "Transaction completed"){
            return redirect()->back();
        }

        else{
            $realestate->status = "Cart";
            $realestate->save();

            $realestate->users()->attach($userId);
            return redirect()->back();
        }
    }

    public function removeFromCart($id){
        $userId = Auth::id();
        $realestate = Realestate::find($id);

        $realestate->users()->detach($userId);

        if($realestate->users()->exists()){
            return redirect()->back();
        }

        else{
            $realestate->status = "open";
            $realestate->save();

            return redirect()->back();
        }

        return redirect('/cart');
    }

    public function checkout(){
        $userId = Auth::id();
        $user = User::find($userId);

        foreach($user->realestates as $realestate){
            $realestate->status = "Transaction completed";
            $realestate->save();
            $realestate->users()->detach();
        }

        $user->realestates()->detach();

        return redirect('/')->with('success', 'Checkout Successful');
    }
}
