@extends('layouts.app')

@section('title')
  My Profile | CSTA - Spambase
@endsection

@section('content')
  <!-- Content -->
  <div class="content container-fluid">
    <div class="row justify-content-lg-center">
      <div class="col-lg-10">
        <!-- Profile Cover -->
        <div class="profile-cover">
          <div class="profile-cover-img-wrapper">
            <img id="profileCoverImg" class="profile-cover-img" src="{{ asset('assets/img/1920x400/img2.jpg') }}" alt="Image Description">

            <!-- Edit Profile -->
            <div class="profile-cover-content profile-cover-uploader p-3">
              <a class="btn btn-white btn-sm" href="/account/settings">
                <i class="bi-person-plus-fill me-1"></i> Edit profile
              </a>
            </div>
            <!-- End Edit Profile -->
          </div>
        </div>
        <!-- End Profile Cover -->

        <!-- Profile Header -->
        <div class="mb-5 text-center">
          <!-- Avatar -->
          <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
            <img id="editAvatarImgModal" class="avatar-img" src="{{ asset('assets/img/uploads/users/default.jpg') }}" alt="Image Description">
          </label>
          <!-- End Avatar -->

          <h1 class="page-header-title">Mark Williams</h1>

          <!-- List -->
          <ul class="list-inline list-px-2">
            <li class="list-inline-item">
              <i class="bi-building me-1"></i>
              <span>Pixel Ltd.</span>
            </li>

            <li class="list-inline-item">
              <i class="bi-calendar-week me-1"></i>
              <span>Joined March 2013</span>
            </li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Profile Header -->

        <div class="row">
          <div class="col-lg-4">
            <!-- Card -->
            <div class="card mb-lg-5 mb-3">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Profile</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <ul class="list-unstyled list-py-2 text-dark mb-0">
                  <li class="pb-0"><span class="card-subtitle">About</span></li>
                  <li><i class="bi-person dropdown-item-icon"></i> Mark Williams</li>
                  <li><i class="bi-briefcase dropdown-item-icon"></i> No department</li>
                  <li><i class="bi-building dropdown-item-icon"></i> Pixeel Ltd.</li>

                  <li class="pb-0 pt-4"><span class="card-subtitle">Contacts</span></li>
                  <li><i class="bi-at dropdown-item-icon"></i> mark@site.com</li>
                  <li><i class="bi-phone dropdown-item-icon"></i> +1 (555) 752-01-10</li>

                  <li class="pb-0 pt-4"><span class="card-subtitle">Teams</span></li>
                  <li class="fs-6 text-body"><i class="bi-people dropdown-item-icon"></i> You are not a member of any teams</li>
                  <li class="fs-6 text-body"><i class="bi-stickies dropdown-item-icon"></i> You are not working on any projects</li>
                </ul>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-lg-8">
            <!-- Card -->
            <div class="card card-centered mb-lg-5 mb-3">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Activity stream</h4>

                <!-- Dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="contentActivityStreamDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-three-dots-vertical"></i>
                  </button>

                  <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="contentActivityStreamDropdown">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="bi-share-fill dropdown-item-icon"></i> Share connections
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body card-body-height">
                <img class="avatar avatar-xxl mb-3" src="{{ asset('assets/svg/illustrations/oc-error.svg') }}" alt="Image Description"
                  data-hs-theme-appearance="default">
                <img class="avatar avatar-xxl mb-3" src="{{ asset('assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description"
                  data-hs-theme-appearance="dark">
                <p class="card-text">No data to show</p>
                <a class="btn btn-white btn-sm" href="#">Start your Activity</a>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content -->
@endsection

@section('scripts')
  <script src="{{ asset('assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-file-attach/dist/hs-file-attach.min.js') }}"></script>

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


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        new HSStickyBlock('.js-sticky-block', {
          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')
      }
    })()
  </script>
@endsection
