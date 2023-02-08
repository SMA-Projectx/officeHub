@extends('layouts.frontend')

@section('title')
    Room
@endsection

@section('banner')
    @include('partials.frontend.inner-banner')
@endsection

@section('content')


    <div id="main_wrapper">
        <div class="clearfix"></div>
        <div id="utf_listing_gallery_part" class="utf_listing_section">
            <div class="utf_listing_slider utf_gallery_container margin-bottom-0">
                <a href="{{ asset('assets/frontend/images/single-listing-01.jpg') }}" data-background-image="{{ asset('assets/frontend/images/single-listing-01.jpg') }}" class="item utf_gallery"></a>
                <a href="{{ asset('assets/frontend/images/single-listing-02.jpg') }}" data-background-image="{{ asset('assets/frontend/images/single-listing-02.jpg') }}" class="item utf_gallery"></a>
                <a href="{{ asset('assets/frontend/images/single-listing-03.jpg') }}" data-background-image="{{ asset('assets/frontend/images/single-listing-03.jpg') }}" class="item utf_gallery"></a>
                <a href="{{ asset('assets/frontend/images/single-listing-04.jpg') }}" data-background-image="{{ asset('assets/frontend/images/single-listing-04.jpg') }}" class="item utf_gallery"></a>
            </div>
        </div>

        <div class="container">
            <form method="POST" action="{{ route('cart.store')  }}" enctype="multipart/form-data">
                @csrf
                <div class="row utf_sticky_main_wrapper">
                    <div class="col-lg-8 col-md-8">
                        <div id="titlebar" class="utf_listing_titlebar">
                            <div class="utf_listing_titlebar_title">
                                <h2>{{ $room->name }}</h2>
                                <span>
                                    <a href="javascript:void(0);" class="listing-address"> <i class="sl sl-icon-location"></i>
                                        {{ $room->property->street_address }}
                                        @if(isset($room->property->address2))
                                            {{ ' '. $room->property->address2 }}
                                        @endif
                                        @if(isset($room->property->town))
                                            {{ ' '. $room->property->town }}
                                        @endif
                                        @if(isset($room->property->district_id))
                                            {{ ' '. $room->property->district->name }}
                                        @endif
                                        @if(isset($room->property->postcode))
                                            {{ ' '. $room->property->postcode }}
                                        @endif
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div id="utf_listing_overview" class="utf_listing_section">
                            <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Description</h3>
                            <p>{{ $room->description }}</p>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search" style="margin-bottom: 80px;">
                        <div class="verified-badge with-tip margin-bottom-30" data-tip-content="Listing has been verified and belongs business owner or manager."> <i class="sl sl-icon-check"></i> Now Available</div>
                        <div class="utf_box_widget booking_widget_box">
                            <h3><i class="fa fa-calendar"></i> Booking
                                <div class="price">
                                    <span>{{ number_format($room->price, 2) }}<small>/Per Day</small></span>
                                </div>
                            </h3>
                            <div class="row with-forms margin-top-0">
                                <div class="col-lg-12 col-md-12 select_date_box">
                                    <input type="date" name="date" placeholder="Select Date" >
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                            <button type="submit" class="utf_progress_button button fullwidth_block margin-top-5">Add To Cart</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection

@section('styles')
<style type="text/css">
    .custom-mb{
        margin-bottom: 0 !important;
    }
</style>
@endsection

@section('script')

@endsection
