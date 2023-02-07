<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Properties::orderBy('id', 'DESC')->get();
        return view('backend.properties.index', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','string'],
            'street_address' => ['required','string'],
            'postcode' => ['required','string'],
        ]);

        $property = Properties::create([
            'name' => $request->name,
            'street_address' => $request->street_address,
            'address2' => $request->address2,
            'town' => $request->town,
            'district_id' => $request->district_id,
            'postcode' => $request->postcode,
            'is_approved' => 1,
            'user_id' => Auth::user()->id,
            'status' => 1,
        ]);


        //flash message
        session()->flash('success', 'New Property Created!');

        return redirect( route('properties.index') );
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
    public function edit(Properties $property)
    {
        return view('backend.properties.create', ['property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Properties $property)
    {
        $data = $request->only([
            'name',
            'street_address',
            'address2',
            'town',
            'district_id',
            'postcode',
        ]);


        //Update attributes
        $property->update($data);

        //flash message
        session()->flash('success', 'Property Updated!');

        return redirect( route('properties.index') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
