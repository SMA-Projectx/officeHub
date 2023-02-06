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
                <a href="images/single-listing-01.jpg" data-background-image="images/single-listing-01.jpg" class="item utf_gallery"></a>
                <a href="images/single-listing-02.jpg" data-background-image="images/single-listing-02.jpg" class="item utf_gallery"></a>
                <a href="images/single-listing-03.jpg" data-background-image="images/single-listing-03.jpg" class="item utf_gallery"></a>
                <a href="images/single-listing-04.jpg" data-background-image="images/single-listing-04.jpg" class="item utf_gallery"></a>
            </div>
        </div>

        <div class="container">
            <div class="row utf_sticky_main_wrapper">
                <div class="col-lg-8 col-md-8">
                    <div id="titlebar" class="utf_listing_titlebar">
                        <div class="utf_listing_titlebar_title">
                            <h2>The Hot and More Restaurant <span class="listing-tag">Restaurant</span></h2>
                            <span> <a href="#utf_listing_location" class="listing-address"> <i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong </a> </span>
                            <span class="call_now"><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                            <div class="utf_star_rating_section" data-rating="4.5">
                                <div class="utf_counter_star_rating">(4.5) / (14 Reviews)</div>
                            </div>
                            <ul class="listing_item_social">
                                <li><a href="#"><i class="fa fa-bookmark"></i> Bookmark</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Add Review</a></li>
                                <li><a href="#"><i class="fa fa-flag"></i> Featured</a></li>
                                <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                <li><a href="#" class="now_open">Open Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="utf_listing_overview" class="utf_listing_section">
                        <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Listing Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam.</p>
                        <div id="utf_listing_tags" class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">
                            <a href="#"><i class="sl sl-icon-phone" aria-hidden="true"></i> +(01) 1123-254-456</a>
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</a>
                            <a href="#"><i class="sl sl-icon-globe" aria-hidden="true"></i> www.example.com</a>
                        </div>
                        <div class="social-contact">
                            <a href="#" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
                            <a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
                            <a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search">
                    <div class="verified-badge with-tip margin-bottom-30" data-tip-content="Listing has been verified and belongs business owner or manager."> <i class="sl sl-icon-check"></i> Now Available</div>
                    <div class="utf_box_widget booking_widget_box">
                        <h3><i class="fa fa-calendar"></i> Booking
                            <div class="price">
                                <span>185$<small>person</small></span>
                            </div>
                        </h3>
                        <div class="row with-forms margin-top-0">
                            <div class="col-lg-12 col-md-12 select_date_box">
                                <input type="text" id="date-picker" placeholder="Select Date" readonly="readonly">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel-dropdown time-slots-dropdown">
                                    <a href="#">Choose Time Slot...</a>
                                    <div class="panel-dropdown-content padding-reset">
                                        <div class="panel-dropdown-scrollable">
                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-1">
                                                <label for="time-slot-1">
                                                    <strong><span>1</span> : 8:00 AM - 8:30 AM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-2">
                                                <label for="time-slot-2">
                                                    <strong><span>2</span> : 8:30 AM - 9:00 AM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-3">
                                                <label for="time-slot-3">
                                                    <strong><span>3</span> : 9:00 AM - 9:30 AM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-4">
                                                <label for="time-slot-4">
                                                    <strong><span>4</span> : 9:30 AM - 10:00 AM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-5">
                                                <label for="time-slot-5">
                                                    <strong><span>5</span> : 10:00 AM - 10:30 AM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-6">
                                                <label for="time-slot-6">
                                                    <strong><span>6</span> : 13:00 PM - 13:30 PM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-7">
                                                <label for="time-slot-7">
                                                    <strong><span>7</span> : 13:30 PM - 14:00 PM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-8">
                                                <label for="time-slot-8">
                                                    <strong><span>8</span> : 14:00 PM - 14:30 PM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-9">
                                                <label for="time-slot-9">
                                                    <strong><span>9</span> : 15:00 PM - 15:30 PM</strong>
                                                </label>
                                            </div>

                                            <div class="time-slot">
                                                <input type="radio" name="time-slot" id="time-slot-10">
                                                <label for="time-slot-10">
                                                    <strong><span>10</span> : 16:00 PM - 16:30 PM</strong>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel-dropdown">
                                    <a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
                                    <div class="panel-dropdown-content">
                                        <div class="qtyButtons">
                                            <div class="qtyTitle">Adults</div>
                                            <input type="text" name="qtyInput" value="1">
                                        </div>
                                        <div class="qtyButtons">
                                            <div class="qtyTitle">Childrens</div>
                                            <input type="text" name="qtyInput" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="with-forms margin-top-0">
                                <div class="col-lg-12 col-md-12">
                                    <select class="utf_chosen_select_single" >
                                        <option label="Select Time">Select Time</option>
                                        <option>Lunch</option>
                                        <option>Dinner</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href="listing_booking.html" class="utf_progress_button button fullwidth_block margin-top-5">Request Booking</a>
                        <button class="like-button add_to_wishlist"><span class="like-icon"></span> Add to Wishlist</button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="utf_box_widget margin-top-35">
                        <h3><i class="sl sl-icon-phone"></i> Contact Info</h3>
                        <div class="utf_hosted_by_user_title"> <a href="#" class="utf_hosted_by_avatar_listing"><img src="images/dashboard-avatar.jpg" alt=""></a>
                            <h4><a href="#">Kathy Brown</a><span>Posted 3 Days Ago</span>
                                <span><i class="sl sl-icon-location"></i> Lonsdale St, Melbourne</span>
                            </h4>
                        </div>
                        <ul class="utf_social_icon rounded margin-top-10">
                            <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                            <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                        <ul class="utf_listing_detail_sidebar">
                            <li><i class="sl sl-icon-map"></i> 12345 Little Lonsdale St, Melbourne</li>
                            <li><i class="sl sl-icon-phone"></i> +(012) 1123-254-456</li>
                            <li><i class="sl sl-icon-globe"></i> <a href="#">www.example.com</a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>
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
<style type="text/css">
    .custom-mb{
        margin-bottom: 0 !important;
    }
</style>
@endsection

@section('script')

@endsection
