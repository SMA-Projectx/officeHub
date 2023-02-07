<!doctype html>
<html lang="en">
<head>
    @include('partials.backend.head')
</head>

<body>

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

    @include('partials.backend.sidebar')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('partials.backend.header')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    @include('partials.backend.footer')
    <!-- END Footer -->
</div>
<!-- END Page Container -->
@include('partials.backend.script')

</body>
</html>
