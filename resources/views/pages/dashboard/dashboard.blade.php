@extends('layouts.app')

@section('title')
  Dashboard | CSTA - Spambase
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/jsvectormap/dist/css/jsvectormap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}">
@endsection

@section('content')
  <!-- Background -->
  <div class="bg-dark">
    <div class="content container-fluid" style="height: 25rem;">
      <!-- Page Header -->
      <div class="page-header page-header-light">
        <div class="row align-items-center">
          <div class="col-sm mb-sm-0 mb-2">
            <h1 class="page-header-title">Greetings, Sample User.</h1>
            <p class="page-header-text">Here's what's happening in CSTA - Spambase.</p>
          </div>
          <!-- End Col -->
        </div>
      </div>
      <!-- End Page Header -->
    </div>
  </div>
  <!-- End Background -->

  <!-- Content -->
  <div class="content container-fluid" style="margin-top: -17rem;">
    <!-- Card -->
    <div class="card card-body mb-3 mb-lg-5">
      <div class="row col-lg-divider gx-lg-6">
        <div class="col-lg-3">
          <!-- Media -->
          <div class="d-flex">
            <div class="flex-grow-1">
              <h6 class="card-subtitle mb-3">In-store Sales</h6>
              <h3 class="card-title">$7,820.75</h3>

              <div class="d-flex align-items-center">
                <span class="d-block fs-6">5k orders</span>
                <span class="badge bg-soft-success text-success ms-2">
                    <i class="bi-graph-up"></i> 4.3%
                  </span>
              </div>
            </div>

            <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                <i class="bi-shop"></i>
              </span>
          </div>
          <!-- End Media -->
        </div>
        <!-- End Col -->

        <div class="col-lg-3">
          <!-- Media -->
          <div class="d-flex">
            <div class="flex-grow-1">
              <h6 class="card-subtitle mb-3">Website Sales</h6>
              <h3 class="card-title">$985,937.45</h3>

              <div class="d-flex align-items-center">
                <span class="d-block fs-6">21k orders</span>
                <span class="badge bg-soft-success text-success ms-2">
                    <i class="bi-graph-up"></i> 12.5%
                  </span>
              </div>
            </div>

            <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                <i class="bi-layout-text-window-reverse"></i>
              </span>
          </div>
          <!-- End Media -->
        </div>
        <!-- End Col -->

        <div class="col-lg-3">
          <!-- Media -->
          <div class="d-flex">
            <div class="flex-grow-1">
              <h6 class="card-subtitle mb-3">Discount</h6>
              <h3 class="card-title">$15,503.00</h3>

              <div class="d-flex align-items-center">
                <span class="d-block fs-6">6k orders</span>
              </div>
            </div>

            <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                <i class="bi-percent"></i>
              </span>
          </div>
          <!-- End Media -->
        </div>
        <!-- End Col -->

        <div class="col-lg-3">
          <!-- Media -->
          <div class="d-flex">
            <div class="flex-grow-1">
              <h6 class="card-subtitle mb-3">Affiliate</h6>
              <h3 class="card-title">$3,982.53</h3>

              <div class="d-flex align-items-center">
                <span class="d-block fs-6">150 orders</span>
                <span class="badge bg-soft-danger text-danger ms-2">
                    <i class="bi-graph-down"></i> 4.4%
                  </span>
              </div>
            </div>

            <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                <i class="bi-people"></i>
              </span>
          </div>
          <!-- End Media -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="card mb-3 mb-lg-5">
      <!-- Header -->
      <div class="card-header card-header-content-sm-between">
        <h4 class="card-header-title mb-2 mb-sm-0">Sales <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></h4>

        <div class="d-grid d-sm-flex gap-2">
          <!-- Select -->
          <div class="tom-select-custom">
            <select class="js-select form-select form-select-sm" autocomplete="off" data-hs-tom-select-options='{
                        "searchInDropdown": false,
                        "hideSearch": true,
                        "dropdownWidth": "10rem"
                      }'>
              <option value="online-store">Online store</option>
              <option value="in-store">In-store</option>
            </select>
          </div>
          <!-- End Select -->

          <!-- Daterangepicker -->
          <button id="js-daterangepicker-predefined" class="btn btn-white btn-sm dropdown-toggle">
            <i class="bi-calendar-week"></i>
            <span class="js-daterangepicker-predefined-preview ms-1"></span>
          </button>
          <!-- End Daterangepicker -->
        </div>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="card-body">
        <div class="row col-lg-divider">
          <div class="col-lg-9 mb-5 mb-lg-0">
            <!-- Bar Chart -->
            <div class="chartjs-custom mb-4">
              <canvas id="ecommerce-sales" class="js-chart" style="height: 15rem;" data-hs-chartjs-options='{
                          "type": "bar",
                          "data": {
                            "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM","11AM"],
                            "datasets": [{
                              "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220, 200, 300, 290, 350, 150, 350, 300, 100, 125, 220, 225],
                              "backgroundColor": "#377dff",
                              "hoverBackgroundColor": "#377dff",
                              "borderColor": "#377dff",
                              "maxBarThickness": "10"
                            },
                            {
                              "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120, 150, 230, 382, 204, 169, 290, 300, 100, 300, 140],
                              "backgroundColor": "#e7eaf3",
                              "borderColor": "#e7eaf3",
                              "maxBarThickness": "10"
                            }]
                          },
                          "options": {
                            "scales": {
                              "y": {
                                "grid": {
                                  "color": "#e7eaf3",
                                  "drawBorder": false,
                                  "zeroLineColor": "#e7eaf3"
                                },
                                "ticks": {
                                  "beginAtZero": true,
                                  "stepSize": 100,
                                  "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                  "padding": 10
                                }
                              },
                              "x": {
                                "grid": {
                                  "display": false,
                                  "drawBorder": false
                                },
                                "ticks": {
                                  "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                  "padding": 5
                                },
                                "categoryPercentage": 0.5,
                                "maxBarThickness": "10"
                              }
                            },
                            "cornerRadius": 2,
                            "plugins": {
                              "tooltip": {
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'></canvas>
            </div>
            <!-- End Bar Chart -->

            <div class="row justify-content-center">
              <div class="col-auto">
                <span class="legend-indicator"></span> Revenue
              </div>
              <!-- End Col -->

              <div class="col-auto">
                <span class="legend-indicator bg-primary"></span> Orders
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>

          <div class="col-lg-3">
            <div class="row">
              <div class="col-sm-6 col-lg-12">
                <!-- Stats -->
                <div class="d-flex justify-content-center flex-column" style="min-height: 9rem;">
                  <h6 class="card-subtitle">Revenue</h6>
                  <span class="d-block display-4 text-dark mb-1 me-3">$97,458.20</span>
                  <span class="d-block text-success">
                      <i class="bi-graph-up me-1"></i> $2,401.02 (3.7%)
                    </span>
                </div>
                <!-- End Stats -->

                <hr class="d-none d-lg-block my-0">
              </div>
              <!-- End Col -->

              <div class="col-sm-6 col-lg-12">
                <!-- Stats -->
                <div class="d-flex justify-content-center flex-column" style="min-height: 9rem;">
                  <h6 class="card-subtitle">Orders</h6>
                  <span class="d-block display-4 text-dark mb-1 me-3">67,893</span>
                  <span class="d-block text-danger">
                      <i class="bi-graph-down me-1"></i> +3,301 (1.2%)
                    </span>
                </div>
                <!-- End Stats -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Body -->
    </div>
    <!-- End Card -->

    <div class="row">
      <div class="col-lg-4 mb-3 mb-lg-5">
        <div class="d-grid gap-2 gap-lg-4">
          <!-- Card -->
          <a class="card card-hover-shadow" href="#">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations/oc-megaphone.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                  <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                </div>

                <div class="flex-grow-1 ms-4">
                  <h3 class="text-inherit mb-1">Product</h3>
                  <span class="text-body">Create a new product</span>
                </div>

                <div class="ms-2 text-end">
                  <i class="bi-chevron-right text-body text-inherit"></i>
                </div>
              </div>
            </div>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="card card-hover-shadow" href="#">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations/oc-collection.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                  <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations-light/oc-collection.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                </div>

                <div class="flex-grow-1 ms-4">
                  <h3 class="text-inherit mb-1">Collection</h3>
                  <span class="text-body">Create a new collection</span>
                </div>

                <div class="ms-2 text-end">
                  <i class="bi-chevron-right text-body text-inherit"></i>
                </div>
              </div>
            </div>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="card card-hover-shadow" href="#">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations/oc-discount.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                  <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations-light/oc-discount.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                </div>

                <div class="flex-grow-1 ms-4">
                  <h3 class="text-inherit mb-1">Discount</h3>
                  <span class="text-body">Create a new discount</span>
                </div>

                <div class="ms-2 text-end">
                  <i class="bi-chevron-right text-body text-inherit"></i>
                </div>
              </div>
            </div>
          </a>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Col -->

      <div class="col-lg-8 mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card h-100">
          <!-- Header -->
          <div class="card-header card-header-content-between">
            <h4 class="card-header-title">Top products</h4>

            <a class="btn btn-ghost-secondary btn-sm" href="#">View all</a>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body-height">
            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                <thead class="thead-light">
                <tr>
                  <th scope="col">Item</th>
                  <th scope="col">Change</th>
                  <th scope="col">Price</th>
                  <th scope="col">Sold</th>
                  <th scope="col">Sales</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                  <td>
                    <!-- Media -->
                    <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                      <div class="flex-shrink-0">
                        <img class="avatar" src="./assets/img/400x400/img4.jpg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Photive wireless speakers</h5>
                      </div>
                    </a>
                    <!-- End Media -->
                  </td>
                  <td><i class="bi-graph-down text-danger me-1"></i> 72%</td>
                  <td>$65</td>
                  <td>7,545</td>
                  <td>
                    <h4 class="mb-0">$15,302.00</h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <!-- Media -->
                    <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                      <div class="flex-shrink-0">
                        <img class="avatar" src="./assets/img/400x400/img26.jpg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Topman shoe in green</h5>
                      </div>
                    </a>
                    <!-- End Media -->
                  </td>
                  <td><i class="bi-graph-up text-success me-1"></i> 69%</td>
                  <td>$21</td>
                  <td>6,643</td>
                  <td>
                    <h4 class="mb-0">$12,492.21</h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <!-- Media -->
                    <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                      <div class="flex-shrink-0">
                        <img class="avatar" src="./assets/img/400x400/img25.jpg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">RayBan black sunglasses</h5>
                      </div>
                    </a>
                    <!-- End Media -->
                  </td>
                  <td><i class="bi-graph-down text-danger me-1"></i> 65%</td>
                  <td>$37</td>
                  <td>5,951</td>
                  <td>
                    <h4 class="mb-0">$10,351.71</h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <!-- Media -->
                    <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                      <div class="flex-shrink-0">
                        <img class="avatar" src="./assets/img/400x400/img6.jpg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Mango Women's shoe</h5>
                      </div>
                    </a>
                    <!-- End Media -->
                  </td>
                  <td><i class="bi-graph-down text-danger me-1"></i> 53%</td>
                  <td>$65</td>
                  <td>5,002</td>
                  <td>
                    <h4 class="mb-0">$9,917.45</h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <!-- Media -->
                    <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                      <div class="flex-shrink-0">
                        <img class="avatar" src="./assets/img/400x400/img3.jpg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Calvin Klein t-shirts</h5>
                      </div>
                    </a>
                    <!-- End Media -->
                  </td>
                  <td><i class="bi-graph-up text-success me-1"></i> 50%</td>
                  <td>$89</td>
                  <td>4,714</td>
                  <td>
                    <h4 class="mb-0">$8,466.02</h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <!-- Media -->
                    <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                      <div class="flex-shrink-0">
                        <img class="avatar" src="./assets/img/400x400/img5.jpg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Givenchy perfume</h5>
                      </div>
                    </a>
                    <!-- End Media -->
                  </td>
                  <td><i class="bi-graph-up text-success me-1"></i> 50%</td>
                  <td>$99</td>
                  <td>4,155</td>
                  <td>
                    <h4 class="mb-0">$7,715.89</h4>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- End Table -->
          </div>
          <!-- End Body -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->

    <!-- Card -->
    <div class="card">
      <div class="row col-lg-divider">
        <div class="col-lg-6">
          <!-- Body -->
          <div class="card-body">
            <h4>Total sales <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></h4>

            <div class="row align-items-sm-center mt-4 mt-sm-0 mb-5">
              <div class="col-sm mb-3 mb-sm-0">
                <span class="display-5 text-dark me-2">$597,820.75</span>
              </div>
              <!-- End Col -->

              <div class="col-sm-auto">
                  <span class="h3 text-success">
                    <i class="bi-graph-up"></i> 25.9%
                  </span>
                <span class="d-block">&mdash; 1,347,935 orders <span class="badge bg-soft-dark text-dark rounded-pill ms-1">+$97k today</span></span>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Bar Chart -->
            <div class="chartjs-custom mb-4" style="height: 18rem;">
              <canvas id="ecommerce-overview-1" class="js-chart" data-hs-chartjs-options='{
                          "type": "line",
                          "data": {
                             "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                             "datasets": [{
                              "data": [200, 200, 240, 350, 200, 350, 200, 250, 285, 220],
                              "backgroundColor": "transparent",
                              "borderColor": "#377dff",
                              "borderWidth": 2,
                              "pointRadius": 0,
                              "hoverBorderColor": "#377dff",
                              "pointBackgroundColor": "#377dff",
                              "pointBorderColor": "#fff",
                              "pointHoverRadius": 0,
                              "tension": 0.4
                            },
                            {
                              "data": [150, 230, 382, 204, 269, 290, 200, 250, 200, 225],
                              "backgroundColor": "transparent",
                              "borderColor": "#e7eaf3",
                              "borderWidth": 2,
                              "pointRadius": 0,
                              "hoverBorderColor": "#e7eaf3",
                              "pointBackgroundColor": "#e7eaf3",
                              "pointBorderColor": "#fff",
                              "pointHoverRadius": 0,
                              "tension": 0.4
                            }]
                          },
                          "options": {
                             "scales": {
                                "y": {
                                  "grid": {
                                    "color": "#e7eaf3",
                                    "drawBorder": false,
                                    "zeroLineColor": "#e7eaf3"
                                  },
                                  "ticks": {
                                    "beginAtZero": true,
                                    "stepSize": 100,
                                    "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                    "padding": 10,
                                    "prefix": "$",
                                    "postfix": "k"
                                  }
                                },
                                "x": {
                                  "grid": {
                                    "display": false,
                                    "drawBorder": false
                                  },
                                  "ticks": {
                                    "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                    "padding": 5
                                  }
                                }
                            },
                            "plugins": {
                              "tooltip": {
                                "prefix": "$",
                                "postfix": "k",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'>
              </canvas>
            </div>
            <!-- End Bar Chart -->

            <!-- Legend Indicators -->
            <div class="row justify-content-center">
              <div class="col-auto">
                <span class="legend-indicator"></span> Yesterday
              </div>
              <!-- End Col -->

              <div class="col-auto">
                <span class="legend-indicator bg-primary"></span> Today
              </div>
              <!-- End Col -->
            </div>
            <!-- End Legend Indicators -->
          </div>
          <!-- End Body -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <!-- Body -->
          <div class="card-body">
            <h4>Visitors</h4>

            <div class="row align-items-sm-center mt-4 mt-sm-0 mb-5">
              <div class="col-sm mb-3 mb-sm-0">
                <span class="display-5 text-dark me-2">831,071</span>
              </div>
              <!-- End Col -->

              <div class="col-sm-auto">
                  <span class="h3 text-danger">
                    <i class="bi-graph-down"></i> 16%
                  </span>
                <span class="d-block">&mdash; 467,001 unique <span class="badge bg-soft-dark text-dark rounded-pill ms-1">+7k today</span></span>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Bar Chart -->
            <div class="chartjs-custom mb-4" style="height: 18rem;">
              <canvas id="ecommerce-overview-2" class="js-chart" data-hs-chartjs-options='{
                          "type": "line",
                          "data": {
                             "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                             "datasets": [{
                              "data": [20, 20, 24, 15, 30, 35, 20, 28, 18, 16],
                              "backgroundColor": "transparent",
                              "borderColor": "#377dff",
                              "borderWidth": 2,
                              "pointRadius": 0,
                              "hoverBorderColor": "#377dff",
                              "pointBackgroundColor": "#377dff",
                              "pointBorderColor": "#fff",
                              "pointHoverRadius": 0,
                              "tension": 0.4
                            },
                            {
                              "data": [15, 23, 18, 20, 36, 29, 20, 22, 20, 22],
                              "backgroundColor": "transparent",
                              "borderColor": "#e7eaf3",
                              "borderWidth": 2,
                              "pointRadius": 0,
                              "hoverBorderColor": "#e7eaf3",
                              "pointBackgroundColor": "#e7eaf3",
                              "pointBorderColor": "#fff",
                              "pointHoverRadius": 0,
                              "tension": 0.4
                            }]
                          },
                          "options": {
                             "scales": {
                                "y": {
                                  "grid": {
                                    "color": "#e7eaf3",
                                    "drawBorder": false,
                                    "zeroLineColor": "#e7eaf3"
                                  },
                                  "ticks": {
                                    "beginAtZero": true,
                                    "stepSize": 10,
                                    "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                    "padding": 10,
                                    "postfix": "k"
                                  }
                                },
                                "x": {
                                  "grid": {
                                    "display": false,
                                    "drawBorder": false
                                  },
                                  "ticks": {
                                    "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                    "padding": 5
                                  }
                                }
                            },
                            "plugins": {
                              "tooltip": {
                                "postfix": "k",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'>
              </canvas>
            </div>
            <!-- End Bar Chart -->

            <!-- Legend Indicators -->
            <div class="row justify-content-center">
              <div class="col-auto">
                <span class="legend-indicator"></span> Yesterday
              </div>
              <!-- End Col -->

              <div class="col-auto">
                <span class="legend-indicator bg-primary"></span> Today
              </div>
              <!-- End Col -->
            </div>
            <!-- End Legend Indicators -->
          </div>
          <!-- End Body -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card -->
  </div>
  <!-- End Content -->
@endsection

@section('scripts')
  <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chartjs-chart-matrix/dist/chartjs-chart-matrix.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.min.js') }}"></script>
  <script src="{{ asset('assets/js/hs.theme-appearance-charts.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      let start = moment();
      let end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF VECTOR MAP
        // =======================================================
        setTimeout(() => {
          HSCore.components.HSJsVectorMap.init('.js-jsvectormap', {
            backgroundColor: HSThemeAppearance.getAppearance() === 'dark' ? '#25282a' : '#ffffff'
          })

          const vectorMap = HSCore.components.HSJsVectorMap.getItem(0)

          window.addEventListener('on-hs-appearance-change', e => {
            vectorMap.setBackgroundColor(e.detail === 'dark' ? '#25282a' : '#ffffff')
          })
        }, 300)


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')
      }
    })()
  </script>
@endsection
