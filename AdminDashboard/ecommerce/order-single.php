<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/order-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:49:44 GMT -->
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

    <link rel="canonical" href="order-single.html" />
    <title>Order Single | Geeks - Academy Admin Template</title>
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
                    <a class="nav-link " href="product-grid.html">Grid</a>
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
              <a class="nav-link  active " href="order-single.html">Order Single</a>
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
        <section class="container-fluid p-4">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="border-bottom pb-3 mb-3">
                <div>
                  <h1 class="mb-0 h2 fw-bold">Order Single</h1>
                  <!-- Breadcrumb -->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="admin-dashboard.html">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="#">Ecommerce</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Order Single</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4">
            <div class="col-xl-8 col-lg-7 col-12">
              <div class="d-flex flex-column gap-4">
                <!-- card -->
                <div class="card">
                  <!-- card header -->
                  <div class="card-header border-bottom-0">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <!-- heading -->
                        <h4 class="mb-1">Order ID: GK00017</h4>
                        <span>
                          Order Date: a October 03,2022 t 6:31 pm
                          <span class="badge bg-success-soft ms-2">Paid</span>
                        </span>
                      </div>
                      <div>
                        <!-- button -->
                        <a href="#" class="btn btn-primary btn-sm">Invoice</a>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <!-- Table -->
                    <table class="table mb-0 text-nowrap">
                      <!-- Table Head -->
                      <thead class="table-light">
                        <tr>
                          <th>Products</th>
                          <th>Items</th>
                          <th>Amounts</th>
                        </tr>
                      </thead>
                      <!-- tbody -->
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="text-inherit">
                              <div class="d-flex flex-lg-row flex-column gap-lg-4 gap-2">
                                <div>
                                  <img src="../assets/images/ecommerce/ecommerce-img-1.jpg" alt="" class="img-4by3-md rounded" />
                                </div>
                                <div class="">
                                  <h5 class="mb-0">White & Red Nike Athletic Shoe</h5>
                                  <span class="text-body">
                                    SKU:
                                    <span>Shoe01</span>
                                  </span>
                                </div>
                              </div>
                            </a>
                          </td>
                          <td>1</td>
                          <td>$120.00</td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-inherit">
                              <div class="d-flex flex-lg-row flex-column gap-lg-4 gap-2">
                                <!-- img -->
                                <div>
                                  <img src="../assets/images/ecommerce/ecommerce-img-2.jpg" alt="" class="img-4by3-md rounded" />
                                </div>
                                <div class="">
                                  <!-- heading -->
                                  <h5 class="mb-0">Wayfarer Styled Sunglasses</h5>
                                  <!-- body -->
                                  <span class="text-body">
                                    SKU:
                                    <span>Glasses01</span>
                                  </span>
                                </div>
                              </div>
                            </a>
                          </td>
                          <td>1</td>
                          <td>$220.00</td>
                        </tr>
                        <tr>
                          <td class="border-bottom-0 pb-0"></td>
                          <td colspan="1" class="fw-medium text-dark border-bottom-0 pb-0">
                            <!-- text -->
                            Sub Total :
                          </td>
                          <td class="fw-medium text-dark border-bottom-0 pb-0 text-end">
                            <!-- text -->
                            $340.00
                          </td>
                        </tr>
                        <tr>
                          <td class="border-bottom-0 pb-0"></td>
                          <td colspan="1" class="fw-medium text-dark border-bottom-0 pb-0">
                            <!-- text -->
                            Discount (GKDIS15%) :
                          </td>
                          <td class="fw-medium text-dark border-bottom-0 pb-0 text-end">
                            <!-- text -->
                            -$51.00
                          </td>
                        </tr>
                        <tr>
                          <td class="border-bottom-0 pb-0"></td>
                          <td colspan="1" class="fw-medium text-dark border-bottom-0 pb-0">
                            <!-- text -->
                            Shipping Charge :
                          </td>
                          <td class="fw-medium text-dark border-bottom-0 pb-0 text-end">
                            <!-- text -->
                            $15.00
                          </td>
                        </tr>
                        <tr>
                          <td class="border-bottom-0"></td>
                          <td colspan="1" class="fw-semibold text-dark">
                            <!-- text -->
                            Tax Vat 19% (included) :
                          </td>
                          <td class="fw-semibold text-dark text-end">
                            <!-- text -->
                            $64.00
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td colspan="1" class="fw-semibold text-dark">
                            <!-- text -->
                            Paid by Customer
                          </td>
                          <td class="fw-semibold text-dark text-end">
                            <!-- text -->
                            $368.00
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="d-md-flex justify-content-between align-items-center mb-5">
                      <div>
                        <!-- text -->
                        <h4 class="mb-3 mb-md-0">Order Status</h4>
                      </div>
                      <div>
                        <!-- button -->
                        <a href="#" class="btn btn-light-primary btn-sm text-primary">Change Address</a>
                        <a href="#" class="btn btn-light-danger btn-sm text-danger ms-2">Cancel Order</a>
                      </div>
                    </div>
                    <div>
                      <!-- List group -->
                      <ul class="list-group list-group-flush list-timeline-activity">
                        <li class="list-group-item px-0 pt-0 border-0 mb-4">
                          <div class="row">
                            <!-- col -->
                            <div class="col-auto">
                              <div class="icon-shape icon-md rounded-circle bg-primary text-white position-relative z-1">
                                <i class="fe fe-shopping-cart"></i>
                              </div>
                            </div>
                            <!-- col -->
                            <div class="col ms-n2 mt-1">
                              <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Order Placed</h4>
                                <h5 class="mb-0">An order has been placed.</h5>
                              </div>
                              <span class="fs-6">Wed, 15 April 2022 at 4:30 pm</span>
                            </div>
                          </div>
                        </li>
                        <!-- List group -->
                        <li class="list-group-item px-0 pt-0 border-0 mb-4">
                          <div class="row">
                            <!-- col -->
                            <div class="col-auto">
                              <div class="icon-shape icon-md rounded-circle bg-primary text-white position-relative z-1">
                                <i class="fe fe-shopping-bag"></i>
                              </div>
                            </div>
                            <!-- col -->
                            <div class="col ms-n2 mt-1">
                              <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Packed Thu, 16 April 2022</h4>
                                <h5 class="mb-0">Your Item has been picked up by courier patner</h5>
                              </div>
                              <span class="fs-6">Wed, 15 April 2022 at 4:30 pm</span>
                            </div>
                          </div>
                        </li>
                        <!-- List group -->
                        <li class="list-group-item px-0 pt-0 border-0 mb-4">
                          <div class="row">
                            <!-- col -->
                            <div class="col-auto">
                              <div class="icon-shape icon-md rounded-circle bg-primary text-white position-relative z-1">
                                <i class="fe fe-box"></i>
                              </div>
                            </div>
                            <!-- col -->
                            <div class="col ms-n2 mt-1">
                              <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Shipping Thu, 16 April 2022</h4>
                                <div class="d-flex flex-column gap-1">
                                  <h5 class="mb-0">BlueDart Logistics GEEK3214566</h5>

                                  <h5 class="mb-0">Your item has been shipped.</h5>
                                  <span class="fs-6">Thu, 16 April 2022 at 5:00 pm</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- List group -->
                        <li class="list-group-item px-0 pt-0 border-0">
                          <div class="row">
                            <!-- col -->
                            <div class="col-auto">
                              <div class="icon-shape icon-md rounded-circle bg-light-primary text-primary position-relative z-1">
                                <i class="fe fe-gift"></i>
                              </div>
                            </div>
                            <!-- col -->
                            <div class="col ms-n2 mt-1">
                              <h4 class="mb-0">Delivered</h4>
                              <div class="d-flex flex-column gap-1">
                                <h5 class="mb-0">Order has been successfully delivered</h5>
                                <span class="fs-6">Thu, 17 April 2022 at 9:50am</span>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- List group -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-12">
              <div class="d-flex flex-column gap-4">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body d-flex flex-column gap-4">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="mb-0">Customer</h4>
                      <a href="#">View Profile</a>
                    </div>
                    <div class="d-flex align-items-center flex-row gap-3">
                      <!-- img -->
                      <img src="../assets/images/avatar/avatar-12.jpg" class="avatar-lg rounded-circle" alt="" />
                      <div class="d-flex flex-column">
                        <!-- title -->
                        <h4 class="mb-0">Harold Gonzalez</h4>
                        <div>
                          <span>Customer since April 5,2022</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card body -->
                  <div class="card-body border-top d-flex flex-column gap-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <!-- text -->
                      <h4 class="mb-0">Contact</h4>
                      <a href="#">Edit</a>
                    </div>
                    <div class="d-flex flex-column gap-2">
                      <!-- text -->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fe fe-mail fs-4"></i>
                        <a href="#" class="">haroldonzalez@gmail.com</a>
                      </div>
                      <div class="d-flex align-items-center gap-2">
                        <i class="fe fe-phone fs-4"></i>
                        <span class="">+(000) 123465 987</span>
                      </div>
                    </div>
                  </div>
                  <!-- card body -->
                  <div class="card-body border-top d-flex flex-column gap-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="mb-0">Shipping Address</h4>
                      <a href="#">Edit</a>
                    </div>
                    <div>
                      <!-- address -->
                      <p class="mb-0">
                        3812 Orchard Street
                        <br />
                        Bloomington,
                        <br />
                        Minnesota 55431,
                        <br />
                        United States
                        <br />
                        +(000) 123465 987
                      </p>
                    </div>
                  </div>
                  <!-- card body -->
                  <div class="card-body border-top d-flex flex-column gap-3">
                    <div class="">
                      <!-- heading -->
                      <h4 class="mb-0">Billing Address</h4>
                    </div>
                    <div>
                      <!-- address -->
                      <p class="mb-0">
                        3812 Orchard Street
                        <br />
                        Bloomington,
                        <br />
                        Minnesota 55431,
                        <br />
                        United States
                        <br />
                        +(000) 123465 987
                      </p>
                    </div>
                  </div>
                </div>
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body d-flex flex-column gap-3">
                    <div class="">
                      <h4 class="mb-0">Payment Details</h4>
                    </div>
                    <div class="d-flex flex-column gap-2">
                      <!-- text -->
                      <div class="d-flex align-items-center justify-content-between">
                        <span>Transactions:</span>
                        <span class="text-dark">#GK444TO10000</span>
                      </div>
                      <!-- text -->
                      <div class="d-flex align-items-center justify-content-between">
                        <span>Payment Method:</span>
                        <span class="text-dark">Credit Card</span>
                      </div>
                      <!-- text -->

                      <div class="d-flex align-items-center justify-content-between">
                        <span>Card Holder Name:</span>
                        <span class="text-dark">Harold Gonzalez</span>
                      </div>
                      <!-- text -->
                      <div class="d-flex align-items-center justify-content-between">
                        <span>Card Number:</span>
                        <span class="text-dark">xxxx xxxx xxxx 6779</span>
                      </div>
                      <!-- text -->
                      <div class="d-flex align-items-center justify-content-between">
                        <span>Total Amount:</span>
                        <span class="text-dark fw-bold">$368.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
<script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>

  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/order-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:49:44 GMT -->
</html>
