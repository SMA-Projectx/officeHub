<div class="clearfix"></div>
<div id="titlebar" class="gradient custom-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>@yield('title')</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>@yield('title')</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
