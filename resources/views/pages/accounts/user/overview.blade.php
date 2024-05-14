@extends('layouts.app')

@section('title')
  Users Overview | CSTA - Spambase
@endsection

@section('styles')
  <link href="{{ asset('assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}" rel="stylesheet">
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
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="/">Home</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-link">Users</a></li>
              <li class="breadcrumb-item active" aria-current="page">Overview</li>
            </ol>
          </nav>

          <h1 class="page-header-title">Users Overview</h1>
        </div>
        <!-- End Col -->

        <div class="col-sm-auto">
          <a class="btn btn-primary" href="/users/add-user">
            <i class="bi-person-plus-fill me-1"></i> Add user
          </a>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <!-- Stats -->
    <div class="row">
      <div class="col-sm-4 col-lg-4 mb-lg-5 mb-3">
        <!-- Card -->
        <div class="card h-100">
          <div class="card-body">
            <h6 class="card-subtitle mb-2">Total users</h6>

            <div class="row align-items-center gx-2">
              <div class="col">
                <span class="js-counter display-4 text-dark">24</span>
                <span class="text-body fs-5 ms-1">from 22</span>
              </div>
              <!-- End Col -->

              <div class="col-auto">
                <span class="badge bg-soft-success text-success p-1">
                  <i class="bi-graph-up"></i> 5.0%
                </span>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>

      <div class="col-sm-4 col-lg-4 mb-lg-5 mb-3">
        <!-- Card -->
        <div class="card h-100">
          <div class="card-body">
            <h6 class="card-subtitle mb-2">Active members</h6>

            <div class="row align-items-center gx-2">
              <div class="col">
                <span class="js-counter display-4 text-dark">12</span>
                <span class="text-body fs-5 ms-1">from 11</span>
              </div>

              <div class="col-auto">
                <span class="badge bg-soft-success text-success p-1">
                  <i class="bi-graph-up"></i> 1.2%
                </span>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>

      <div class="col-sm-4 col-lg-4 mb-lg-5 mb-3">
        <!-- Card -->
        <div class="card h-100">
          <div class="card-body">
            <h6 class="card-subtitle mb-2">New/returning</h6>

            <div class="row align-items-center gx-2">
              <div class="col">
                <span class="js-counter display-4 text-dark">56</span>
                <span class="display-4 text-dark">%</span>
                <span class="text-body fs-5 ms-1">from 48.7</span>
              </div>

              <div class="col-auto">
                <span class="badge bg-soft-danger text-danger p-1">
                  <i class="bi-graph-down"></i> 2.8%
                </span>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Stats -->

    <!-- Card -->
    <div class="card">
      <!-- Header -->
      <div class="card-header card-header-content-md-between">
        <div class="mb-md-0 mb-2">
          <form>
            <!-- Search -->
            <div class="input-group input-group-merge input-group-flush">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>
              <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users" />
            </div>
            <!-- End Search -->
          </form>
        </div>

        <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
          <!-- Datatable Info -->
          <div id="datatableCounterInfo" style="display: none">
            <div class="d-flex align-items-center">
              <span class="fs-5 me-3">
                <span id="datatableCounter">0</span>
                Selected
              </span>
              <button class="btn btn-outline-danger btn-sm" id="btnDeleteUser"> <i class="bi-trash"></i> Delete </button>
            </div>
          </div>
          <!-- End Datatable Info -->

          <!-- Dropdown -->
          <div class="dropdown">
            <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi-download me-2"></i> Export
            </button>

            <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
              <span class="dropdown-header">Options</span>
              <a id="export-copy" class="dropdown-item" href="javascript:;">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="../assets/svg/illustrations/copy-icon.svg" alt="Image Description" />
                Copy
              </a>
              <a id="export-print" class="dropdown-item" href="javascript:;">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="../assets/svg/illustrations/print-icon.svg" alt="Image Description" />
                Print
              </a>
              <div class="dropdown-divider"></div>
              <span class="dropdown-header">Download options</span>
              <a id="export-excel" class="dropdown-item" href="javascript:;">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="../assets/svg/brands/excel-icon.svg" alt="Image Description" />
                Excel
              </a>
              <a id="export-csv" class="dropdown-item" href="javascript:;">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="../assets/svg/components/placeholder-csv-format.svg" alt="Image Description" />
                .CSV
              </a>
              <a id="export-pdf" class="dropdown-item" href="javascript:;">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="../assets/svg/brands/pdf-icon.svg" alt="Image Description" />
                PDF
              </a>
            </div>
          </div>
          <!-- End Dropdown -->

          <!-- Dropdown -->
          <div class="dropdown">
            <button type="button" class="btn btn-white btn-sm w-100" id="usersFilterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi-filter me-1"></i> Filter
              <span class="badge bg-soft-dark text-dark rounded-circle ms-1" id="filterCount"></span>
            </button>

            <div class="dropdown-menu dropdown-menu-sm-end dropdown-card card-dropdown-filter-centered" aria-labelledby="usersFilterDropdown"
              style="min-width: 22rem">
              <!-- Card -->
              <div class="card">
                <div class="card-header card-header-content-between">
                  <h5 class="card-header-title">Filter users</h5>

                  <!-- Toggle Button -->
                  <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm ms-2">
                    <i class="bi-x-lg"></i>
                  </button>
                  <!-- End Toggle Button -->
                </div>

                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-sm mb-4">
                        <small class="text-cap text-body">Position</small>

                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="3"
                            data-hs-tom-select-options='{
                                  "placeholder": "All Positions",
                                  "hideSearch": true,
                                  "dropdownWidth": "100%"
                                }'>
                            <option value=""></option>
                            @foreach ($roles as $role)
                              <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <div class="row">
                      <div class="col-sm mb-4">
                        <small class="text-cap text-body">Department</small>

                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="4"
                            data-hs-tom-select-options='{
                                  "placeholder": "All Departments",
                                  "hideSearch": true,
                                  "dropdownWidth": "100%"
                                }'>
                            <option value=""></option>
                            @foreach ($depts as $dept)
                              <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                            @endforeach
                          </select>
                          <!-- End Select -->
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="col-12 mb-4">
                        <small class="text-cap text-body">Status</small>

                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="7"
                            data-hs-tom-select-options='{
                                  "placeholder": "All Status",
                                  "hideSearch": true,
                                  "dropdownWidth": "100%"
                                }'>
                            <option value=""></option>
                          </select>
                          <!-- End Select -->
                        </div>
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Apply</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Dropdown -->
        </div>
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom position-relative">
        <table id="datatable"
          class="table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table table-hover w-100 table"
          data-hs-datatables-options='{
                "columnDefs": [{
                   "targets": [0, 8],
                   "orderable": false
                 }],
                "order": [[2, "asc"]],
                "info": {
                  "totalQty": "#datatableWithPaginationInfoTotalQty"
                },
                "search": "#datatableSearch",
                "entries": "#datatableEntries",
                "pageLength": 5,
                "isResponsive": false,
                "isShowPaging": false,
                "pagination": "datatablePagination"
              }'>
          <thead class="thead-light">
            <tr>
              <th class="table-column-pe-0">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll" />
                  <label class="form-check-label" for="datatableCheckAll"></label>
                </div>
              </th>
              <th class="d-none">User ID</th>
              <th class="table-column-ps-0">Name</th>
              <th>Role</th>
              <th>Department</th>
              <th>Phone</th>
              <th>Date Created</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($users as $user)
              <tr data-user-id="{{ $user->id }}">
                <td class="table-column-pe-1">
                  <div class="form-check">
                    <input class="form-check-input user-checkbox" type="checkbox" value="{{ $user->id }}" id="datatableCheckAll{{ $user->id }}" />
                    <label class="form-check-label" for="datatableCheckAll{{ $user->id }}"></label>
                  </div>
                </td>
                <td class="d-none">{{ $user->id }}</td>
                <td class="table-column-ps-0">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-circle">
                    <img class="avatar-img" src="{{ asset($user->image) }}" alt="Profile Picture" />
                  </div>
                  <div class="ms-3">
                    <span class="d-block h5 mb-0 text-inherit">{{ $user->fname }}</span>
                    <span class="d-block fs-5 text-body">{{ $user->email }}</span>
                  </div>
                </div>
                </td>
                <td>{{ $user->role->name }}</span></td>
                <td>{{ $user->department->name }}</td>
                <td>{{ $user->phone_num }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->is_active }}</td>
                <td>
                  <button type="button" class="btn btn-white btn-sm" id="btnEditUser" data-bs-toggle="modal" data-bs-target="#editUserModal">
                    <i class="bi-pencil-fill me-1"></i> Edit
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- End Table -->

      <!-- Footer -->
      <div class="card-footer">
        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
          <div class="col-sm mb-sm-0 mb-2">
            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
              <span class="me-2">Showing:</span>

              <!-- Select -->
              <div class="tom-select-custom" style="width: 80px;">
                <select id="datatableEntries" class="js-select form-select form-select-borderless" autocomplete="off"
                  data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                  <option value="5" selected>5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                </select>
              </div>
              <!-- End Select -->

              <span class="text-secondary me-2">of</span>

              <!-- Pagination Quantity -->
              <span id="datatableWithPaginationInfoTotalQty"></span>
            </div>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <div class="d-flex justify-content-center justify-content-sm-end">
              <!-- Pagination -->
              <nav id="datatablePagination" aria-label="Activity pagination"></nav>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Footer -->
    </div>
    <!-- End Card -->
  </div>
  <!-- End Content -->
