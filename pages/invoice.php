<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/pages/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:48:31 GMT -->
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

    <link rel="canonical" href="invoice.html" />

    <title>Dashboard Payment Method| Geeks - Bootstrap 5 Template</title>
  </head>

  <body>
    <!-- Page Content -->
    <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid px-0">
    <a class="navbar-brand" href="../index-2.html"><img src="../assets/images/brand/logo/logo.svg" alt="Geeks" /></a>
    <!-- Mobile view nav wrap -->
    <div class="ms-auto d-flex align-items-center order-lg-3">
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
      <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
        <li class="dropdown d-inline-block stopevent position-static">
          <a
            class="btn btn-light btn-icon rounded-circle indicator indicator-primary"
            href="#"
            role="button"
            id="dropdownNotificationSecond"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
            <i class="fe fe-bell"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg position-absolute mx-3 my-5" aria-labelledby="dropdownNotificationSecond">
            <div>
              <div class="border-bottom px-3 pb-3 d-flex align-items-center">
                <span class="h5 mb-0">Notifications</span>
                <a href="# ">
                  <span class="align-middle"><i class="fe fe-settings me-1"></i></span>
                </a>
              </div>
              <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
                <li class="list-group-item bg-light">
                  <div class="row">
                    <div class="col">
                      <a class="text-body" href="#">
                        <div class="d-flex">
                          <img src="../assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                          <div class="ms-3">
                            <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                            <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
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
                            <p class="mb-3 text-body">Just launched a new Courses React for Beginner.</p>
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
                            <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
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
                            <p class="mb-3 text-body">You earn new certificate for complete the Javascript Beginner course.</p>
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

        <li class="dropdown ms-2 d-inline-block position-static">
          <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <div class="avatar avatar-md avatar-indicators avatar-online">
              <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
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
    <div>
      <!-- Button -->
      <button
        class="navbar-toggler collapsed ms-2"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-default"
        aria-controls="navbar-default"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="icon-bar top-bar mt-0"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
    </div>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbar-default">
      <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">Categories</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web Development</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="course-category.html">Bootstrap</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">React</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">GraphQl</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Gatsby</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Grunt</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Svelte</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Meteor</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">HTML5</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Angular</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Design</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="course-category.html">Graphic Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Illustrator</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">UX / UI Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Figma Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Adobe XD</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Sketch</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Icon Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Photoshop</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Mobile App</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">IT Software</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Marketing</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Music</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Life Style</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Business</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Photography</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
          <ul class="dropdown-menu" aria-labelledby="navbarLanding">
            <li>
              <h4 class="dropdown-header">Landings</h4>
            </li>
            <li>
              <a href="../index-2.html" class="dropdown-item">
                <span>Home Default</span>
              </a>
            </li>
            <li>
              <a href="landings/landing-abroad.html" class="dropdown-item">
                <span>Home Abroad</span>
              </a>
            </li>
            <li>
              <a href="../mentor/mentor.html" class="dropdown-item">
                <span>Home Mentor</span>
              </a>
            </li>
            <li>
              <a href="landings/landing-education.html" class="dropdown-item">Home Education</a>
            </li>
            <li>
              <a href="landings/home-academy.html" class="dropdown-item">Home Academy</a>
            </li>
            <li>
              <a href="landings/landing-courses.html" class="dropdown-item">Home Courses</a>
            </li>
            <li>
              <a href="landings/landing-sass.html" class="dropdown-item">Home Sass</a>
            </li>
            <li class="border-bottom my-2"></li>
            <li>
              <a href="landings/course-lead.html" class="dropdown-item">Lead Course</a>
            </li>
            <li>
              <a href="landings/request-access.html" class="dropdown-item">Request Access</a>
            </li>

            <li>
              <a href="landings/landing-job.html" class="dropdown-item">Job Listing</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Courses</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="course-filter-grid.html">Course Grid</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-filter-list.html">Course List</a>
                </li>
                <li class="border-bottom my-2"></li>

                <li>
                  <a class="dropdown-item" href="course-category.html">Course Category v1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category-v2.html">Course Category v2</a>
                </li>
                <li class="border-bottom my-2"></li>

                <li>
                  <a class="dropdown-item" href="course-single.html">Course Single v1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-single-v2.html">Course Single v2</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-single-v3.html">Course Single v3</a>
                </li>
                <li class="border-bottom my-2"></li>
                <li>
                  <a class="dropdown-item" href="course-resume.html">Course Resume</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-checkout.html">Course Checkout</a>
                </li>
                <li>
                  <a class="dropdown-item" href="add-course.html">Add New Course</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="dashboard-project.html">
                Projects
                <span class="badge bg-primary ms-2">New</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="dashboard-quiz.html">
                Quizzes
                <span class="badge bg-primary ms-2">New</span>
              </a>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Paths</a>
              <ul class="dropdown-menu">
                <li>
                  <a href="course-path.html" class="dropdown-item">Browse Path</a>
                </li>
                <li>
                  <a href="course-path-single.html" class="dropdown-item">Path Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Blog</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="blog.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="blog-single.html">Article</a>
                </li>
                <li>
                  <a class="dropdown-item" href="blog-category.html">Category</a>
                </li>
                <li>
                  <a class="dropdown-item" href="blog-sidebar.html">Sidebar</a>
                </li>
              </ul>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Career</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="career.html">Overview</a>
                </li>
                <li>
                  <a class="dropdown-item" href="career-list.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="career-single.html">Opening</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Portfolio</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="portfolio.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="portfolio-single.html">Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                <span>Mentor</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../mentor/mentor.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../mentor/mentor-list.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../mentor/mentor-single.html">Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Job</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="landings/landing-job.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/job-listing.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/job-grid.html">Grid</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/job-single.html">Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/company-list.html">Company List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/company-about.html">Company Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Specialty</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                </li>
                <li>
                  <a class="dropdown-item" href="404-error.html">Error 404</a>
                </li>
                <li>
                  <a class="dropdown-item" href="maintenance-mode.html">Maintenance Mode</a>
                </li>
                <li>
                  <a class="dropdown-item" href="terms-condition-page.html">Terms & Conditions</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>

            <li>
              <a class="dropdown-item" href="about.html">About</a>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help Center</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="help-center.html">Help Center</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-faq.html">FAQ's</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-guide.html">Guide</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-guide-single.html">Guide Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-support.html">Support</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="pricing.html">Pricing</a>
            </li>
            <li>
              <a class="dropdown-item" href="compare-plan.html">Compare Plan</a>
            </li>

            <li>
              <a class="dropdown-item" href="contact.html">Contact</a>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
              <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                <!-- dropdown submenu open right -->
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                  </ul>
                </li>

                <!-- dropdown submenu open left -->
                <li class="dropdown-submenu dropstart">
                  <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
            <li>
              <h4 class="dropdown-header">Accounts</h4>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Instructor
                <span class="badge bg-primary ms-2">New</span>
              </a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Instructor</h5>
                  <p class="dropdown-text mb-0">Instructor dashboard for manage courses and earning.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li>
                  <a class="dropdown-item" href="dashboard-instructor.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-profile.html">Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-courses.html">My Courses</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-order.html">Orders</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-reviews.html">Reviews</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-students.html">Students</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-payouts.html">Payouts</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-earning.html">Earning</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="instructor-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="instructor-quiz-details.html">Single</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="instructor-quiz-result.html">Result</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Students
                <span class="badge bg-primary ms-2">New</span>
              </a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Students</h5>
                  <p class="dropdown-text mb-0">Students dashboard to manage your courses and subscriptions.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li>
                  <a class="dropdown-item" href="dashboard-student.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="student-subscriptions.html">Subscriptions</a>
                </li>
                <li>
                  <a class="dropdown-item" href="payment-method.html">Payments</a>
                </li>
                <li>
                  <a class="dropdown-item" href="billing-info.html">Billing Info</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Invoice</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="invoice.html">Invoice</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="invoice-details.html">Invoice Details</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a class="dropdown-item" href="dashboard-student.html">Bookmarked</a>
                </li>
                <li>
                  <a class="dropdown-item" href="dashboard-student.html">My Path</a>
                </li>
                <li>
                  <a class="dropdown-item" href="all-courses.html">All Courses</a>
                </li>
                <li>
                  <a class="dropdown-item" href="learning-path.html">Learning Path</a>
                </li>

                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="student-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="quiz-blank.html">Quiz Blank</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="my-quiz.html">My Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="student-quiz-attempt.html">Quiz Attempt</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="student-quiz-start.html">Quiz Single</a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="quiz-result.html">Quiz Result</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Certificate</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="certificate-blank.html">Certificate</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="my-certificate.html">My Certificate</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Learning</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="my-learning.html">My Learning</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="learning-single.html">Learning Single</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="learning-path-single.html">Learning Path Single</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">My Projects</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="project-blank.html">Project Blank</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="dashboard-project.html">Dashboard Project</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-single.html">Project Single</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Admin</a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Master Admin</h5>
                  <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user, site setting , and work with amazing apps.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li class="px-3 d-grid">
                  <a href="dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>
            <li>
              <a class="dropdown-item" href="sign-in.html">Sign In</a>
            </li>
            <li>
              <a class="dropdown-item" href="sign-up.html">Sign Up</a>
            </li>
            <li>
              <a class="dropdown-item" href="forget-password.html">Forgot Password</a>
            </li>
            <li>
              <a class="dropdown-item" href="profile-edit.html">Edit Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="security.html">Security</a>
            </li>
            <li>
              <a class="dropdown-item" href="social-profile.html">Social Profiles</a>
            </li>
            <li>
              <a class="dropdown-item" href="notifications.html">Notifications</a>
            </li>
            <li>
              <a class="dropdown-item" href="profile-privacy.html">Privacy Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="delete-profile.html">Delete Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="linked-accounts.html">Linked Accounts</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fe fe-more-horizontal"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
            <div class="list-group">
              <a class="list-group-item list-group-item-action border-0" href="../docs/index.html">
                <div class="d-flex align-items-center">
                  <i class="fe fe-file-text fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">Documentations</h5>
                    <p class="mb-0 fs-6">Browse the all documentation</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="../docs/bootstrap-5-snippets.html">
                <div class="d-flex align-items-center">
                  <i class="bi bi-files fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">Snippet</h5>
                    <p class="mb-0 fs-6">Bunch of Snippet</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="../docs/changelog.html">
                <div class="d-flex align-items-center">
                  <i class="fe fe-layers fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">
                      Changelog
                      <span class="text-primary ms-1" id="changelog"></span>
                    </h5>
                    <p class="mb-0 fs-6">See what's new</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="https://geeksui.codescandy.com/geeks-rtl/" target="_blank">
                <div class="d-flex align-items-center">
                  <i class="fe fe-toggle-right fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">RTL demo</h5>
                    <p class="mb-0 fs-6">RTL Pages</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
      <form class="mt-3 mt-lg-0 me-lg-5 d-flex align-items-center">
        <span class="position-absolute ps-3 search-icon">
          <i class="fe fe-search"></i>
        </span>
        <label for="search" class="visually-hidden"></label>
        <input type="search" id="search" class="form-control ps-6" placeholder="Search Courses" />
      </form>
    </div>
  </div>
