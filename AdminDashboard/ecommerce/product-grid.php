<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:49:37 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />

<!-- darkmode js -->
<script src="../assets/js/vendors/darkMode.js"></script>

<!-- Libs CSS -->
<link href="../assets/fonts/feather/feather.css" rel="stylesheet" />
<link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="../assets/css/theme.min.css">

    <link rel="canonical" href="product-grid.html" />
    <title>Product Grid 4 Four Column | Geeks - Academy Admin Template</title>
  </head>

  <body>
    <!-- Wrapper -->
    <div id="db-wrapper">
      <!-- navbar vertical -->
      <!-- Sidebar -->
<nav class="navbar-vertical navbar">
  <div class="vh-100" data-simplebar>
    <!-- Brand logo -->
    <a class="navbar-brand" href="../index-2.html">
      <img src="../assets/images/brand/logo/logo-inverse.svg" alt="Geeks" />
    </a>
    <!-- Navbar nav -->
    <ul class="navbar-nav flex-column" id="sideNavbar">
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navDashboard"
          aria-expanded="false"
          aria-controls="navDashboard">
          <i class="nav-icon fe fe-home me-2"></i>
          Dashboard
        </a>
        <div id="navDashboard" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../admin-dashboard.html">Overview</a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link " href="../dashboard-analytics.html">Analytics</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
          <i class="nav-icon fe fe-book me-2"></i>
          Courses
        </a>
        <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../admin-course-overview.html">All Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../admin-course-category.html">Courses Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../admin-course-category-single.html">Category Single</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
          <i class="nav-icon fe fe-user me-2"></i>
          User
        </a>
        <div id="navProfile" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../admin-instructor.html">Instructor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../admin-students.html">Students</a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCMS" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon fe fe-book-open me-2"></i>
          CMS
        </a>
        <div id="navCMS" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../admin-cms-overview.html">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../admin-cms-post.html">All Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../admin-cms-post-new.html">New Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../admin-cms-post-category.html">Category</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
          <i class="nav-icon fe fe-file me-2"></i>
          Project
        </a>
        <div id="navProject" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../project-grid.html">Grid</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../project-list.html">List</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link  collapsed "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navprojectSingle"
                aria-expanded="false"
                aria-controls="navprojectSingle">
                Single
              </a>
              <div id="navprojectSingle" class="collapse " data-bs-parent="#navProject">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link " href="../project-overview.html">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../project-task.html">Task</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../project-budget.html">Budget</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../project-team.html">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../project-files.html">Files</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../project-summary.html">Summary</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../add-project.html">Create Project</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navAuthentication"
          aria-expanded="false"
          aria-controls="navAuthentication">
          <i class="nav-icon fe fe-lock me-2"></i>
          Authentication
        </a>
        <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="sign-in.html">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="sign-up.html">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="forget-password.html">Forget Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../notification-history.html">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="404-error.html">404 Error</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navecommerce"
          aria-expanded="false"
          aria-controls="navecommerce">
          <i class="nav-icon fe fe-shopping-bag me-2"></i>
          Ecommerce
        </a>
        <div id="navecommerce" class="collapse  show " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a
                class="nav-link "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navproduct"
                aria-expanded="false"
                aria-controls="navproduct">
                Product
              </a>
              <div id="navproduct" class="collapse  show " data-bs-parent="#navProduct">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link  active " href="product-grid.html">Grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="product-grid-with-sidebar.html">Grid Sidebar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="products.html">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="product-single.html">Product Single</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="product-single-v2.html">Product Single v2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="add-product.html">Add Product</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="shopping-cart.html">Shopping Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="checkout.html">Checkout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="order.html">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="order-single.html">Order Single</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="order-history.html">Order History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="order-summary.html">Order Summary</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="customers.html">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="customer-single.html">Customer Single</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="add-customer.html">Add Customer</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navlayouts" aria-expanded="false" aria-controls="navlayouts">
          <i class="nav-icon fe fe-layout me-2"></i>
          Layouts
        </a>
        <div id="navlayouts" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../layouts/layout-horizontal.html">Top</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../layouts/layout-compact.html">Compact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../layouts/layout-vertical.html">Vertical</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="nav-divider"></div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Apps</div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="../chat-app.html">
          <i class="nav-icon fe fe-message-square me-2"></i>
          Chat
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="../task-kanban.html">
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-trello">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
              <rect x="7" y="7" width="3" height="9"></rect>
              <rect x="14" y="7" width="3" height="5"></rect>
            </svg>
          </span>
          <span class="ms-2">Task</span>
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="../mail.html">
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-mail">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
          </span>
          <span class="ms-2">Mail</span>
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="../calendar.html">
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-calendar">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
          </span>
          <span class="ms-2">Calendar</span>
        </a>
      </li>
      <li class="nav-item">
        <div class="nav-divider"></div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Components</div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navTables" aria-expanded="false" aria-controls="navTables">
          <i class="nav-icon fe fe-database me-2"></i>
          Tables
        </a>
        <div id="navTables" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../basic-table.html">Basic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../datatables.html">Data Tables</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="help-center.html">
          <i class="nav-icon fe fe-help-circle me-2"></i>
          Help Center
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navSiteSetting"
          aria-expanded="false"
          aria-controls="navSiteSetting">
          <i class="nav-icon fe fe-settings me-2"></i>
          Site Setting
        </a>
        <div id="navSiteSetting" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="../setting-general.html">General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../setting-google.html">Google</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../setting-social.html">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../setting-social-login.html">Social Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../setting-payment.html">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../setting-smpt.html">SMPT</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navMenuLevel"
          aria-expanded="false"
          aria-controls="navMenuLevel">
          <i class="nav-icon fe fe-corner-left-down me-2"></i>
          Menu Level
        </a>
        <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a
                class="nav-link "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navMenuLevelSecond"
                aria-expanded="false"
                aria-controls="navMenuLevelSecond">
                Two Level
              </a>
              <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link " href="#">NavItem 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">NavItem 2</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link  collapsed "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navMenuLevelThree"
                aria-expanded="false"
                aria-controls="navMenuLevelThree">
                Three Level
              </a>
              <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a
                      class="nav-link  collapsed "
                      href="#"
                      data-bs-toggle="collapse"
                      data-bs-target="#navMenuLevelThreeOne"
                      aria-expanded="false"
                      aria-controls="navMenuLevelThreeOne">
                      NavItem 1
                    </a>
                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link " href="#">NavChild Item 1</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Nav Item 2</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="nav-divider"></div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Documentation</div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link" href="../docs/index.html">
          <i class="nav-icon fe fe-clipboard me-2"></i>
          Documentation
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link" href="../docs/changelog.html">
          <i class="nav-icon fe fe-git-pull-request me-2"></i>
          Changelog
          <span class="text-primary ms-1" id="changelog"></span>
        </a>
      </li>
    </ul>
    <!-- Card -->
    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8 border-0">
      <div class="card-body py-6">
        <img src="../assets/images/background/giftbox.png" alt="" />
        <div class="mt-4">
          <h5 class="text-white">Unlimited Access</h5>
          <p class="text-white-50 fs-6">Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now</p>
          <a href="#" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
        </div>
      </div>
    </div>
  </div>
