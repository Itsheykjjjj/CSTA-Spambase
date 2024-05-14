@extends('layouts.guest')

@section('title')
  Login your Account | CSTA - Spambase
@endsection

@section('content')
  <div class="position-fixed bg-img-start end-0 start-0 top-0"
    style="height: 32rem; background-image: url({{ asset('assets/svg/components/card-6.svg') }});">
    <!-- Shape -->
    <div class="shape shape-bottom zi-1">
      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
        <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
      </svg>
    </div>
    <!-- End Shape -->
  </div>

  <!-- Content -->
  <div class="py-sm-7 container py-5" style="margin-top: 4.5rem">
    <div class="d-flex justify-content-center mb-4">
      <img class="zi-2" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Image Description" style="width: 14rem;">
    </div>

    <div class="mx-auto" style="max-width: 30rem">
      <!-- Card -->
      <div class="card card-lg mb-5">
        <div class="card-body">
          <!-- Form -->
          <form action="#" method="post" id="frmLogin" novalidate>
            <div class="text-center">
              <div class="mb-7">
                <h1 class="display-5">Welcome!</h1>
                <p>Please login your username & password.</p>
              </div>
            </div>

            <!-- Form -->
            <div class="mb-4">
              <label class="form-label" for="txtUsername">Username</label>
              <input type="text" class="form-control form-control-lg" name="user" id="txtUsername" placeholder="Enter your Username"
                aria-label="Enter your Username" required />
              <span class="invalid-feedback" id="user_err"></span>
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="mb-4">
              <label class="form-label w-100" for="txtPassword">
                <span class="d-flex justify-content-between align-items-center">
                  <span>Password</span>
                  <a class="form-label-link mb-0" href="#" tabindex="-1">Forgot Password?</a>
                </span>
              </label>

              <div class="input-group">
                <input type="password" class="js-toggle-password form-control form-control-lg" name="pass" id="txtPassword"
                  placeholder="Enter your Password"
                  data-hs-toggle-password-options='{
                    "target": "#changePassTarget",
                    "defaultClass": "bi-eye-slash",
                    "showClass": "bi-eye",
                    "classChangeTarget": "#changePassIcon"
                  }' />
                <a id="changePassTarget" class="input-group-text">
                  <i id="changePassIcon" class="bi-eye"></i>
                </a>
                <span class="invalid-feedback" id="pass_err"></span>
              </div>
            </div>
            <!-- End Form -->

            <!-- Form Check -->
            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" value="" id="termsCheckbox">
              <label class="form-check-label" for="termsCheckbox">
                Remember me
              </label>
            </div>
            <!-- End Form Check -->

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg mt-3" id="btnLogin">
                <span id="lblLogin">Login</span>
              </button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
      <!-- End Card -->

      <!-- Footer -->
      <div class="position-relative zi-1 text-center">
        <small class="text-cap text-body mb-4">A Capstone Project by Achondo, Bunag, and Quimora</small>
      </div>
      <!-- End Footer -->
    </div>
  </div>
  <!-- End Content -->
@endsection

@section('scripts')
  <script src="{{ asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function() {
        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')
      }
    })()
  </script>
@endsection