@endsection

@section('sec-content')
  <x-modals.edit-user></x-modals.edit-user>
@endsection

@section('scripts')
  <script src="{{ asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-file-attach/dist/hs-file-attach.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-step-form/dist/hs-step-form.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/hs-counter/dist/hs-counter.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/appear/dist/appear.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imask/dist/imask.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net.extensions/select/select.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jszip/dist/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/pdfmake/build/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/pdfmake/build/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            className: 'd-none'
          },
          {
            extend: 'excel',
            className: 'd-none'
          },
          {
            extend: 'csv',
            className: 'd-none'
          },
          {
            extend: 'pdf',
            className: 'd-none'
          },
          {
            extend: 'print',
            className: 'd-none'
          },
        ],
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        },
        language: {
          zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="{{ asset('assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="{{ asset('assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
      })

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('#export-copy').click(function() {
        datatable.button('.buttons-copy').trigger()
      });

      $('#export-excel').click(function() {
        datatable.button('.buttons-excel').trigger()
      });

      $('#export-csv').click(function() {
        datatable.button('.buttons-csv').trigger()
      });

      $('#export-pdf').click(function() {
        datatable.button('.buttons-pdf').trigger()
      });

      $('#export-print').click(function() {
        datatable.button('.buttons-print').trigger()
      });

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        if (elVal === 'null') elVal = ''

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
    });
  </script>

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


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF COUNTER
        // =======================================================
        new HSCounter('.js-counter')


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')
      }
    })()
  </script>
@endsection
