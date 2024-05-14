@extends('layouts.app')

@section('title')
  Account Settings | CSTA - Spambase
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}">
@endsection

@section('content')
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-sm-0 mb-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Home</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Account</a></li>
              <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
          </nav>

          <h1 class="page-header-title">Settings</h1>
        </div>
        <!-- End Col -->

        <div class="col-sm-auto">
          <a class="btn btn-primary" href="/account/profile">
            <i class="bi-person-fill me-1"></i> My profile
          </a>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <div class="row">
      <div class="col-lg-3">
        <!-- Navbar -->
        <div class="navbar-expand-lg navbar-vertical mb-lg-5 mb-3">
          <!-- Navbar Toggle -->
          <div class="d-grid">
            <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu"
              aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
              <span class="d-flex justify-content-between align-items-center">
                <span class="text-dark">Menu</span>

                <span class="navbar-toggler-default">
                  <i class="bi-list"></i>
                </span>

                <span class="navbar-toggler-toggled">
                  <i class="bi-x"></i>
                </span>
              </span>
            </button>
          </div>
          <!-- End Navbar Toggle -->

          <!-- Navbar Collapse -->
          <div id="navbarVerticalNavMenu" class="navbar-collapse collapse">
            <ul id="navbarSettings" class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical"
              data-hs-sticky-block-options='{
                "parentSelector": "#navbarVerticalNavMenu",
                "targetSelector": "#header",
                "breakpoint": "lg",
                "startPoint": "#navbarVerticalNavMenu",
                "endPoint": "#stickyBlockEndPoint",
                "stickyOffsetTop": 20
              }'>
              <li class="nav-item">
                <a class="nav-link active" href="#basicInformation">
                  <i class="bi-person nav-icon"></i> Basic information
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#emailSection">
                  <i class="bi-at nav-icon"></i> Email
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#passwordSection">
                  <i class="bi-key nav-icon"></i> Password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#preferencesSection">
                  <i class="bi-gear nav-icon"></i> Preferences
                </a>
              </li>
            </ul>
          </div>
          <!-- End Navbar Collapse -->
        </div>
        <!-- End Navbar -->
      </div>

      <div class="col-lg-9">
        <div class="d-grid gap-lg-5 gap-3">
          <!-- Card -->
          <div class="card" id="basicInformation">
            <div class="card-header">
              <h2 class="card-title h4">Basic information</h2>
            </div>

            <!-- Profile Cover -->
            <div class="profile-cover">
              <div class="profile-cover-img-wrapper">
                <img id="profileCoverImg" class="profile-cover-img" src="{{ asset('assets/img/1920x400/img2.jpg') }}" alt="Image Description">
              </div>
            </div>
            <!-- End Profile Cover -->

            <!-- Avatar -->
            <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
              <img id="editAvatarImgModal" class="avatar-img" src="{{ asset('assets/img/160x160/img6.jpg') }}" alt="Image Description">

              <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal"
                data-hs-file-attach-options='{
                            "textTarget": "#editAvatarImgModal",
                            "mode": "image",
                            "targetAttr": "src",
                            "allowTypes": [".png", ".jpeg", ".jpg"]
                         }'>

              <span class="avatar-uploader-trigger">
                <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
              </span>
            </label>
            <!-- End Avatar -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <form>
                <!-- Form -->
                <div class="row mb-4">
                  <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full name</label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Your first name"
                        aria-label="Your first name" value="Mark">
                      <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Your last name"
                        aria-label="Your last name" value="Williams">
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="emailLabel" placeholder="Email" aria-label="Email"
                      value="mark@site.com">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone <span
                      class="form-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx"
                      aria-label="+x(xxx)xxx-xx-xx" value="+1 (609) 972-22-22"
                      data-hs-mask-options='{
                               "mask": "+0(000)000-00-00"
                             }'>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="organizationLabel" class="col-sm-3 col-form-label form-label">Organization</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="Your organization"
                      aria-label="Your organization" value="Htmlstream">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="departmentLabel" class="col-sm-3 col-form-label form-label">Department</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="department" id="departmentLabel" placeholder="Your department"
                      aria-label="Your department">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div id="accountType" class="row mb-4">
                  <label class="col-sm-3 col-form-label form-label">Account type</label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <!-- Radio Check -->
                      <label class="form-control" for="userAccountTypeRadio1">
                        <span class="form-check">
                          <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio1" checked>
                          <span class="form-check-label">Individual</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="userAccountTypeRadio2">
                        <span class="form-check">
                          <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio2">
                          <span class="form-check-label">Company</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="addressLine1Label" class="col-sm-3 col-form-label form-label">Address line 1</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="Your address"
                      aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                  </div>
                </div>
                <!-- End Form -->

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
              <!-- End Form -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div id="emailSection" class="card">
            <div class="card-header">
              <h4 class="card-title">Email</h4>
            </div>

            <!-- Body -->
            <div class="card-body">
              <p>Your current email address is <span class="fw-semibold">mark@site.com</span></p>

              <!-- Form -->
              <form>
                <!-- Form -->
                <div class="row mb-4">
                  <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">New email address</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="newEmail" id="newEmailLabel" placeholder="Enter new email address"
                      aria-label="Enter new email address">
                  </div>
                </div>
                <!-- End Form -->

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
              <!-- End Form -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div id="passwordSection" class="card">
            <div class="card-header">
              <h4 class="card-title">Change your password</h4>
            </div>

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <form id="changePasswordForm">
                <!-- Form -->
                <div class="row mb-4">
                  <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Current password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel"
                      placeholder="Enter current password" aria-label="Enter current password">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="newPassword" class="col-sm-3 col-form-label form-label">New password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Enter new password"
                      aria-label="Enter new password">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label form-label">Confirm new
                    password</label>

                  <div class="col-sm-9">
                    <div class="mb-3">
                      <input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPasswordLabel"
                        placeholder="Confirm your new password" aria-label="Confirm your new password">
                    </div>

                    <h5>Password requirements:</h5>

                    <p class="fs-6 mb-2">Ensure that these requirements are met:</p>

                    <ul class="fs-6">
                      <li>Minimum 8 characters long - the more, the better</li>
                      <li>At least one lowercase character</li>
                      <li>At least one uppercase character</li>
                      <li>At least one number, symbol, or whitespace character</li>
                    </ul>
                  </div>
                </div>
                <!-- End Form -->

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
              <!-- End Form -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div id="preferencesSection" class="card">
            <div class="card-header">
              <h4 class="card-title">Preferences</h4>
            </div>

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <form>
                <!-- Form -->
                <div class="row mb-4">
                  <label for="systemTheme" class="col-sm-3 col-form-label form-label">System Theme</label>

                  <div class="col-sm-9">
                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select" id="systemTheme" autocomplete="off"
                        data-hs-tom-select-options='{
                          "placeholder": "Select a person...",
                          "hideSearch": true
                        }'>
                        <option value=""></option>
                        <option value="language2" selected
                          data-option-template='<span class="d-flex align-items-center"><i class="bi-brightness-high me-2"></i><span>Default (light mode)</span></span>'>
                          Default (Light Mode)
                        </option>
                        <option value="language3"
                          data-option-template='<span class="d-flex align-items-center"><i class="bi-moon me-2"></i><span>Dark Mode</span></span>'>
                          Dark Mode
                        </option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Form -->
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
              <!-- End Form -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>
      </div>
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content -->
@endsection

@section('scripts')
  <script src="{{ asset('assets/vendor/hs-file-attach/dist/hs-file-attach.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-scrollspy/dist/hs-scrollspy.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imask/dist/imask.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.min.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function() {


        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')


        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        new HSStickyBlock('.js-sticky-block', {
          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })


        // SCROLLSPY
        // =======================================================
        new bootstrap.ScrollSpy(document.body, {
          target: '#navbarSettings',
          offset: 100
        })

        new HSScrollspy('#navbarVerticalNavMenu', {
          breakpoint: 'lg',
          scrollOffset: -20
        })
      }
    })()
  </script>
@endsection
