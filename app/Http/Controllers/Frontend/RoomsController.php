<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomsController extends FrontendController
{
    public function rooms(){

        return view('frontend.rooms');
    }

    public function room($id){
        $room =  '';
        return view('frontend.room', ['room' => $room]);
    }
}