</nav>

      <!-- Page Content -->
      <main id="page-content">
        <div class="header">
    <!-- navbar -->
    <nav class="navbar-default navbar navbar-expand-lg">
        <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
        </a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                    <i class="fe fe-search"></i>
                </span>
                <input type="search" class="form-control ps-6" placeholder="Search Entire Dashboard" />
            </form>
        </div>
        <!--Navbar nav -->
        <div class="ms-auto d-flex">
            <div class="dropdown">
                <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                    <i class="bi theme-icon-active"></i>
                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                            <i class="bi theme-icon bi-sun-fill"></i>
                            <span class="ms-2">Light</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                            <i class="bi theme-icon bi-moon-stars-fill"></i>
                            <span class="ms-2">Dark</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                            <i class="bi theme-icon bi-circle-half"></i>
                            <span class="ms-2">Auto</span>
                        </button>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                <li class="dropdown stopevent">
                    <a
                        class="btn btn-light btn-icon rounded-circle indicator indicator-primary"
                        href="#"
                        role="button"
                        id="dropdownNotification"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fe fe-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
                        <div>
                            <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                <span class="h4 mb-0">Notifications</span>
                                <a href="# ">
                                    <span class="align-middle">
                                        <i class="fe fe-settings me-1"></i>
                                    </span>
                                </a>
                            </div>
                            <!-- List group -->
                            <ul class="list-group list-group-flush" data-simplebar style="max-height: 300px">
                                <li class="list-group-item bg-light">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="../assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                        <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                2 hours ago,
                                                            </span>
                                                            <span class="ms-1">2:19 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"></a>
                                            <div>
                                                <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                                                    <i class="fe fe-x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="../assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                        <p class="mb-3">Just launched a new Courses React for Beginner.</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:20 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="../assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                        <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-info me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:56 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="../assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                        <p class="mb-3">You earn new certificate for complete the Javascript Beginner course.</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-award text-warning me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:56 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="border-top px-3 pt-3 pb-0">
                                <a href="notification-history.html" class="text-link fw-semibold">See all Notifications</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- List -->
                <li class="dropdown ms-2">
                    <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md avatar-indicators avatar-online">
                            <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                                <div class="ms-3 lh-1">
                                    <h5 class="mb-1">Annette Black</h5>
                                    <p class="mb-0">annette@geeksui.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li class="dropdown-submenu dropstart-lg">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    <i class="fe fe-circle me-2"></i>
                                    Status
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-success me-2"></span>
                                            Online
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-secondary me-2"></span>
                                            Offline
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-warning me-2"></span>
                                            Away
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-danger me-2"></span>
                                            Busy
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="profile-edit.html">
                                    <i class="fe fe-user me-2"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="student-subscriptions.html">
                                    <i class="fe fe-star me-2"></i>
                                    Subscription
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-settings me-2"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="../index-2.html">
                                    <i class="fe fe-power me-2"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

        <!-- Container fluid -->
        <div class="container-fluid p-4">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="border-bottom pb-3 mb-3">
                <div class="mb-2 mb-lg-0">
                  <h1 class="mb-0 h2 fw-bold">Product Grid</h1>
                  <!-- Breadcrumb -->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="admin-dashboard.html">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="#">Ecommerce</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Product Grid</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <!-- row -->
            <div class="row justify-content-md-between flex-md-row flex-column gap-1 gap-md-0 mb-4">
              <div class="col-xxl-2 col-lg-3 col-md-5 col-12">
                <!-- input -->
                <input type="search" class="form-control" placeholder="Search Product" />
              </div>
              <div class="col-xxl-6 col-lg-5 col-md-7 col-12">
                <!-- row -->
                <div class="row justify-content-md-end">
                  <!-- input -->
                  <label class="col-auto col-form-label">Sorting</label>
                  <div class="col-lg-4">
                    <!-- form select -->
                    <select class="form-select" data-choices="" aria-label="Default select example">
                      <option selected>Featured</option>
                      <option value="Newest">Newest</option>
                      <option value="Price: High-Low">Price: High-Low</option>
                      <option value="Price: Low-High">Price: Low-High</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-4 gy-4">
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <!-- button -->
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <!-- button -->
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <!-- button -->
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <!-- img -->
                    <div class="carousel-item active">
                      <img src="../assets/images/ecommerce/product-shoe-01.jpg" class="d-block w-100 rounded-top-md" alt="..." />
                    </div>
                    <!-- img -->
                    <div class="carousel-item">
                      <img src="../assets/images/ecommerce/product-shoe-02.jpg" class="d-block w-100 rounded-top-md" alt="..." />
                    </div>
                    <!-- img -->
                    <div class="carousel-item">
                      <img src="../assets/images/ecommerce/product-shoe-03.jpg" class="d-block w-100 rounded-top-md" alt="..." />
                    </div>
                  </div>
                </div>
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <!-- text -->
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">White Adidas Top Sneakers</a></h4>
                    <!-- rating -->
                    <span class="fw-semibold">
                      5.0
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <!-- text -->
                    <h4 class="mb-0">$49.00</h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                      <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div>
                  <a href="product-single.html">
                    <!-- img -->
                    <img src="../assets/images/ecommerce/product-shoe-02.jpg" alt="" class="img-fluid rounded-top-md" />
                  </a>
                </div>
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">Red Converse shoe</a></h4>
                    <!-- rating -->
                    <span class="fw-semibold">
                      4.6
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <!-- heading -->
                    <h4 class="mb-0">$139.00</h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                      <span class="icon-shape icon-xxs bg-info rounded-circle border border-2 border-white shadow"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div>
                  <a href="product-single.html">
                    <!-- img -->
                    <img src="../assets/images/ecommerce/product-shoe-03.jpg" alt="" class="img-fluid rounded-top-md" />
                    <!-- badge -->
                    <div class="position-absolute top-0 end-0 p-2">
                      <span class="badge bg-danger">Sale</span>
                    </div>
                  </a>
                </div>
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">Unpaired maroon plimsoll</a></h4>
                    <!-- rating -->
                    <span class="fw-semibold">
                      3.6
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <!-- text -->
                    <h4 class="mb-0">
                      $39.00
                      <span class="text-decoration-line-through">$49.00</span>
                    </h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                      <span class="icon-shape icon-xxs bg-info rounded-circle border border-2 border-white shadow"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div>
                  <a href="product-single.html">
                    <img src="../assets/images/ecommerce/product-shoe-04.jpg" alt="" class="img-fluid rounded-top-md" />
                  </a>
                </div>
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <!-- heading -->
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">Nike SuperRep Go</a></h4>
                    <!-- rating -->
                    <span class="fw-semibold">
                      4.8
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h4 class="mb-0">$69.00</h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-success rounded-circle border border-2 border-white shadow mx-n1"></span>
                      <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div>
                  <a href="product-single.html">
                    <!-- img -->
                    <img src="../assets/images/ecommerce/product-shoe-05.jpg" alt="" class="img-fluid rounded-top-md" />
                  </a>
                </div>
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <!-- heading -->
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">Unpaired maroon plimsoll</a></h4>
                    <!-- rating -->
                    <span class="fw-semibold">
                      4.2
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h4 class="mb-0">$49.00</h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                      <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div>
                  <a href="product-single.html">
                    <!-- img -->
                    <img src="../assets/images/ecommerce/product-shoe-06.jpg" alt="" class="img-fluid rounded-top-md" />
                    <!-- badge -->
                    <div class="position-absolute top-0 end-0 p-2">
                      <span class="badge bg-primary">New</span>
                    </div>
                  </a>
                </div>
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">Nike Legend Essential 2</a></h4>
                    <span class="fw-semibold">
                      3.8
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h4 class="mb-0">$39.00</h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-primary rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow ms-n1"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div>
                  <!-- img -->
                  <a href="product-single.html">
                    <img src="../assets/images/ecommerce/product-shoe-07.jpg" alt="" class="img-fluid rounded-top-md" />
                  </a>
                </div>
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">Nike Black and White</a></h4>
                    <span class="fw-semibold">
                      3.9
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <!-- text -->
                    <h4 class="mb-0">$239.00</h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow ms-n1"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card h-100">
                <div>
                  <a href="product-single.html">
                    <!-- img -->
                    <img src="../assets/images/ecommerce/product-shoe-08.jpg" alt="" class="img-fluid rounded-top-md" />
                  </a>
                </div>
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <!-- text -->
                    <h4 class="mb-0"><a href="product-single.html" class="text-inherit">Nike shoes Dark Brown</a></h4>
                    <span class="fw-semibold">
                      2.8
                      <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                    </span>
                  </div>
                  <!-- price -->
                  <div class="d-flex justify-content-between">
                    <h4 class="mb-0">$29.00</h4>
                    <!-- color -->
                    <div>
                      <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow"></span>
                      <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow ms-n1"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
<script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>

    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="../assets/js/vendors/choice.js"></script>
  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:49:39 GMT -->
</html>
