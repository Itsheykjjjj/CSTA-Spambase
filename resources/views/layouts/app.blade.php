<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- CSS Templates -->
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="preload" data-hs-appearance="default" as="style">
    <link href="{{ asset('assets/css/theme-dark.min.css') }}" rel="preload" data-hs-appearance="dark" as="style">

    <!-- JS Config -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>
  <body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
    <!-- JS Appearance -->
    <script src="{{ asset('assets/js/hs.theme-appearance.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}"></script>

    <!-- ========== Header ========== -->
    @include('partials.header')
    <!-- ========== End Header ========== -->

    <!-- ========== Sidebar ========== -->
    @include('partials.sidebar')
    <!-- ========== End Sidebar ========== -->

    <!-- ========== Main ========== -->
    <main id="content" role="main" class="main">
      @yield('content')
    </main>
    <!-- ========== End Main ========== -->

    <!-- ========== Footer ========== -->
    @include('partials.footer')
    <!-- ========== End Footer ========== -->

    <!-- ========== Secondary Contents ========== -->
    <!-- Activity Drawer -->
    <x-drawers.activity-stream></x-drawers.activity-stream>

    @yield('sec-content')
    <!-- ========== End Secondary Contents ========== -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js') }}"></script>
    @yield('scripts')

    <!-- JS Templates -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <!-- JS Style Switcher -->
    <script src="{{ asset('assets/js/style-switcher.js') }}"></script>
  </body>
</html>
