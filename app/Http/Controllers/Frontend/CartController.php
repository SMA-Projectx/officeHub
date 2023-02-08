<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends FrontendController
{
    public function index(){

        if (!isset(Auth::user()->id)) {
            return redirect(route('login'));
        }

        $rooms = Cart::where('user_id', Auth::user()->id)->get();
        return view('frontend.cart', [
            'rooms' => $rooms
        ]);
    }

    public function store(Request $request)
    {

        if (isset(Auth::user()->id)){
            $validatedData = $request->validate([
                'date' => ['required','string'],
            ]);

            $start = date('Y-m-d 09:00:00', strtotime($request->date));
            $end = date('Y-m-d 17:00:00', strtotime($request->date));

            $cart = Cart::create([
                'user_id' => Auth::user()->id,
                'property_room_id' => $request->room_id,
                'start_time' => $start,
                'end_time' => $end,
                'status' => '1',
            ]);


            //flash message
            session()->flash('success', 'New Equipment Created!');

            return redirect( route('cart.index') );
        }else{
            return redirect(route('login'));
        }

    }


}
