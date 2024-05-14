<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white">
  <div class="navbar-vertical-container">
    <div class="navbar-vertical-footer-offset">
      <!-- Logo -->
      <a class="navbar-brand" href="/" aria-label="CSTA - Spambase">
        <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos-light/logo.svg') }}" alt="Logo" data-hs-theme-appearance="dark">
        <img class="navbar-brand-logo-mini" src="{{ asset('assets/svg/logos/logo-short.svg') }}" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo-mini" src="{{ asset('assets/svg/logos-light/logo-short.svg') }}" alt="Logo" data-hs-theme-appearance="dark">
      </a>
      <!-- End Logo -->

      <!-- Navbar Vertical Toggle -->
      <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
        <i class="bi-arrow-bar-left navbar-toggler-short-align"
          data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
          data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
        <i class="bi-arrow-bar-right navbar-toggler-full-align"
          data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
          data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
      </button>
      <!-- End Navbar Vertical Toggle -->

      <!-- Content -->
      <div class="navbar-vertical-content">
        <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
          <!-- Dashboard -->
          <div class="nav-item">
            <a class="nav-link" href="/" data-placement="left">
              <i class="bi-house-door nav-icon"></i>
              <span class="nav-link-title">Dashboard</span>
            </a>
          </div>
          <!-- End Dashboard -->

          <!-- Property & Assets -->
          <div class="nav-item">
            <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesPropsAssetsMenu"
              aria-expanded="false" aria-controls="navbarVerticalMenuPagesPropsAssetsMenu">
              <i class="bi bi-box2 nav-icon"></i>
              <span class="nav-link-title">Property & Assets</span>
            </span>

            <div id="navbarVerticalMenuPagesPropsAssetsMenu" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
              <a class="nav-link" href="/properties-assets/overview">P & A Masterlist</a>

              <div id="navbarVerticalMenuPagesMenuPropsAssets">
                <!-- Stock List -->
                <div class="nav-item">
                  <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesStocksMenu"
                    aria-expanded="false" aria-controls="navbarVerticalMenuPagesStocksMenu">
                    Stock List
                  </span>

                  <div id="navbarVerticalMenuPagesStocksMenu" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuPagesMenuPropsAssets">
                    <a class="nav-link" href="#">Overview</a>
                    <a class="nav-link" href="/properties-assets/add-property">Add Stock</a>
                    <a class="nav-link" href="#">View Stock</a>
                  </div>
                </div>
                <!-- End Stock List -->

                <!-- Property Inventory -->
                <div class="nav-item">
                  <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesPropInvMenu"
                    aria-expanded="false" aria-controls="navbarVerticalMenuPagesPropInvMenu">
                    Property Inventory
                  </span>

                  <div id="navbarVerticalMenuPagesPropInvMenu" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuPagesMenuPropsAssets">
                    <a class="nav-link" href="#">Overview</a>
                    <a class="nav-link" href="#">Add Property</a>
                    <a class="nav-link" href="#">View Property</a>
                  </div>
                </div>
                <!-- End Property Inventory -->
              </div>
            </div>
          </div>
          <!-- End Property & Assets -->

          <!-- Repairs & Upkeep -->
          <div class="nav-item">
            <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesRepairUpkeepMenu"
              aria-expanded="false" aria-controls="navbarVerticalMenuPagesRepairUpkeepMenu">
              <i class="bi bi-tools nav-icon"></i>
              <span class="nav-link-title">Repairs & Upkeep</span>
            </span>

            <div id="navbarVerticalMenuPagesRepairUpkeepMenu" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
              <a class="nav-link" href="#">Repair List</a>
              <a class="nav-link" href="#">Report Asset Issue</a>
              <a class="nav-link" href="#">Schedule Repair</a>
            </div>
          </div>
          <!-- End Repairs & Upkeep -->

          <!-- Reservations -->
          <div class="nav-item">
            <a class="nav-link" href="#" data-placement="left">
              <i class="bi bi-calendar-check nav-icon"></i>
              <span class="nav-link-title">Reservations</span>
            </a>
          </div>
          <!-- End Reservations -->

          <span class="dropdown-header mt-4">Others</span>
          <small class="bi-three-dots nav-subtitle-replacer"></small>

          <div id="navbarVerticalMenuPagesMenu">
            <!-- User Management -->
            <div class="nav-item">
              <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="collapse"
                data-bs-target="#navbarVerticalMenuUserManagementMenu" aria-expanded="false" aria-controls="navbarVerticalMenuUserManagementMenu">
                <i class="bi-people nav-icon"></i>
                <span class="nav-link-title">User Management</span>
              </span>

              <div id="navbarVerticalMenuUserManagementMenu" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
                <div id="navbarVerticalMenuPagesUserManagement">
                  <!-- Users -->
                  <div class="nav-item">
                    <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarVerticalMenuPagesUserManagementUsersMenu" aria-expanded="false"
                      aria-controls="navbarVerticalMenuPagesUserManagementUsersMenu">
                      Users
                    </span>

                    <div id="navbarVerticalMenuPagesUserManagementUsersMenu" class="nav-collapse collapse"
                      data-bs-parent="#navbarVerticalMenuPagesUserManagement">
                      <a class="nav-link" href="/users/overview">Overview</a>
                      <a class="nav-link" href="/users/add-user">Add User</a>
                      <a class="nav-link" href="#">View User</a>
                    </div>
                  </div>
                  <!-- End Users -->

                  <!-- Roles -->
                  <div class="nav-item">
                    <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarVerticalMenuPagesUserManagementPositionsMenu" aria-expanded="false"
                      aria-controls="navbarVerticalMenuPagesUserManagementPositionsMenu">
                      Roles
                    </span>

                    <div id="navbarVerticalMenuPagesUserManagementPositionsMenu" class="nav-collapse collapse"
                      data-bs-parent="#navbarVerticalMenuPagesUserManagement">
                      <a class="nav-link" href="#">Add Role</a>
                      <a class="nav-link" href="#">View Roles</a>
                    </div>
                  </div>
                  <!-- End Roles -->
                </div>
              </div>
            </div>
            <!-- End User Management -->

            <!-- Maintenance -->
            <div class="nav-item">
              <a class="nav-link" href="/maintenance" data-placement="left">
                <i class="bi bi-wrench-adjustable nav-icon"></i>
                <span class="nav-link-title">Maintenance</span>
              </a>
            </div>
            <!-- End Maintenance -->

            <!-- Activity History -->
            <div class="nav-item">
              <a class="nav-link" href="#" data-placement="left">
                <i class="bi bi-clock-history nav-icon"></i>
                <span class="nav-link-title">Activity History</span>
              </a>
            </div>
            <!-- End Activity History -->

            <!-- Settings -->
            <div class="nav-item">
              <a class="nav-link" href="#" data-placement="left">
                <i class="bi bi-gear nav-icon"></i>
                <span class="nav-link-title">Settings</span>
              </a>
            </div>
            <!-- End Settings -->
          </div>
          <!-- End Collapse -->
        </div>
      </div>
      <!-- End Content -->

      <!-- Footer -->
      <div class="navbar-vertical-footer">
        <ul class="navbar-vertical-footer-list">
          <!-- System Theme -->
          <li class="navbar-vertical-footer-list-item">
            <div class="dropdown dropup" data-bs-toggle="tooltip" data-bs-placement="top" title="System Theme" data-bs-trigger="hover">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown"
                aria-expanded="false" data-bs-dropdown-animation>
              </button>

              <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                <span class="dropdown-item" data-icon="bi-moon-stars" data-value="auto">
                  <i class="bi-moon-stars me-2"></i>
                  <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                </span>
                <span class="dropdown-item" data-icon="bi-brightness-high" data-value="default">
                  <i class="bi-brightness-high me-2"></i>
                  <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                </span>
                <span class="dropdown-item" data-icon="bi-moon" data-value="dark">
                  <i class="bi-moon me-2"></i>
                  <span class="text-truncate" title="Dark">Dark</span>
                </span>
              </div>
            </div>
          </li>
          <!-- End System Theme -->

          <!-- Other Info -->
          <li class="navbar-vertical-footer-list-item">
            <div class="dropdown dropup" data-bs-toggle="tooltip" data-bs-placement="top" title="Other Info" data-bs-trigger="hover">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown"
                aria-expanded="false" data-bs-dropdown-animation>
                <i class="bi-info-circle"></i>
              </button>

              <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                <span class="dropdown-header">Help</span>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-question-square dropdown-item-icon"></i>
                  <span class="text-truncate" title="FAQ List">FAQ List</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-book dropdown-item-icon"></i>
                  <span class="text-truncate" title="User Guide">User Guide</span>
                </a>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header">Contacts</span>
                <a class="dropdown-item" href="#">
                  <i class="bi-chat-left-dots dropdown-item-icon"></i>
                  <span class="text-truncate" title="Contact support">Contact support</span>
                </a>
              </div>
            </div>
            <!-- End Other Info -->
          </li>
        </ul>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</aside>
