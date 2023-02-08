@extends('layouts.frontend')

@section('title')
    Home Page
@endsection

@section('banner')
    @include('partials.frontend.banner')
@endsection

@section('content')

    <div class="fullwidth_block search_categorie_block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-top-75 margin-bottom-45">Top Featured Locations <span>What do you want to do today</span> </h3>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="category_container_item_part">
                            <a href="#" class="category_item_box">
                                <div class="featured-type featured">
                                    Top <br>Featured
                                </div>
                                <img src="images/category-box-01.jpg" alt=""/>
                                <span class="category_item_box_btn">Browse</span>
                                <div class="category_content_box_part">
                                    <h3>New York City</h3>
                                    <span>15 listings</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="category_container_item_part">
                            <a href="#" class="category_item_box">
                                <img src="images/category-box-02.jpg" alt=""/>
                                <span class="category_item_box_btn">Browse</span>
                                <div class="category_content_box_part">
                                    <h3>Chicago</h3>
                                    <span>27 Listings</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="category_container_item_part">
                            <a href="#" class="category_item_box">
                                <img src="images/category-box-03.jpg" alt=""/>
                                <span class="category_item_box_btn">Browse</span>
                                <div class="category_content_box_part">
                                    <h3>Los Angeles</h3>
                                    <span>22 Listings</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="category_container_item_part">
                            <a href="#" class="category_item_box">
                                <img src="images/category-box-04.jpg" alt=""/>
                                <span class="category_item_box_btn">Browse</span>
                                <div class="category_content_box_part">
                                    <h3>San Francisco</h3>
                                    <span>15 Listings</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="category_container_item_part">
                            <a href="#" class="category_item_box">
                                <div class="featured-type featured">
                                    Top <br>Rated City
                                </div>
                                <img src="images/category-box-05.jpg" alt=""/>
                                <span class="category_item_box_btn">Browse</span>
                                <div class="category_content_box_part">
                                    <h3>Washington</h3>
                                    <span>26 Listings</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="category_container_item_part">
                            <a href="#" class="category_item_box">
                                <img src="images/category-box-06.jpg" alt=""/>
                                <span class="category_item_box_btn">Browse</span>
                                <div class="category_content_box_part">
                                    <h3>Seattle</h3>
                                    <span>27 Listings</span>
                                </div>
                            </a>
                        </div>
                    </div>
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
