<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="editUserModalLabel">Edit user</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <!-- Nav Scroller -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal">
          <span class="hs-nav-scroller-arrow-prev" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="#">
              <i class="bi-chevron-left"></i>
            </a>
          </span>

          <span class="hs-nav-scroller-arrow-next" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="#">
              <i class="bi-chevron-right"></i>
            </a>
          </span>

          <!-- Nav -->
          <ul class="js-tabs-to-dropdown nav nav-segment nav-fill mb-5" id="editUserModalTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab"
                aria-selected="true">
                <i class="bi-person me-1"></i> Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#billing-address" id="billing-address-tab" data-bs-toggle="tab" data-bs-target="#billing-address"
                role="tab" aria-selected="false">
                <i class="bi-building me-1"></i> Billing address
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#change-password" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password"
                role="tab" aria-selected="false">
                <i class="bi-shield-lock me-1"></i> Change password
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#notifications" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications" role="tab"
                aria-selected="false">
                <i class="bi-bell me-1"></i> Notifications
              </a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->

        <!-- Tab Content -->
        <div class="tab-content" id="editUserModalTabContent">
          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form>
              <!-- Profile Cover -->
              <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                  <img id="editProfileCoverImgModal" class="profile-cover-img" src="{{ asset('assets/img/1920x400/img1.jpg') }}"
                    alt="Image Description">
                </div>
              </div>
              <!-- End Profile Cover -->

              <!-- Avatar -->
              <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar mb-5" for="editAvatarUploaderModal">
                <img id="editAvatarImgModal" class="avatar-img" src="{{ asset('assets/img/160x160/img9.jpg') }}" alt="Image Description">

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

              <!-- Form -->
              <div class="row mb-4">
                <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label form-label">Full name <i class="tio-help-outlined text-body ms-1"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>

                <div class="col-sm-9">
                  <div class="input-group input-group-sm-vertical">
                    <input type="text" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel" placeholder="Your first name"
                      aria-label="Your first name" value="Ella">
                    <input type="text" class="form-control" name="editLastNameModal" id="editLastNameModalLabel" placeholder="Your last name"
                      aria-label="Your last name" value="Lauda">
                  </div>
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editEmailModalLabel" class="col-sm-3 col-form-label form-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="editEmailModal" id="editEmailModalLabel" placeholder="Email"
                    aria-label="Email" value="ella@site.com">
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editPhoneLabel" class="col-sm-3 col-form-label form-label">Phone <span
                    class="form-label-secondary">(Optional)</span></label>

                <div class="col-sm-9">
                  <div class="input-group input-group-sm-vertical">
                    <input type="text" class="js-masked-input form-control" name="phone" id="editPhoneLabel" placeholder="+x(xxx)xxx-xx-xx"
                      aria-label="+x(xxx)xxx-xx-xx" value="1(609)972-22-22"
                      data-hs-mask-options='{
                                 "template": "+0(000)000-00-00"
                               }'>

                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select" autocomplete="off" name="editPhoneSelect"
                        data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                        <option value="Mobile" selected>Mobile</option>
                        <option value="Home">Home</option>
                        <option value="Work">Work</option>
                        <option value="Fax">Fax</option>
                        <option value="Direct">Direct</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label form-label">Organization</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="editOrganizationModal" id="editOrganizationModalLabel"
                    placeholder="Your organization" aria-label="Your organization" value="Htmlstream">
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editDepartmentModalLabel" class="col-sm-3 col-form-label form-label">Department</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="editDepartmentModal" id="editDepartmentModalLabel"
                    placeholder="Your department" aria-label="Your department">
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label class="col-sm-3 col-form-label form-label">Account type</label>

                <div class="col-sm-9">
                  <div class="input-group input-group-sm-vertical">
                    <!-- Radio Check -->
                    <label class="form-control" for="editUserModalAccountTypeModalRadio1">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadio"
                          id="editUserModalAccountTypeModalRadio1" checked>
                        <span class="form-check-label">Individual</span>
                      </span>
                    </label>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <label class="form-control" for="editUserModalAccountTypeModalRadio2">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadio"
                          id="editUserModalAccountTypeModalRadio2">
                        <span class="form-check-label">Company</span>
                      </span>
                    </label>
                    <!-- End Radio Check -->
                  </div>
                </div>
              </div>
              <!-- End Form -->

              <div class="d-flex justify-content-end">
                <div class="d-flex gap-3">
                  <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="billing-address-tab">
            <form>
              <!-- Form -->
              <div class="row mb-4">
                <label for="editLocationModalLabel" class="col-sm-3 col-form-label form-label">Location</label>

                <div class="col-sm-9">
                  <!-- Select -->
                  <div class="tom-select-custom mb-4">
                    <select class="js-select form-select" id="editLocationModalLabel" autocomplete="off"
                      data-hs-tom-select-options='{
                               "placeholder": "Select country"
                             }'>
                      <option value="GB" selected
                        data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>
                        United Kingdom
                      </option>
                    </select>
                  </div>
                  <!-- End Select -->

                  <div class="mb-4">
                    <input type="text" class="form-control" name="editCityModal" id="editCityModalLabel" placeholder="City" aria-label="City"
                      value="London">
                  </div>

                  <input type="text" class="form-control" name="editStateModal" id="editStateModalLabel" placeholder="State"
                    aria-label="State">
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Address line 1</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="addressLine1" id="editAddressLine1Label" placeholder="Your address"
                    aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editAddressLine2ModalLabel" class="col-sm-3 col-form-label form-label">Address line 2 <span
                    class="form-label-secondary">(Optional)</span></label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="editAddressLine2Modal" id="editAddressLine2ModalLabel"
                    placeholder="Your address" aria-label="Your address">
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row">
                <label for="editZipCodeLabel" class="col-sm-3 col-form-label form-label">Zip code <i class="bi-question-circle text-body ms-1"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="You can find your code in a postal address."></i></label>

                <div class="col-sm-9">
                  <input type="text" class="js-input-mask form-control" name="zipCode" id="editZipCodeLabel" placeholder="Your zip code"
                    aria-label="Your zip code" value="KW5 8NW"
                    data-hs-mask-options='{
                             "mask": "AA0 0AA"
                           }'>
                </div>
              </div>
              <!-- End Form -->

              <hr>

              <div class="d-grid gap-3">
                <!-- Form Switch -->
                <label class="row form-check form-switch" for="editUserModalBillingPreferencesSwitch1">
                  <span class="col-8 col-sm-9 ms-0">
                    <span class="d-block text-dark mb-1">Default billing address</span>
                    <span class="d-block fs-5 text-muted">Set as default billing address</span>
                  </span>
                  <span class="col-4 col-sm-3 text-end">
                    <input type="checkbox" class="form-check-input" id="editUserModalBillingPreferencesSwitch1" checked>
                  </span>
                </label>
                <!-- End Form Switch -->

                <!-- Form Switch -->
                <label class="row form-check form-switch" for="editUserModalBillingPreferencesSwitch2">
                  <span class="col-8 col-sm-9 ms-0">
                    <span class="d-block text-dark mb-1">See info about people who view my profile</span>
                    <span class="d-block fs-5 text-muted"><a class="link" href="#">More about viewer info</a>.</span>
                  </span>
                  <span class="col-4 col-sm-3 text-end">
                    <input type="checkbox" class="form-check-input" id="editUserModalBillingPreferencesSwitch2">
                  </span>
                </label>
                <!-- End Form Switch -->
              </div>

              <div class="d-flex justify-content-end mt-4">
                <div class="d-flex gap-3">
                  <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
            <form>
              <!-- Form -->
              <div class="row mb-4">
                <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label form-label">Current
                  password</label>

                <div class="col-sm-9">
                  <!-- Input Group -->
                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control" name="currentPassword" id="editUserModalCurrentPasswordLabel"
                      placeholder="Enter current password" aria-label="Enter current password"
                      data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalTarget",
                                 "defaultClass": "bi-eye-slash",
                                 "showClass": "bi-eye",
                                 "classChangeTarget": "#editUserModalChangePassModalIcon"
                               }'>
                    <a id="editUserModalChangePassModalTarget" class="input-group-append input-group-text" href="javascript:;">
                      <i id="editUserModalChangePassModalIcon" class="bi-eye"></i>
                    </a>
                  </div>
                  <!-- End Input Group -->
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editUserModalNewPassword" class="col-sm-3 col-form-label form-label">New password</label>

                <div class="col-sm-9">
                  <input type="password" class="js-toggle-password form-control" name="editUserModalNewPassword" id="editUserModalNewPassword"
                    placeholder="Enter new password" aria-label="Enter new password"
                    data-hs-toggle-password-options='{
                               "target": "#editUserModalChangePassModalCheckbox"
                             }'>
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editUserModalConfirmNewPasswordLabel" class="col-sm-3 col-form-label form-label">Confirm new
                  password</label>

                <div class="col-sm-9">
                  <input type="password" class="js-toggle-password form-control" name="confirmNewPassword"
                    id="editUserModalConfirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password"
                    data-hs-toggle-password-options='{
                               "target": "#editUserModalChangePassModalCheckbox"
                             }'>
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <div class="col-sm-9 offset-sm-3">
                  <!-- Form Check -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalChangePassModalCheckbox">
                    <label class="form-check-label" for="editUserModalChangePassModalCheckbox">
                      Show password
                    </label>
                  </div>
                  <!-- End Form Check -->
                </div>
              </div>
              <!-- End Form -->

              <div class="d-flex justify-content-end">
                <div class="d-flex gap-3">
                  <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
            <!-- Table -->
            <div class="table-responsive datatable-custom">
              <table class="table-thead-bordered table-nowrap table-align-middle table-first-col-px-0 table">
                <thead class="thead-light">
                  <tr>
                    <th>Type</th>
                    <th class="text-center">
                      <div class="mb-1">
                        <img class="avatar avatar-xs" src="./assets/svg/illustrations/oc-email-at.svg" alt="Image Description"
                          data-hs-theme-appearance="default">
                        <img class="avatar avatar-xs" src="./assets/svg/illustrations-light/oc-email-at.svg" alt="Image Description"
                          data-hs-theme-appearance="dark">
                      </div>
                      Email
                    </th>
                    <th class="text-center">
                      <div class="mb-1">
                        <img class="avatar avatar-xs" src="./assets/svg/illustrations/oc-globe.svg" alt="Image Description"
                          data-hs-theme-appearance="default">
                        <img class="avatar avatar-xs" src="./assets/svg/illustrations-light/oc-globe.svg" alt="Image Description"
                          data-hs-theme-appearance="dark">
                      </div>
                      Browser
                    </th>
                    <th class="text-center">
                      <div class="mb-1">
                        <img class="avatar avatar-xs" src="./assets/svg/illustrations/oc-phone.svg" alt="Image Description"
                          data-hs-theme-appearance="default">
                        <img class="avatar avatar-xs" src="./assets/svg/illustrations-light/oc-phone.svg" alt="Image Description"
                          data-hs-theme-appearance="dark">
                      </div>
                      App
                    </th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>New for you</td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox1">
                        <label class="form-check-label" for="editUserModalAlertsCheckbox1"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox2">
                        <label class="form-check-label" for="editUserModalAlertsCheckbox2"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox3">
                        <label class="form-check-label" for="editUserModalAlertsCheckbox3"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Account activity <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Get important notifications about you or activity you've missed"></i>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox4">
                        <label class="form-check-label" for="editUserModalAlertsCheckbox4"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox5" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox5"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox6" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox6"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>A new browser used to sign in</td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox7" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox7"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox9" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox9"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>A new device is linked</td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox10">
                        <label class="form-check-label" for="editUserModalAlertsCheckbox10"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox11" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox11"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                        <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>A new device connected <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Email me when a new device connected"></i></td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                        <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked>
                        <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- End Table -->

            <hr>

            <div class="row">
              <div class="col-sm">
                <!-- Form -->
                <div class="mb-4">
                  <span class="d-block mb-2">When should we send notifications?</span>

                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="js-select form-select" autocomplete="off"
                      data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "width": "15rem",
                                  "hideSearch": true
                                }'>
                      <option value="whenToSendNotification1">Always</option>
                      <option value="whenToSendNotification2">Only when I'm online</option>
                    </select>
                  </div>
                  <!-- End Select -->
                </div>
                <!-- End Form -->
              </div>

              <div class="col-sm">
                <!-- Form -->
                <div class="mb-4">
                  <span class="d-block mb-2">Send a daily summary ("Daily Digest") of task activity.</span>

                  <div class="row">
                    <div class="col-auto mb-2">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" autocomplete="off"
                          data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                          <option value="EveryDay">Every day</option>
                          <option value="weekdays" selected>Weekdays</option>
                          <option value="Never">Never</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-auto mb-2">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select form-select" autocomplete="off"
                          data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "11rem",
                                    "dropup": true
                                  }'>
                          <option value="0">at 12 AM</option>
                          <option value="1">at 1 AM</option>
                          <option value="2">at 2 AM</option>
                          <option value="3">at 3 AM</option>
                          <option value="4">at 4 AM</option>
                          <option value="5">at 5 AM</option>
                          <option value="6">at 6 AM</option>
                          <option value="7">at 7 AM</option>
                          <option value="8">at 8 AM</option>
                          <option value="9" selected>at 9 AM</option>
                          <option value="10">at 10 AM</option>
                          <option value="11">at 11 AM</option>
                          <option value="12">at 12 PM</option>
                          <option value="13">at 1 PM</option>
                          <option value="14">at 2 PM</option>
                          <option value="15">at 3 PM</option>
                          <option value="16">at 4 PM</option>
                          <option value="17">at 5 PM</option>
                          <option value="18">at 6 PM</option>
                          <option value="19">at 7 PM</option>
                          <option value="20">at 8 PM</option>
                          <option value="21">at 9 PM</option>
                          <option value="22">at 10 PM</option>
                          <option value="23">at 11 PM</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <p>In order to cut back on noise, email notifications are grouped together and only sent when you're idle or
              offline.</p>

            <div class="d-flex justify-content-end">
              <div class="d-flex gap-3">
                <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Tab Content -->
      </div>
      <!-- End Body -->
    </div>
  </div>
</div>
