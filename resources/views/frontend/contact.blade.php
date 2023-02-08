@extends('layouts.frontend')

@section('title')
    Contact us
@endsection

@section('banner')
    @include('partials.frontend.inner-banner')
@endsection

@section('content')

    <div class="container">
        <div class="row">
                <section id="contact" class="margin-bottom-70">
                    <h4><i class="sl sl-icon-phone"></i> Contact Form</h4>
                    <form id="contactform">
                        <div class="row">
                            <div class="col-md-6">
                                <input name="name" type="text" placeholder="Frist Name" required />
                            </div>
                            <div class="col-md-6">
                                <input name="name" type="text" placeholder="Last Name" required />
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Email" required />
                            </div>
                            <div class="col-md-6">
                                <input name="subject" type="text" placeholder="Subject" required />
                            </div>
                            <div class="col-md-12">
                                <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <input type="submit" class="submit button" id="submit" value="Submit" />
                    </form>
                </section>
            </div>

            <div class="col-md-4">
                <div class="utf_box_widget margin-bottom-70">
                    <h3><i class="sl sl-icon-map"></i> Office Address</h3>
                    <div class="utf_sidebar_textbox">
                        <ul class="utf_contact_detail">
                            <li><strong>Phone:-</strong> <span>+ 001 245 0154</span></li>
                            <li><strong>Web:-</strong> <span><a href="#">www.sitename.com</a></span></li>
                            <li><strong>E-Mail:-</strong> <span><a href="mailto:info@example.com">info@example.com</a></span></li>
                            <li><strong>Address:-</strong> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</span></li>
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

@endsection

@section('script')

@endsection
