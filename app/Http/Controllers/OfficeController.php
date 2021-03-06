<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $description = "megAWealth is a real estate company that was founded in 2008. Operated by ED, Inc., megAWealth offers a comprehensive list of real estate for sale and rent along with information. Today, more than ever, megAWealth is The Home of Home Search.";

        $offices = Office::paginate(5);
        return view('aboutUs', compact('description', 'offices'));
    }

    public function manageCompany()
    {
        $offices = Office::paginate(5);
        return view('manageCompany', compact('offices'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addOffice');
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
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'image' => 'required|image|max: 10000| mimes:jpg,jpeg,png'
        ]);

        if($validator->fails()){
            return redirect('/addOffice')->withErrors($validator)->withInput();
        }

        $office = new Office();
        $office->office_name = $request->name;
        $office->address = $request->address;
        $office->contact_name = $request->contact;
        $office->phone = $request->phone;

        $image = time().$request->image->getClientOriginalName();
        $office->image = $image;

        $store = $request->image->storeAs('public/office', $image);
        $office->save();

        return redirect('/addOffice');
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
        $office = Office::find($id);
        return view('updateOffice', compact('office'));
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
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $office = Office::find($id);
        $office->office_name = $request->name;
        $office->address = $request->address;
        $office->contact_name = $request->contact;
        $office->phone = $request->phone;

        $office->save();

        return redirect('/manageCompany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office = Office::find($id);
        $office->delete();

        return redirect()->back();
    }
}
