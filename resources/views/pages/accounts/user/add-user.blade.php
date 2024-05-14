@extends('layouts.app')

@section('title')
  Add Users | CSTA - Spambase
@endsection

@section('styles')
  <link href="{{ asset('assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Step Form -->
    <form action="/users" method="post" id="frmAddUser" class="js-step-form py-md-5"enctype="multipart/form-data" novalidate
      data-hs-step-form-options='{
        "progressSelector": "#addUserStepFormProgress",
        "stepsSelector": "#addUserStepFormContent",
        "endSelector": "#addUserFinishBtn",
        "isValidate": false
      }'>
      @csrf
      <div class="row justify-content-lg-center">
        <div class="col-lg-8">
          <!-- Step -->
          <ul id="addUserStepFormProgress" class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-md-5 mb-3">
            <li class="step-item">
              <div class="step-content-wrapper"
                data-hs-step-form-next-options='{
                  "targetSelector": "#addUserStepProfile"
                }'>
                <span class="step-icon step-icon-soft-dark">1</span>
                <div class="step-content">
                  <span class="step-title">Profile</span>
                </div>
              </div>
            </li>

            <li class="step-item">
              <div class="step-content-wrapper"
                data-hs-step-form-next-options='{
                  "targetSelector": "#addUserStepAccount"
                }'>
                <span class="step-icon step-icon-soft-dark">2</span>
                <div class="step-content">
                  <span class="step-title">Account</span>
                </div>
              </div>
            </li>

            <li class="step-item">
              <div class="step-content-wrapper"
                data-hs-step-form-next-options='{
                  "targetSelector": "#addUserStepConfirmation"
                }'>
                <span class="step-icon step-icon-soft-dark">3</span>
                <div class="step-content">
                  <span class="step-title">Confirmation</span>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Step -->

          <!-- Content Step Form -->
          <div id="addUserStepFormContent">
            <!-- Profile -->
            <div id="addUserStepProfile" class="card card-lg active">
              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="row mb-4">
                  <label class="col-sm-3 col-form-label form-label">Avatar</label>
                  <div class="col-sm-9">
                    <div class="d-flex align-items-center">
                      <!-- Avatar -->
                      <label class="avatar avatar-xl avatar-circle avatar-uploader me-5" for="avatarUploader">
                        <img id="avatarImg" class="avatar-img" src="{{ asset('assets/img/uploads/users/default.jpg') }}" alt="Image Description" />

                        <input type="file" class="js-file-attach avatar-uploader-input" name="avatar" id="avatarUploader" accept=".jpg, .png, .jpeg"
                          data-hs-file-attach-options='{
                             "textTarget": "#avatarImg",
                             "mode": "image",
                             "targetAttr": "src",
                             "resetTarget": ".js-file-attach-reset-img",
                             "resetImg": "{{ asset('assets/img/uploads/users/default.jpg') }}",
                             "allowTypes": [".png", ".jpeg", ".jpg"]
                          }' />

                        <span class="avatar-uploader-trigger">
                          <i class="bi-pencil avatar-uploader-icon shadow-sm"></i>
                        </span>
                      </label>
                      <!-- End Avatar -->

                      <button type="button" id="btnRemoveImg" class="js-file-attach-reset-img btn btn-outline-danger">
                        Remove
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Full Name -->
                <div class="row mb-4">
                  <label for="txtFname" class="col-sm-3 col-form-label form-label">Full Name</label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="form-control" name="fname" id="txtFname" placeholder="First Name" required />
                      <input type="text" class="form-control" name="mname" id="txtMname" placeholder="Middle Name" />
                      <input type="text" class="form-control" name="lname" id="txtLname" placeholder="Last Name" required />
                    </div>
                    @error('fname')
                      <span class="invalid-feedback"></span>
                    @enderror
                  </div>
                </div>
                <!-- End Full Name -->

                <!-- Role -->
                <div class="row mb-4">
                  <label for="selRole" class="col-sm-3 col-form-label form-label">Role</label>

                  <div class="col-sm-9">
                    <div class="tom-select-custom">
                      <select class="js-select form-select" id="selRole" name="role"
                        data-hs-tom-select-options='{
                              "placeholder": "Select a Role",
                              "hideSearch": true
                            }'>
                        <option value=""></option>
                        @foreach ($roles as $role)
                          <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <!-- End Role -->

                <!-- Department -->
                <div class="row mb-4">
                  <label for="selDept" class="col-sm-3 col-form-label form-label">Department</label>

                  <div class="col-sm-9">
                    <div class="tom-select-custom">
                      <select class="js-select form-select" id="selDept" name="dept"
                        data-hs-tom-select-options='{
                              "placeholder": "Select a Department",
                              "hideSearch": true
                            }'>
                        <option value=""></option>
                        @foreach ($depts as $dept)
                          <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <!-- End Department -->

                <!-- Email -->
                <div class="row mb-4">
                  <label for="txtEmail" class="col-sm-3 col-form-label form-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="txtEmail" placeholder="sample@site.com"
                      aria-label="sample@site.com" />
                  </div>
                </div>
                <!-- End Email -->

                <!-- Phone -->
                <div class="js-add-field row mb-4"
                  data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
                  <label for="txtPhone" class="col-sm-3 col-form-label form-label">Phone</label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="js-input-mask form-control" name="phone" id="txtPhone" placeholder="xxxx-xxx-xxxx"
                        aria-label="xxxx-xxx-xxxx"
                        data-hs-mask-options='{
                              "mask": "0000-000-0000"
                            }' />
                    </div>
                  </div>
                </div>
                <!-- End Phone -->
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <div class="card-footer d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-primary"
                  data-hs-step-form-next-options='{
                        "targetSelector": "#addUserStepAccount"
                      }'>
                  Next <i class="bi-chevron-right"></i>
                </button>
              </div>
              <!-- End Footer -->
            </div>
            <!-- End Profile -->

            <!-- Account -->
            <div id="addUserStepAccount" class="card card-lg" style="display: none">
              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="row mb-4">
                  <label for="txtUsername" class="col-sm-3 col-form-label form-label">Username</label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="form-control" name="user" id="txtUsername" placeholder="Enter Username"
                        aria-label="Enter Username" required />
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="txtPassword" class="col-sm-3 col-form-label form-label">Password</label>

                  <div class="col-sm-9">
                    <input type="password" class="js-toggle-password form-control" name="pass" id="txtPassword" placeholder="Enter Password"
                      aria-label="Enter Password"
                      data-hs-toggle-password-options='{
                            "target": "#editUserModalChangePassModalCheckbox"
                          }' />
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="txtConfirmPassword" class="col-sm-3 col-form-label form-label">Confirm Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="js-toggle-password form-control" name="confirm" id="txtConfirmPassword"
                      placeholder="Confirm password" aria-label="Confirm password"
                      data-hs-toggle-password-options='{
                            "target": "#editUserModalChangePassModalCheckbox"
                          }' />
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <div class="col-sm-9 offset-sm-3">
                    <!-- Form Check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalChangePassModalCheckbox" />
                      <label class="form-check-label" for="editUserModalChangePassModalCheckbox"> Show password </label>
                    </div>
                    <!-- End Form Check -->
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <div class="card-footer d-flex align-items-center">
                <button type="button" class="btn btn-ghost-secondary"
                  data-hs-step-form-prev-options='{
                        "targetSelector": "#addUserStepProfile"
                      }'>
                  <i class="bi-chevron-left"></i> Previous step
                </button>

                <div class="ms-auto">
                  <button type="submit" class="btn btn-primary">
                    Next <i class="bi-chevron-right"></i>
                  </button>
                </div>
              </div>
              <!-- End Footer -->
            </div>
            <!-- End Account -->

            <!-- Confirmation -->
            <div id="addUserStepConfirmation" class="card card-lg" style="display: none">
              <!-- Profile Cover -->
              <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                  <img class="profile-cover-img" src="../assets/img/1920x400/img1.jpg" alt="Image Description" />
                </div>
              </div>
              <!-- End Profile Cover -->

              <!-- Avatar -->
              <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                <img class="avatar-img" id="imgPreview" src="../assets/img/users/default.jpg" alt="Image Description" />
              </div>
              <!-- End Avatar -->

              <!-- Body -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-sm-6 text-sm-end">Full name:</dt>
                  <dd class="col-sm-6" id="ddFullname">-</dd>

                  <dt class="col-sm-6 text-sm-end">Role:</dt>
                  <dd class="col-sm-6" id="ddRole">-</dd>

                  <dt class="col-sm-6 text-sm-end">Department:</dt>
                  <dd class="col-sm-6" id="ddDept">-</dd>

                  <dt class="col-sm-6 text-sm-end">Email:</dt>
                  <dd class="col-sm-6" id="ddEmail">-</dd>

                  <dt class="col-sm-6 text-sm-end">Phone:</dt>
                  <dd class="col-sm-6" id="ddPhone">-</dd>

                  <dt class="col-sm-6 text-sm-end">Username:</dt>
                  <dd class="col-sm-6" id="ddUsername">-</dd>

                  <dt class="col-sm-6 text-sm-end">Password:</dt>
                  <dd class="col-sm-6" id="ddPassword">-</dd>
                </dl>
                <!-- End Row -->
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <div class="card-footer d-sm-flex align-items-sm-center">
                <button type="button" class="btn btn-ghost-secondary mb-sm-0 mb-2" id="btnNextConfirmation"
                  data-hs-step-form-prev-options='{
                        "targetSelector": "#addUserStepAccount"
                      }'>
                  <i class="bi-chevron-left"></i> Previous step
                </button>

                <div class="ms-auto">
                  <a type="button" class="btn btn-white me-2" href="users-overview.php">Cancel</a>
                  <button type="submit" class="btn btn-primary">Add user</button>
                </div>
              </div>
              <!-- End Footer -->
            </div>
            <!-- End Confirmation -->
          </div>
          <!-- End Content Step Form -->
        </div>
      </div>
      <!-- End Row -->
    </form>
    <!-- End Step Form -->
  </div>
  <!-- End Content -->
