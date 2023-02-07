@extends('layouts.frontend')

@section('title')
  Rooms
@endsection

@section('banner')
    @include('partials.frontend.inner-banner')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 listing_grid_item">

                <div class="row">
                    @foreach($rooms as $room)
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="1">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
                                <span class="utf_closed">Closed</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i>{{ $room->price }} </span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>{{ $room->name }}</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                    <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                </div>
                            </div>
                            <div class="utf_star_rating_section" data-rating="4.5">
                                <div class="utf_counter_star_rating">(4.5)</div>
                                <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                <span class="like-icon"></span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_pagination_container_part margin-top-20 margin-bottom-75">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
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
