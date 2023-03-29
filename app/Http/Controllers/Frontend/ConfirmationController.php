<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function confirm(){

        return view('frontend.confirm_booking');
    }

    public function invoice(){

        return view('frontend.invoice');
    }
}
