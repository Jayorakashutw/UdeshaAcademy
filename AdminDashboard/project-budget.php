<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/project-budget.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:49:37 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

<!-- darkmode js -->
<script src="assets/js/vendors/darkMode.js"></script>

<!-- Libs CSS -->
<link href="assets/fonts/feather/feather.css" rel="stylesheet" />
<link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="assets/css/theme.min.css">

    <link rel="canonical" href="project-budget.html" />
    <title>Project Budget | Geeks - Academy Admin Template</title>
  </head>

  <body>
    <!-- Wrapper -->
    <div id="db-wrapper">
      <!-- navbar vertical -->
      <!-- Sidebar -->
<nav class="navbar-vertical navbar">
  <div class="vh-100" data-simplebar>
    <!-- Brand logo -->
    <a class="navbar-brand" href="index-2.html">
      <img src="assets/images/brand/logo/logo-inverse.svg" alt="Geeks" />
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
              <a class="nav-link " href="admin-dashboard.html">Overview</a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link " href="dashboard-analytics.html">Analytics</a>
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
              <a class="nav-link " href="admin-course-overview.html">All Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-course-category.html">Courses Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-course-category-single.html">Category Single</a>
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
              <a class="nav-link " href="admin-instructor.html">Instructor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-students.html">Students</a>
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
              <a class="nav-link " href="admin-cms-overview.html">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-cms-post.html">All Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-cms-post-new.html">New Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-cms-post-category.html">Category</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
          <i class="nav-icon fe fe-file me-2"></i>
          Project
        </a>
        <div id="navProject" class="collapse  show " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="project-grid.html">Grid</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="project-list.html">List</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navprojectSingle"
                aria-expanded="false"
                aria-controls="navprojectSingle">
                Single
              </a>
              <div id="navprojectSingle" class="collapse  show " data-bs-parent="#navProject">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link " href="project-overview.html">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-task.html">Task</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  active " href="project-budget.html">Budget</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-team.html">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-files.html">Files</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-summary.html">Summary</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="add-project.html">Create Project</a>
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
              <a class="nav-link " href="../sign-in.html">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../sign-up.html">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../forget-password.html">Forget Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="notification-history.html">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../404-error.html">404 Error</a>
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
          data-bs-target="#navecommerce"
          aria-expanded="false"
          aria-controls="navecommerce">
          <i class="nav-icon fe fe-shopping-bag me-2"></i>
          Ecommerce
        </a>
        <div id="navecommerce" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a
                class="nav-link  collapsed "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navproduct"
                aria-expanded="false"
                aria-controls="navproduct">
                Product
              </a>
              <div id="navproduct" class="collapse " data-bs-parent="#navProduct">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce/product-grid.html">Grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce/product-grid-with-sidebar.html">Grid Sidebar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce/products.html">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce/product-single.html">Product Single</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce/product-single-v2.html">Product Single v2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce/add-product.html">Add Product</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/shopping-cart.html">Shopping Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/checkout.html">Checkout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/order.html">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/order-single.html">Order Single</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/order-history.html">Order History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/order-summary.html">Order Summary</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="ecommerce/customers.html">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/customer-single.html">Customer Single</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ecommerce/add-customer.html">Add Customer</a>
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
              <a class="nav-link " href="layouts/layout-horizontal.html">Top</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="layouts/layout-compact.html">Compact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="layouts/layout-vertical.html">Vertical</a>
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
        <a class="nav-link " href="chat-app.html">
          <i class="nav-icon fe fe-message-square me-2"></i>
          Chat
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="task-kanban.html">
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
        <a class="nav-link " href="mail.html">
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
        <a class="nav-link " href="calendar.html">
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
              <a class="nav-link " href="basic-table.html">Basic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="datatables.html">Data Tables</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="../help-center.html">
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
              <a class="nav-link " href="setting-general.html">General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="setting-google.html">Google</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="setting-social.html">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="setting-social-login.html">Social Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="setting-payment.html">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="setting-smpt.html">SMPT</a>
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
        <a class="nav-link" href="docs/index.html">
          <i class="nav-icon fe fe-clipboard me-2"></i>
          Documentation
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link" href="docs/changelog.html">
          <i class="nav-icon fe fe-git-pull-request me-2"></i>
          Changelog
          <span class="text-primary ms-1" id="changelog"></span>
        </a>
      </li>
    </ul>
    <!-- Card -->
    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8 border-0">
      <div class="card-body py-6">
        <img src="assets/images/background/giftbox.png" alt="" />
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
                                                    <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
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
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
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
                                                    <img src="assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
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
                                                    <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
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
                                <a href="../notification-history.html" class="text-link fw-semibold">See all Notifications</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- List -->
                <li class="dropdown ms-2">
                    <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md avatar-indicators avatar-online">
                            <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
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
                                <a class="dropdown-item" href="../profile-edit.html">
                                    <i class="fe fe-user me-2"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../student-subscriptions.html">
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
                                <a class="dropdown-item" href="index-2.html">
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
        <section class="container-fluid p-4">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="d-flex flex-column flex-lg-row gap-2 align-items-lg-center justify-content-between mb-2">
                <div>
                  <h1 class="mb-0 h2 fw-bold">Geeks UI - Design & Development</h1>
                </div>
                <!-- avatar group -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group">
                    <!-- avatar -->
                    <span class="avatar avatar-md">
                      <!-- img -->
                      <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle imgtooltip" data-template="one" />
                      <span id="one" class="d-none">
                        <small class="fw-semibold">Paul Haney</small>
                      </span>
                    </span>
                    <!-- avatar -->
                    <span class="avatar avatar-md">
                      <!-- img -->
                      <img alt="avatar" src="assets/images/avatar/avatar-2.jpg" class="rounded-circle imgtooltip" data-template="two" />
                      <span id="two" class="d-none">
                        <small class="fw-semibold">Gali Linear</small>
                      </span>
                    </span>
                    <!-- avatar -->
                    <span class="avatar avatar-md">
                      <!-- img -->
                      <img alt="avatar" src="assets/images/avatar/avatar-3.jpg" class="rounded-circle imgtooltip" data-template="three" />
                      <span id="three" class="d-none">
                        <small class="fw-semibold">Mary Holler</small>
                      </span>
                    </span>
                    <!-- avatar -->
                    <span class="avatar avatar-md">
                      <!-- img -->
                      <img alt="avatar" src="assets/images/avatar/avatar-4.jpg" class="rounded-circle imgtooltip" data-template="four" />
                      <span id="four" class="d-none">
                        <small class="fw-semibold">Lio Nordal</small>
                      </span>
                    </span>
                    <!-- avatar -->
                    <span class="avatar avatar-md">
                      <span class="avatar-initials rounded-circle bg-light text-dark">5+</span>
                    </span>
                  </div>
                  <!-- icon  -->
                  <a href="#" class="btn btn-icon btn-white border border-2 rounded-circle btn-dashed ms-2">+</a>
                </div>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row mb-4">
            <!-- col -->
            <div class="col-12">
              <!-- nav -->
              <ul class="nav nav-lb-tab">
                <!-- nav link -->
                <li class="nav-item ms-0 me-3">
                  <a class="nav-link" href="project-overview.html">Overview</a>
                </li>
                <li class="nav-item mx-3">
                  <a class="nav-link" href="project-task.html">Task</a>
                </li>
                <!-- nav link -->
                <li class="nav-item mx-3">
                  <a class="nav-link active" href="project-budget.html">Budget</a>
                </li>
                <!-- nav link -->
                <li class="nav-item mx-3">
                  <a class="nav-link" href="project-files.html">Files</a>
                </li>
                <!-- nav link -->
                <li class="nav-item mx-3">
                  <a class="nav-link" href="project-team.html">Team</a>
                </li>
                <!-- nav link -->
                <li class="nav-item mx-3">
                  <a class="nav-link" href="project-summary.html">Summary</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12">
              <!-- card -->
              <div class="card">
                <!-- card body -->
                <div>
                  <!-- row -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="border-bottom p-4 d-flex flex-column gap-3">
                        <div class="d-flex flex-column gap-4">
                          <h3 class="mb-0 card-title">Budget</h3>
                          <div class="d-flex justify-content-between">
                            <div>
                              <span>
                                <span class="text-dark fw-bold">$52,000</span>
                                (Total)
                              </span>
                            </div>
                            <div>
                              <span>
                                <span class="text-dark fw-bold">$8,770</span>
                                Remaining
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="progress" style="height: 8px">
                          <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                          <div class="progress-bar bg-success" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                          <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-4 col-md-12 col-12">
                      <div class="d-flex align-items-center justify-content-between p-4">
                        <div class="">
                          <h2 class="h1 fw-bold mb-0">$52,000</h2>
                          <p class="mb-0">Total Budget</p>
                        </div>
                        <div class="">
                          <div class="icon-shape icon-lg bg-light-primary text-primary rounded-circle">
                            <i class="fe fe-dollar-sign fs-3"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-4 col-md-12 col-12 border-start">
                      <div class="d-flex align-items-center justify-content-between p-4">
                        <div class="">
                          <h2 class="h1 fw-bold mb-0">$43,230</h2>
                          <p class="">Total Spent</p>
                        </div>
                        <div class="ms-3">
                          <div class="icon-shape icon-lg bg-light-danger text-danger rounded-circle">
                            <i class="fe fe-shopping-cart fs-3"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-4 col-md-12 col-12 border-start">
                      <div class="d-flex align-items-center justify-content-between p-4">
                        <div class="">
                          <h2 class="h1 fw-bold mb-0">$8,770</h2>
                          <p class="mb-0">Remaining</p>
                        </div>
                        <div class="">
                          <div class="icon-shape icon-lg bg-light-success text-success rounded-circle">
                            <i class="fe fe-pie-chart fs-3"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row gy-4 mb-4">
            <!-- col -->
            <div class="col-lg-6">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="mb-3">Expenses</h4>
                  <div id="budgetExpenseChart"></div>
                </div>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-6">
              <!-- card -->
              <div class="card h-100">
                <!-- card body -->
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Budget Category</h4>
                </div>
                <!-- row -->

                <!-- table -->
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 table-centered table-hover">
                    <thead class="table-light">
                      <tr>
                        <th>Category</th>
                        <th>Total</th>
                        <th>Percentage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-warning me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Design
                        </td>
                        <td>$9000.00</td>
                        <td>23%</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Saas Services
                        </td>
                        <td>$4500.00</td>
                        <td>10%</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-danger me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Development
                        </td>
                        <td>$9030.00</td>
                        <td>23.5%</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-primary me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          SEO
                        </td>
                        <td>$6800.00</td>
                        <td>18%</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Entertainment
                        </td>
                        <td>$2400.00</td>
                        <td>4%</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Marketing
                        </td>
                        <td>$8320.00</td>
                        <td>19%</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Extra
                        </td>
                        <td>$2000.00</td>
                        <td>3.5%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <!-- col -->
            <div class="col-12">
              <!-- card -->
              <div class="card">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Budget Details</h4>
                </div>
                <!-- table -->
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 table-hover table-centered">
                    <thead class="table-light">
                      <tr>
                        <th>Type</th>
                        <th>Total Budget</th>
                        <th>Expenses (USD)</th>
                        <th>Expenses(%)</th>
                        <th>Remaining(USD)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Concept
                        </td>
                        <td>$12,000</td>
                        <td>$6,500</td>
                        <td>
                          52%
                          <i class="bi bi-arrow-up text-danger"></i>
                        </td>
                        <td>$5500</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-warning me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Design
                        </td>
                        <td>$18,000</td>
                        <td>$8,000</td>
                        <td>
                          45%
                          <i class="bi bi-arrow-down text-success"></i>
                        </td>
                        <td>$10,000</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-danger me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Development
                        </td>
                        <td>$64,000</td>
                        <td>$38,000</td>
                        <td>
                          54%
                          <i class="bi bi-arrow-down text-success"></i>
                        </td>
                        <td>$34,000</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-primary me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          SEO
                        </td>
                        <td>$8,000</td>
                        <td>$3,000</td>
                        <td>
                          65%
                          <i class="bi bi-arrow-down text-success"></i>
                        </td>
                        <td>$5,000</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Extra
                        </td>
                        <td>$2,000</td>
                        <td>$1,500</td>
                        <td>
                          85%
                          <i class="bi bi-arrow-up text-danger"></i>
                        </td>
                        <td>$500</td>
                      </tr>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                          </svg>
                          Marketing
                        </td>
                        <td>$34,500</td>
                        <td>$24,500</td>
                        <td>
                          88%
                          <i class="bi bi-arrow-up text-danger"></i>
                        </td>
                        <td>$10,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
<script src="assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>


    <script src="assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>

    <script src="assets/js/vendors/tooltip.js"></script>

    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/js/vendors/chart.js"></script>
  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/project-budget.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:49:37 GMT -->
</html>
