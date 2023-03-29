@extends('layouts.frontend')

@section('title')
    Cart
@endsection

@section('banner')
    @include('partials.frontend.inner-banner')
@endsection

@section('content')

    <div class="container">
        <div class="row slick_carousel_slider">
            <div class="col-md-12">
                <h3 class="headline_part centered margin-bottom-25">My Cart</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr style="background: #b9019b;color: #fff;">
                                <td style="width: 10%; padding: 20px;">#</td>
                                <td style="width: 55%; padding: 20px;">Description</td>
                                <td class="text-right" style="width: 20%; padding: 20px;">Amount</td>
                                <td class="text-right" style="width: 15%; padding: 20px;">Action</td>
                            </tr>

                            @php
                            $gross = 0;
                            @endphp

                            @if(count($rooms) > 0)
                            @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td style="font-weight: bold;">
                                    {{ $room->room->name }}
                                    <br>
                                    <span style="font-size: 12px; font-weight: bold;">{{ date('Y-m-d h:i A', strtotime($room->start_time)) }}</span>
                                    <span style="font-size: 12px;"> TO </span>
                                    <span style="font-size: 12px; font-weight: bold;">{{ date('Y-m-d h:i A', strtotime($room->end_time)) }}</span>
                                </td>
                                <td class="text-right">{{ number_format($room->room->price, 2) }}</td>
                                <td class="text-right">{{ number_format($room->room->price, 2) }}</td>
                            </tr>

                            @php
                                $gross += $room->room->price;
                            @endphp
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4" class="text-center"><h2 class="headline_part centered margin-bottom-25">Check out successfully</h2></td>
                            </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 80px;">
                <div class="col-md-9">
                    <a href="{{ url('rooms') }}" class="button button-primary" style="margin-top: 40px;">Continue Reservation</a>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Cart Summary</h5>
                        </div>
                        <div class="card-body">
                            <div class="row" style="padding: 5px 0;margin-top: 10px;">
                                <div class="col-sm-7">Gross Amount</div>
                                <div class="col-sm-5 text-right">{{ number_format($gross, 2) }}</div>
                            </div>
                            <div class="row" style="padding: 5px 0;">
                                <div class="col-sm-7">Discount</div>
                                <div class="col-sm-5 text-right">0</div>
                            </div>
                            <div class="row" style="border-top: 1px solid #ccc;padding: 20px 0;">
                                <div class="col-sm-7" style="font-weight: bold;">Net Amount</div>
                                <div class="col-sm-5 text-right" style="font-weight: bold;">{{ number_format($gross, 2) }}</div>
                            </div>

                            <div class="row" style="border-top: 1px solid #ccc;padding: 20px 0 0;">
                                <a href="{{ url('checkout') }}" class="button button-primary" style="width: 100%; text-align: center;">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
