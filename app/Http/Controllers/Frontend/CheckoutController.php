<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ReservationCosts;
use App\Models\ReservationRooms;
use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends FrontendController
{
    public function index(){

        if (!isset(Auth::user()->id)) {
            return redirect(route('login'));
        }

        $rooms = Cart::where('user_id', Auth::user()->id)->get();

        if (count($rooms) == 0 ){
            return redirect()->back();
        }

        return view('frontend.checkout', [
            'rooms' => $rooms
        ]);

    }

    public function store(Request $request)
    {
        if (isset(Auth::user()->id)){
            $validatedData = $request->validate([
                'first_name' => ['required','string'],
                'last_name' => ['required','string'],
                'company_name' => ['required','string'],
                'email' => ['required'],
                'phone' => ['required'],
                'street_address' => ['required','string'],
                'town' => ['required','string'],
                'postcode' => ['required'],
            ]);

            $reservation = Reservations::create([
                'user_id' => Auth::user()->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company_name' => $request->company_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'street_address' => $request->street_address,
                'address2' => $request->address2,
                'town' => $request->town,
                'postcode' => $request->postcode,
                'payment_method' => $request->payment_method,
                'status' => '1',
            ]);

            $rooms = Cart::where('user_id', Auth::user()->id)->get();

            foreach ( $rooms as $room ){
                $room_id = $room->property_room_id;
                $start = date('Y-m-d 09:00:00', strtotime($room->date));
                $end = date('Y-m-d 17:00:00', strtotime($room->date));

                $resRoom = ReservationRooms::create([
                    'user_id' => Auth::user()->id,
                    'reservation_id' => $reservation->id,
                    'property_room_id' => $room_id,
                    'start_time' => $start,
                    'end_time' => $end,
                    'note' => '',
                    'status' => '1',
                ]);


                $cost = ReservationCosts::create([
                    'reservation_id' => $reservation->id,
                    'type_id' => '1',
                    'data_id' => $room_id,
                    'quantity' => '1',
                    'amount' => $room->room->price,
                    'created_time' => date('Y-m-d H:i:s', time()),
                    'status' => '1',
                ]);

                $room->delete();
            }


            //flash message
            session()->flash('success', 'New Equipment Created!');

            return redirect( route('cart.index') );
        }else{
            return redirect(route('login'));
        }

    }
}