</nav>

    <!-- Sidebar -->
    <!-- Sidebar -->
<div class="position-relative">
  <nav class="navbar navbar-expand-lg sidenav sidenav-navbar">
    <!-- Menu -->
    <a class="d-xl-none d-lg-none d-block text-inherit fw-bold" href="#">Menu</a>
    <!-- Button -->

    <button
      class="navbar-toggler d-lg-none icon-shape icon-sm rounded bg-primary text-light"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#sidenavNavbar"
      aria-controls="sidenavNavbar"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="fe fe-menu"></span>
    </button>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenavNavbar">
      <div class="navbar-nav flex-column mt-4 mt-lg-0 d-flex flex-column gap-3">
        <ul class="list-unstyled mb-0">
          <!-- Nav item -->

          <li class="nav-item">
            <a class="nav-link" href="dashboard-student.html">
              <i class="fe fe-home nav-icon"></i>
              Dashboard
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="my-learning.html">
              <i class="fe fe-award nav-icon"></i>
              My Learning
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="project-blank.html">
              <i class="fe fe-edit nav-icon"></i>
              My Projects
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item nav-collapse">
            <a class="nav-sub-link" data-bs-toggle="collapse" href="#collapseExample">
              <i class="fe fe-help-circle nav-icon"></i>
              My Quiz
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="list-unstyled py-2 px-4">
                <li class="nav-item">
                  <a class="nav-link" href="quiz-blank.html">Quiz</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="my-quiz.html">My Quiz</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="student-quiz-start.html">Quiz Single</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="quiz-result.html">Quiz Result</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- Nav item -->
          <li class="nav-item nav-collapse">
            <a class="nav-sub-link" data-bs-toggle="collapse" href="#collapseCertificat">
              <i class="fe fe-file-text nav-icon"></i>
              Certificate
            </a>
            <div class="collapse py-2 px-4" id="collapseCertificat">
              <ul class="list-unstyled">
                <li class="nav-item">
                  <a class="nav-link" href="certificate-blank.html">Certificate</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="my-certificate.html">My Certificate</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="student-subscriptions.html">
              <i class="fe fe-calendar nav-icon"></i>
              Subscription
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="billing-info.html">
              <i class="fe fe-info nav-icon"></i>
              Billing Info
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="payment-method.html">
              <i class="fe fe-credit-card nav-icon"></i>
              Payment
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="invoice.html">
              <i class="fe fe-file nav-icon"></i>
              Invoice
            </a>
          </li>
        </ul>
        <!-- Navbar header -->
        <div class="d-flex flex-column gap-1">
          <span class="navbar-header">Learn</span>
          <ul class="list-unstyled mb-0">
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="all-courses.html">
                <i class="fe fe-youtube nav-icon"></i>
                All Courses
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="learning-path.html">
                <i class="fe fe-trending-up nav-icon"></i>
                Learning path
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="dashboard-project.html">
                <i class="fe fe-edit nav-icon"></i>
                Projects
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="dashboard-quiz.html">
                <i class="fe fe-credit-card nav-icon"></i>
                Quizzes
              </a>
            </li>
          </ul>
        </div>
        <!-- Navbar header -->
        <div class="d-flex flex-column gap-1">
          <span class="navbar-header">Account Settings</span>
          <ul class="list-unstyled mb-0">
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="profile-edit.html">
                <i class="fe fe-settings nav-icon"></i>
                Edit Profile
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="security.html">
                <i class="fe fe-user nav-icon"></i>
                Security
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="social-profile.html">
                <i class="fe fe-refresh-cw nav-icon"></i>
                Social Profiles
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="notifications.html">
                <i class="fe fe-bell nav-icon"></i>
                Notifications
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="profile-privacy.html">
                <i class="fe fe-lock nav-icon"></i>
                Profile Privacy
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="delete-profile.html">
                <i class="fe fe-trash nav-icon"></i>
                Delete Profile
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="linked-accounts.html">
                <i class="fe fe-user nav-icon"></i>
                Linked Accounts
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="../index-2.html">
                <i class="fe fe-power nav-icon"></i>
                Sign Out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>

    <div class="db-content">
      <div class="container mb-4">
        <div class="row mb-5">
          <div class="col-12">
            <h1 class="mb-0 h2">Invoice</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Card -->
            <div class="card mb-4 overflow-hidden">
              <!-- Card header -->
              <div class="card-header border-bottom-0">
                <h3 class="mb-0">Invoices</h3>
                <p class="mb-0">You can find all of your order Invoices.</p>
              </div>
              <!-- Table -->
              <div class="table-invoice table-responsive">
                <table class="table mb-0 text-nowrap table-centered table-hover">
                  <thead class="table-light">
                    <tr>
                      <th>Order ID</th>
                      <th>Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="invoice-details.html">#1008</a></td>
                      <td>17 April 2020, 10:45pm</td>
                      <td>$39.00</td>
                      <td><span class="badge bg-danger">Due</span></td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="invoice-details.html">#1007</a></td>
                      <td>17 April 2020, 10:45pm</td>
                      <td>$39.00</td>
                      <td>
                        <span class="badge bg-success">Complete</span>
                      </td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="invoice-details.html">#1006</a></td>
                      <td>17 Feb 2020, 10:45pm</td>
                      <td>$39.00</td>
                      <td>
                        <span class="badge bg-success">Complete</span>
                      </td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="invoice-details.html">#1005</a></td>
                      <td>17 January 2020, 10:45pm</td>
                      <td>$39.00</td>
                      <td>
                        <span class="badge bg-success">Complete</span>
                      </td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="invoice-details.html">#1004</a></td>
                      <td>17 Dec 2019, 10:45pm</td>
                      <td>$39.00</td>
                      <td>
                        <span class="badge bg-success">Complete</span>
                      </td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="invoice-details.html">#1003</a></td>
                      <td>17 Nov 2019, 10:45pm</td>
                      <td>$39.00</td>
                      <td>
                        <span class="badge bg-success">Complete</span>
                      </td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="invoice-details.html">#1002</a></td>
                      <td>17 Oct 2019, 10:45pm</td>
                      <td>$39.00</td>
                      <td>
                        <span class="badge bg-success">Complete</span>
                      </td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="invoice-details.html">#1001</a></td>
                      <td>17 Sept 2019, 10:45pm</td>
                      <td>$39.00</td>
                      <td>
                        <span class="badge bg-success">Complete</span>
                      </td>
                      <td>
                        <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download" download></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Scroll top -->
    <div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
</div>

    <!-- Scripts -->
    <!-- Libs JS -->
<script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>


    <script src="../assets/libs/imask/dist/imask.min.js"></script>
    <script src="../assets/js/vendors/inputmask.js"></script>
    <script src="../assets/js/vendors/validation.js"></script>
    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="../assets/js/vendors/choice.js"></script>
    <script src="../assets/js/vendors/navbar-nav.js"></script>
  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:48:31 GMT -->
</html>
