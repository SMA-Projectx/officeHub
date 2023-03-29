<div id="footer" class="footer_sticky_part">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h4>Useful Links</h4>
                <ul class="social_footer_link">
                    <li><a class="{{ (request()->is('/')) ? 'current' : '' }}" href="{{ url('/') }}">Home</a></li>
                    <li><a class="{{ (request()->is('contact-us')) ? 'current' : '' }}" href="{{ url('/contact-us') }}">Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h4>My Account</h4>
                <ul class="social_footer_link">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h4>Help</h4>
                <ul class="social_footer_link">
                    <li><a href="{{ url('login') }}">Sign In</a></li>
                    <li><a href="{{ url('register') }}">Register</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="footer_copyright_part">Copyright © 2023 All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
