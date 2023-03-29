<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PropertyRooms;
use Illuminate\Http\Request;

class HomepageController extends FrontendController
{

    public function index(){

        $rooms = PropertyRooms::where('status', 1)->orderBy('created_at', 'DESC')->get();
        return view('frontend.index', ['rooms' => $rooms]);
       // return view('frontend.index');
    }

    public function about(){

        return view('frontend.about');
    }

    public function contact(){

        return view('frontend.contact');
    }



}
