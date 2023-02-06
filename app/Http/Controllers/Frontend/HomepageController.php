<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends FrontendController
{
    public function index(){
        return 'Homepage';
        //return view('frontend.index');
    }

    public function about(){
        return 'About Us';
        //return view('frontend.index');
    }

    public function contact(){
        return 'Contact Us';
        //return view('frontend.index');
    }
}
