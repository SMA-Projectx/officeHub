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
                <h3 class="headline_part centered margin-bottom-25"></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <div class="container margin-bottom-75">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="utf_booking_listing_confirmation_section">
                                            <i class="sl sl-icon-check"></i>
                                            <h2>Thanks for your Booking!</h2>
                                            <a href="{{ url('invoice') }}" class="button margin-top-30">Check Invoice</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 80px;">
                <div class="col-md-9">
                    <a href="{{ url('rooms') }}" class="button button-primary" style="margin-top: 40px;">Continue Reservation</a>
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
