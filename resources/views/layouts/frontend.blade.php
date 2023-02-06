<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('partials.frontend.head')
</head>
<body>

<!-- Wrapper -->
<div id="main_wrapper">
@include('partials.frontend.header')
  <div class="clearfix"></div>

  <!-- Banner -->
    @yield('banner')

    @yield('content')


@include('partials.frontend.footer')

  <div id="bottom_backto_top"><a href="#"></a></div>
</div>

<!-- Scripts -->
@include('partials.frontend.script')


</body>
</html>