@endsection

@section('scripts')
  <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-file-attach/dist/hs-file-attach.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-step-form/dist/hs-step-form.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-add-field/dist/hs-add-field.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imask/dist/imask.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.min.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function() {
        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav(".js-navbar-vertical-aside").init();

        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch(".js-form-search");

        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init();

        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach(".js-file-attach");

        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm(".js-step-form", {
          finish: () => {
            document.getElementById("addUserStepFormProgress").style.display = "none";
            document.getElementById("addUserStepProfile").style.display = "none";
            document.getElementById("addUserStepAccount").style.display = "none";
            document.getElementById("addUserStepConfirmation").style.display = "none";
            document.getElementById("successMessageContent").style.display = "block";
            scrollToTop("#header");
            const formContainer = document.getElementById("formContainer");
          },
          onNextStep: function() {
            scrollToTop();
          },
          onPrevStep: function() {
            scrollToTop();
          },
        });

        function scrollToTop(el = ".js-step-form") {
          el = document.querySelector(el);
          window.scrollTo({
            top: el.getBoundingClientRect().top + window.scrollY - 30,
            left: 0,
            behavior: "smooth",
          });
        }

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init(".js-select", {
          render: {
            option: function(data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`;
            },
            item: function(data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`;
            },
          },
        });

        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init(".js-input-mask");

        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword(".js-toggle-password");
      };
    })();
  </script>
@endsection
