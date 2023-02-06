<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomsController extends FrontendController
{
    public function rooms(){
        return 'Rooms';
        //return view('frontend.cart');
    }

    public function room($id){
        return 'Room ' . $id;
        //return view('frontend.cart');
    }
}
