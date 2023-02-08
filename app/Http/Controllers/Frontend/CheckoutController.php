<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends FrontendController
{
    public function index(){

        if (!isset(Auth::user()->id)) {
            return redirect(route('login'));
        }

        $rooms = Cart::where('user_id', Auth::user()->id)->get();
        return view('frontend.checkout', [
            'rooms' => $rooms
        ]);

    }
}
