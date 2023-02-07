<header id="header_part">
    <div id="header">
        <div class="container">
            <div class="utf_left_side">
                <div id="logo"> <a href="{{ url('/') }}"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt=""></a> </div>
                <div class="mmenu-trigger">
                    <button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
                    </button>
                </div>
                <nav id="navigation" class="style_one">
                    <ul id="responsive">
                        <li><a class="{{ (request()->is('/')) ? 'current' : '' }}" href="{{ url('/') }}">Home</a></li>
                        <li><a class="{{ (request()->is('rooms') || request()->is('room') ) ? 'current' : '' }}" href="{{ url('/rooms') }}">Rooms</a></li>
                        <li><a class="{{ (request()->is('about-us')) ? 'current' : '' }}" href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a class="{{ (request()->is('contact-us')) ? 'current' : '' }}" href="{{ url('/contact-us') }}">Contact Us</a></li>
                        @auth
                        <li><a href="{{ url('/admin') }}">Admin Dashboard</a></li>
                        @endauth
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            @if(!Auth::user())
            <div class="utf_right_side">
                <div class="header_widget"> <a href="{{ url('login') }}" class="button border sign-in"><i class="fa fa-sign-in"></i> Sign In</a> <a href="{{ url('register') }}" class="button border with-icon"><i class="sl sl-icon-user"></i> Add Listing</a></div>
            </div>
            @endif
        </div>
    </div>
</header>
