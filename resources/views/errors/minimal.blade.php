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

    <!-- CSS Templates -->
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="preload" data-hs-appearance="default" as="style">
    <link href="{{ asset('assets/css/theme-dark.min.css') }}" rel="preload" data-hs-appearance="dark" as="style">

    <!-- JS Config and Appearance -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/hs.theme-appearance.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}"></script>
  </head>
  <body>
    <!-- ========== Main ========== -->
    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="container">
        <span class="position-absolute end-0 start-0 top-0 py-4">
          <img class="avatar avatar-xl avatar-4x3 avatar-centered" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Image Description"
            data-hs-theme-appearance="default">
          <img class="avatar avatar-xl avatar-4x3 avatar-centered" src="{{ asset('assets/svg/logos-light/logo.svg') }}" alt="Image Description"
            data-hs-theme-appearance="dark">
        </span>

        <div class="footer-height-offset d-flex justify-content-center align-items-center flex-column">
          <div class="row justify-content-center align-items-sm-center w-100">
            <div class="col-9 col-sm-6 col-lg-4">
              <div class="text-sm-end me-sm-4 mb-sm-0 mb-5 text-center">
                <img class="img-fluid" src="{{ asset('assets/svg/illustrations/oc-thinking.svg') }}" alt="Image Description"
                  data-hs-theme-appearance="default">
                <img class="img-fluid" src="{{ asset('assets/svg/illustrations-light/oc-thinking.svg') }}" alt="Image Description"
                  data-hs-theme-appearance="dark">
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 text-sm-start text-center">
              <h1 class="display-1 mb-0">@yield('code')</h1>
                <p class="lead">@yield('message')</p>
                <a class="btn btn-primary" href="{{ url()->previous() }}">Go back to dashboard</a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>
      <!-- End Content -->

      <!-- Footer -->
      <div class="footer text-center">
        <ul class="list-inline list-separator">
          <li class="list-inline-item">
            <a class="list-separator-link" href="#">Get Help</a>
          </li>

          <li class="list-inline-item">
            <a class="list-separator-link" href="#">Contact Support</a>
          </li>

          <li class="list-inline-item">
            <a class="list-separator-link" href="#">Report a Problem</a>
          </li>
        </ul>
      </div>
      <!-- End Footer -->
    </main>
    <!-- ========== End Main ========== -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Templates -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
  </body>
</html>
