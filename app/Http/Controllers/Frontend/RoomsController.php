<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PropertyRooms;
use Illuminate\Http\Request;

class RoomsController extends FrontendController
{
    public function rooms(){

        $rooms = PropertyRooms::where('status', 1)->orderBy('created_at', 'DESC')->get();

        return view('frontend.rooms', ['rooms' => $rooms]);
    }

    public function room($id){
        $room =  '';
        return view('frontend.room', ['room' => $room]);
    }
}
