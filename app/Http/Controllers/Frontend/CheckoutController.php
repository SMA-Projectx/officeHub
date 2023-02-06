<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends FrontendController
{
    public function index(){
        return 'Checkout';
        //return view('frontend.checkout');
    }
}
