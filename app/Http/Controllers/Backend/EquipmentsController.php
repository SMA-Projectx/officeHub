<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Equipments;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipments::orderBy('name', 'ASC')->get();
        return view('backend.equipments.index', ['equipments' => $equipments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.equipments.create');
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
        ]);

        $category = Equipments::create([
            'name' => $request->name,
            'status' => 1,
        ]);


        //flash message
        session()->flash('success', 'New Equipment Created!');

        return redirect( route('equipments.index') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipments $equipment)
    {
        return view('backend.equipments.create', ['equipment' => $equipment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipments $equipment)
    {
        $data = $request->only([
            'name',
        ]);


        //Update attributes
        $equipment->update($data);

        //flash message
        session()->flash('success', 'Equipment Updated!');

        return redirect( route('equipments.index') );
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
