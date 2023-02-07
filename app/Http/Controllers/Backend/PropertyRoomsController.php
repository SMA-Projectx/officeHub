<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use App\Models\PropertyRooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyRoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = PropertyRooms::orderBy('id', 'DESC')->get();
        return view('backend.rooms.index', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Properties::where('user_id', Auth::user()->id)->orderBy('name', 'ASC')->get();
        return view('backend.rooms.create', ['properties' => $properties]);
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
            'price' => ['required','numeric'],
        ]);

        $room = PropertyRooms::create([
            'name' => $request->name,
            'price' => $request->price,
            'property_id' => $request->property_id,
            'description' => $request->description,
            'status' => 1,
        ]);


        //flash message
        session()->flash('success', 'New Room Created!');

        return redirect( route('rooms.index') );
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
    public function edit(PropertyRooms $room)
    {
        $properties = Properties::where('user_id', Auth::user()->id)->orderBy('name', 'ASC')->get();
        return view('backend.rooms.create', [
            'room' => $room,
            'properties' => $properties,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyRooms $room)
    {
        $data = $request->only([
            'property_id',
            'name',
            'price',
            'description',
        ]);


        //Update attributes
        $room->update($data);

        //flash message
        session()->flash('success', 'Room Updated!');

        return redirect( route('rooms.index') );
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
