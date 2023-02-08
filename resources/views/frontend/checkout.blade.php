@extends('layouts.frontend')

@section('title')
    checkout
@endsection

@section('banner')
    @include('partials.frontend.inner-banner')
@endsection

@section('content')

    <div class="container margin-bottom-75">
        <form method="POST" action="{{ route('checkout.store')  }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8 col-md-8 utf_listing_payment_section">
                    <div class="utf_booking_listing_section_form margin-bottom-40">
                        <h3><i class="sl sl-icon-paper-plane"></i> Billing Information</h3>
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="bg-danger" style="font-weight: bold;padding: 10px 20px;margin-bottom: 10px;">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" value="" name="first_name" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input type="text" value="" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <label>Company Name</label>
                                <input type="text" value="" name="company_name" placeholder="Company Name">
                            </div>
                            <div class="col-md-6">
                                <div class="medium-icons">
                                    <label>E-Mail</label>
                                    <input type="text" value="" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="medium-icons">
                                    <label>Phone</label>
                                    <input type="text" value="" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Street Address</label>
                                <input type="text" value="" name="street_address" placeholder="Street Address">
                            </div>
                            <div class="col-md-6">
                                <label>Address2</label>
                                <input type="text" value="" name="address2" placeholder="Address2">
                            </div>
                            <div class="col-md-6">
                                <label>Town</label>
                                <input type="text" value="" name="town" placeholder="Town">
                            </div>
                            <div class="col-md-6">
                                <label>Postcode</label>
                                <input type="text" value="" name="postcode" placeholder="Postcodes">
                            </div>
                            <div class="col-md-6">
                                <label>District</label>
                                <select name="district_id">
                                    <option value="1">Colombo</option>
                                    <option value="2">Gampaha</option>
                                    <option value="3">Kalutara</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="utf_booking_payment_option_form">
                        <h3><i class="sl sl-icon-credit-card "></i> Payment Method</h3>
                        <div class="payment">
                            <div class="utf_payment_tab_block">
                                <div class="utf_payment_trigger_tab">
                                    <input checked="" id="paypal" name="payment_method" type="radio" value="1">
                                    <label for="paypal">Bank Transfer</label>
                                    <img class="utf_payment_logo paypal" src="images/paypal_pay.png" alt="">
                                </div>
                            </div>

                            <div class="utf_payment_tab_block utf_payment_tab_block_active">
                                <div class="utf_payment_trigger_tab">
                                    <input type="radio" name="payment_method" id="creditCart" value="2">
                                    <label for="creditCart">Cash</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 margin-top-0 utf_listing_payment_section">
                    <div class="boxed-widget opening-hours summary margin-top-0">
                        <h3><i class="fa fa-calendar-check-o"></i> Booking Summary</h3>
                        <ul>
                            @php
                                $gross = 0;
                            @endphp
                            @foreach($rooms as $room)
                                <li>{{ $room->room->name }} <span>{{ number_format($room->room->price, 2) }}</span></li>
                                @php
                                    $gross += $room->room->price;
                                @endphp
                            @endforeach
                            <li class="total-costs">Sub Total <span>{{ number_format($gross, 2) }}</span></li>
                            <li>Discount <span>0.00</span></li>
                            <li class="total-costs">Total Cost <span>{{ number_format($gross, 2) }}</span></li>
                        </ul>
                        <div class="row" style="border-top: 1px solid #ccc;padding: 20px 0 0;">
                            <button type="submit" class="button button-primary" style="width: 100%; text-align: center;">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection

@section('styles')

@endsection

@section('script')

@endsection
