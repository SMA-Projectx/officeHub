@extends('layouts.frontend')

@section('title')
    Home Page
@endsection

@section('banner')
    @include('partials.frontend.banner')
@endsection

@section('content')

    <div id="main_wrapper">
        <div class="clearfix"></div>
        <div id="utf_listing_gallery_part" class="utf_listing_section">
        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 listing_grid_item">

                <div class="row">
                    @foreach($rooms as $room)
                        <div class="col-md-4 col-lg-4 col-md-12"> <a href="{{ url('/room/' . $room->id) }}" class="utf_listing_item-container" data-marker-id="1">
                                <div class="utf_listing_item"> <img src="{{ asset('assets/frontend/images/utf_listing_item-01.jpg') }}" alt="">
                                    <div class="utf_listing_item_content">
                                        <div class="utf_listing_prige_block">
                                            <span class="utf_meta_listing_price"><i class="fa fa-tag"></i>{{ number_format($room->price, 2) }} </span>
                                            <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                        </div>
                                        <h3>{{ $room->name }}</h3>
                                        <span><i class="sl sl-icon-location"></i>
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
                                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <section class="utf_testimonial_part fullwidth_block padding-top-75 padding-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline_part centered"> What Say Our Customers <span class="margin-top-15">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</span> </h3>
                </div>
            </div>
        </div>
        <div class="fullwidth_carousel_container_block margin-top-20">
            <div class="utf_testimonial_carousel testimonials">
                <div class="utf_carousel_review_part">
                    <div class="utf_testimonial_box">
                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
                    </div>
                    <div class="utf_testimonial_author"> <img src="images/happy-client-01.jpg" alt="">
                        <h4>Denwen Evil <span>Web Developer</span></h4>
                    </div>
                </div>
                <div class="utf_carousel_review_part">
                    <div class="utf_testimonial_box">
                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
                    </div>
                    <div class="utf_testimonial_author"> <img src="images/happy-client-02.jpg" alt="">
                        <h4>Adam Alloriam <span>Web Developer</span></h4>
                    </div>
                </div>
                <div class="utf_carousel_review_part">
                    <div class="utf_testimonial_box">
                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
                    </div>
                    <div class="utf_testimonial_author"> <img src="images/happy-client-03.jpg" alt="">
                        <h4>Illa Millia <span>Project Manager</span></h4>
                    </div>
                </div>
                <div class="utf_carousel_review_part">
                    <div class="utf_testimonial_box">
                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
                    </div>
                    <div class="utf_testimonial_author"> <img src="images/happy-client-01.jpg" alt="">
                        <h4>Denwen Evil <span>Web Developer</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('css')

@endsection

@section('js')

@endsection

@section('styles')

@endsection

@section('script')

@endsection
