<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/pages/course-filter-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:47:57 GMT -->
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

    <link rel="canonical" href="course-filter-list.html" />
    <title>Course List | Geeks - Bootstrap 5 Template</title>
  </head>

  <body class="bg-white">
    <!-- Page Content -->
    <nav class="navbar navbar-expand-lg">
  <div class="container px-0">
    <a class="navbar-brand" href="../index-2.html"><img src="../assets/images/brand/logo/logo.svg" alt="Geeks" /></a>
    <!-- Mobile view nav wrap -->
    <div class="ms-auto d-flex align-items-center order-lg-3">
      <div class="d-flex gap-2 align-items-center">
        <a href="#langaugeModal" class="text-inherit me-2" data-bs-toggle="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-globe text-gray-500" viewBox="0 0 16 16">
            <path
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
          </svg>
        </a>
        <a href="sign-in.html" class="btn btn-outline-dark">Login</a>
        <a href="sign-up.html" class="btn btn-dark d-none d-md-block">Join Now</a>
      </div>
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
                  <a class="dropdown-item" href="course-filter-grid.html">
                    Course Grid
                    
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-filter-list.html">
                    Course List
                    
                  </a>
                </li>
                <li class="border-bottom my-2"></li>

                <li>
                  <a class="dropdown-item" href="course-category.html">Course Category v1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category-v2.html">
                    Course Category v2
                    
                  </a>
                </li>
                <li class="border-bottom my-2"></li>

                <li>
                  <a class="dropdown-item" href="course-single.html">Course Single v1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-single-v2.html">Course Single v2</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-single-v3.html">
                    Course Single v3
                    
                  </a>
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
              <a class="dropdown-item" href="dashboard-project.html">Projects
                <span class="badge bg-primary ms-2">New</span>
              </a>
              </li>
              <li>
              <a class="dropdown-item" href="dashboard-quiz.html">Quizzes
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
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Instructor
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
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Students
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
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="langaugeModal" tabindex="-1" aria-labelledby="langaugeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="modal-title" id="langaugeModalLabel">Choose a language</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
          <a class="text-inherit fw-semibold active" href="#!">English</a>
          <a class="text-inherit fw-semibold" href="#!">Deutsch</a>
          <a class="text-inherit fw-semibold" href="#!">Español</a>
          <a class="text-inherit fw-semibold" href="#!">Français</a>
          <a class="text-inherit fw-semibold" href="#!">Indonesia</a>
          <a class="text-inherit fw-semibold" href="#!">Italiano</a>
          <a class="text-inherit fw-semibold" href="#!">日本語</a>
          <a class="text-inherit fw-semibold" href="#!">한국어</a>
          <a class="text-inherit fw-semibold" href="#!">Nederlands</a>
          <a class="text-inherit fw-semibold" href="#!">Polski</a>
          <a class="text-inherit fw-semibold" href="#!">Português</a>
          <a class="text-inherit fw-semibold" href="#!">Română</a>
          <a class="text-inherit fw-semibold" href="#!">Русский</a>
          <a class="text-inherit fw-semibold" href="#!">ภาษาไทย</a>
          <a class="text-inherit fw-semibold" href="#!">Türkçe</a>
          <a class="text-inherit fw-semibold" href="#!">Tiếng Việt</a>
          <a class="text-inherit fw-semibold" href="#!">中文(简体)</a>
          <a class="text-inherit fw-semibold" href="#!">中文(繁體)</a>
        </div>
      </div>
    </div>
  </div>
</div>

    <main>
      <!--hero Section-->
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-flex flex-column gap-5">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#!">Web Design</a></li>
                    <li class="breadcrumb-item"><a href="#!">UI Design</a></li>
                    <li class="breadcrumb-item" aria-current="page">Courses List Layout</li>
                  </ol>
                </nav>
                <div class="d-flex flex-column">
                  <h1 class="mb-0">Courses List</h1>
                  <p class="mb-0">Explore courses from experienced, real-world experts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--hero Section-->
      <!--Course List-->
      <section class="py-5">
        <div class="container">
          <div class="row gy-5 gy-lg-0">
            <div class="col-xxl-3 col-lg-4 col-12">
              <div class="d-flex flex-column">
                <div class="d-flex flex-row align-items-center justify-content-between mt-2 mb-3">
                  <div class="d-flex flex-row gap-2 align-items-center">
                    <a class="text-inherit d-none d-lg-flex gap-2" href="#">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders text-dark" viewBox="0 0 16 16">
                          <path
                            fill-rule="evenodd"
                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
                        </svg>
                      </span>
                      <span class="fw-semibold text-dark">Filters</span>
                    </a>
                    <a class="text-inherit d-lg-none d-flex flex-row gap-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders text-dark" viewBox="0 0 16 16">
                          <path
                            fill-rule="evenodd"
                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
                        </svg>
                      </span>
                      <span class="fw-semibold text-dark">Filters</span>
                    </a>
                  </div>
                  <div>
                    <button id="clearButton" style="display: none" class="btn btn-light border btn-sm">
                      <span>Clear</span>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                          <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                      </span>
                    </button>
                  </div>
                </div>
                <div class="offcanvas offcanvas-start offcanvas-collapse" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header d-lg-none">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body pt-0 p-lg-0">
                    <div class="d-flex flex-column gap-3">
                      <div class="card">
                        <div class="card-body p-3">
                          <div class="">
                            <!-- Toggle -->
                            <a
                              class="d-flex align-items-center h4 mb-0 justify-content-between"
                              data-bs-toggle="collapse"
                              href="#coursTopic"
                              role="button"
                              aria-expanded="false"
                              aria-controls="coursTopic">
                              <div>Topic</div>
                              <!-- Chevron -->
                              <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                              </span>
                            </a>
                            <!-- Row -->
                            <!-- Collapse -->
                            <div class="collapse show" id="coursTopic" data-bs-parent="#courseAccordion">
                              <div class="d-flex flex-column">
                                <ul class="list-unstyled mb-1 d-flex flex-column gap-1 mt-3">
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexReact" id="flexReact" />
                                      <label class="form-check-label text-secondary" for="flexReact">React</label>
                                    </div>
                                  </li>
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexJavascript" id="flexJavascript" />
                                      <label class="form-check-label text-secondary" for="flexJavascript">Javascript</label>
                                    </div>
                                  </li>
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexAngular" id="flexAngular" />
                                      <label class="form-check-label text-secondary" for="flexAngular">Angular</label>
                                    </div>
                                  </li>
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexNode" id="flexNode" />
                                      <label class="form-check-label text-secondary" for="flexNode">Node</label>
                                    </div>
                                  </li>
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexJs" id="flexJs" />
                                      <label class="form-check-label text-secondary" for="flexJs">Angular Js</label>
                                    </div>
                                  </li>
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexGatsby" id="flexGatsby" />
                                      <label class="form-check-label text-secondary" for="flexGatsby">Gatsby</label>
                                    </div>
                                  </li>
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexGraphic" id="flexGraphic" />
                                      <label class="form-check-label text-secondary" for="flexGraphic">GraphQl</label>
                                    </div>
                                  </li>
                                  <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexVuejs" id="flexVuejs" />
                                      <label class="form-check-label text-secondary" for="flexVuejs">VueJs</label>
                                    </div>
                                  </li>
                                </ul>
                                <div class="collapse" id="collapseContent">
                                  <ul class="list-unstyled mb-0 d-flex flex-column gap-1">
                                    <li class="d-flex flex-row gap-2">
                                      <div class="form-check">
                                        <input class="form-check-input filter-checkbox" type="checkbox" name="flexJavascript1" id="flexJavascript1" />
                                        <label class="form-check-label text-secondary" for="flexJavascript1">Javascript</label>
                                      </div>
                                    </li>
                                    <li class="d-flex flex-row gap-2">
                                      <div class="form-check">
                                        <input class="form-check-input filter-checkbox" type="checkbox" name="flexSCSS" id="flexSCSS" />
                                        <label class="form-check-label text-secondary" for="flexSCSS">SCSS</label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="mt-3">
                                  <a class="btn-collapse fw-semibold" id="toggleButton" data-bs-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">
                                    Show More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-body p-3">
                          <div>
                            <!-- Toggle -->
                            <a
                              class="d-flex align-items-center h4 mb-0 justify-content-between"
                              data-bs-toggle="collapse"
                              href="#coursPrice"
                              role="button"
                              aria-expanded="false"
                              aria-controls="coursPrice">
                              <div>Price</div>
                              <!-- Chevron -->
                              <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                              </span>
                            </a>
                            <!-- Row -->
                            <!-- Collapse -->
                            <div class="collapse show" id="coursPrice" data-bs-parent="#courseAccordion">
                              <ul class="list-unstyled mb-0 d-flex flex-column gap-1 mt-3">
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="radio" name="flexAll" id="flexAll" />
                                    <label class="form-check-label text-secondary" for="flexAll">All</label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="radio" name="flexAll" id="flexFree" />
                                    <label class="form-check-label text-secondary" for="flexFree">Free</label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="radio" name="flexAll" id="flexPaid" />
                                    <label class="form-check-label text-secondary" for="flexPaid">Paid</label>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body p-3">
                          <div>
                            <!-- Toggle -->
                            <a
                              class="d-flex align-items-center h4 mb-0 justify-content-between"
                              data-bs-toggle="collapse"
                              href="#coursSkill"
                              role="button"
                              aria-expanded="false"
                              aria-controls="coursSkill">
                              <div>Skill Level</div>
                              <!-- Chevron -->
                              <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                              </span>
                            </a>
                            <!-- Row -->
                            <!-- Collapse -->
                            <div class="collapse show" id="coursSkill" data-bs-parent="#courseAccordion">
                              <ul class="list-unstyled mb-0 d-flex flex-column gap-1 mt-3">
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckAll" />
                                    <label class="form-check-label" for="flexCheckAll">All Level</label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckBeginner" />
                                    <label class="form-check-label" for="flexCheckBeginner">Beginner</label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckIntermediate" />
                                    <label class="form-check-label" for="flexCheckIntermediate">Intermediate</label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckExpert" />
                                    <label class="form-check-label" for="flexCheckExpert">Expert</label>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body p-3">
                          <div>
                            <!-- Toggle -->
                            <a
                              class="d-flex align-items-center h4 mb-0 justify-content-between"
                              data-bs-toggle="collapse"
                              href="#coursLanguage"
                              role="button"
                              aria-expanded="false"
                              aria-controls="coursLanguage">
                              <div>Language</div>
                              <!-- Chevron -->
                              <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                              </span>
                            </a>
                            <!-- Row -->
                            <!-- Collapse -->
                            <div class="collapse show" id="coursLanguage" data-bs-parent="#courseAccordion">
                              <ul class="list-unstyled mb-0 d-flex flex-column gap-1 mt-3">
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckEnglish" />
                                    <label class="form-check-label" for="flexCheckEnglish">
                                      English
                                      <span class="text-secondary">(13,245)</span>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckPortuguês" />
                                    <label class="form-check-label d-flex flex-row gap-2" for="flexCheckPortuguês">
                                      Português
                                      <span class="text-secondary">(13,245)</span>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckHindi" />
                                    <label class="form-check-label d-flex flex-row gap-2" for="flexCheckHindi">
                                      Hindi
                                      <span class="text-secondary">(13,245)</span>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckFrançais" />
                                    <label class="form-check-label d-flex flex-row gap-2" for="flexCheckFrançais">
                                      Français
                                      <span class="text-secondary">(13,245)</span>
                                    </label>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body p-3">
                          <div>
                            <!-- Toggle -->
                            <a
                              class="d-flex align-items-center h4 mb-0 justify-content-between"
                              data-bs-toggle="collapse"
                              href="#coursRating"
                              role="button"
                              aria-expanded="false"
                              aria-controls="coursRating">
                              <div>Rating</div>
                              <!-- Chevron -->
                              <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                              </span>
                            </a>
                            <!-- Row -->
                            <!-- Collapse -->
                            <div class="collapse show" id="coursRating" data-bs-parent="#courseAccordion">
                              <ul class="list-unstyled mb-0 d-flex flex-column gap-1 mt-3">
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check d-flex align-items-center gap-2">
                                    <input class="form-check-input filter-checkbox" type="radio" name="flexRatting1" id="flexRatting1" />
                                    <label class="form-check-label d-flex align-text-bottom lh-1 gap-2" for="flexRatting1">
                                      <div class="lh-1">
                                        <span class="align-text-top">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                        </span>
                                        4.5 & up
                                        <span class="text-secondary">(13,245)</span>
                                      </div>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check d-flex align-items-center gap-2">
                                    <input class="form-check-input filter-checkbox" type="radio" name="flexRatting1" id="flexRatting2" />
                                    <label class="form-check-label d-flex align-text-bottom lh-1 gap-2" for="flexRatting2">
                                      <div class="d-flex flex-row align-items-center gap-2">
                                        <span class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                          </svg>
                                        </span>
                                        4.0 & up
                                        <span class="text-secondary">(3,245)</span>
                                      </div>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check d-flex align-items-center gap-2">
                                    <input class="form-check-input filter-checkbox" type="radio" name="flexRatting1" id="flexRatting3" />
                                    <label class="form-check-label d-flex align-text-bottom lh-1 gap-2" for="flexRatting3">
                                      <div class="d-flex flex-row align-items-center gap-2">
                                        <span class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-half text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-half text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                          </svg>
                                        </span>
                                        3.5 & up
                                        <span class="text-secondary">(2,120)</span>
                                      </div>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check d-flex align-items-center gap-2">
                                    <input class="form-check-input filter-checkbox" type="radio" name="flexRatting1" id="flexRatting4" />
                                    <label class="form-check-label d-flex align-text-bottom lh-1 gap-2" for="flexRatting4">
                                      <div class="d-flex flex-row align-items-center gap-2">
                                        <span class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                          </svg>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star text-warning" viewBox="0 0 16 16">
                                            <path
                                              d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                          </svg>
                                        </span>
                                        3.0 & up
                                        <span class="text-secondary">(2,245)</span>
                                      </div>
                                    </label>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body p-3">
                          <div>
                            <!-- Toggle -->
                            <a
                              class="d-flex align-items-center h4 mb-0 justify-content-between"
                              data-bs-toggle="collapse"
                              href="#coursVideo"
                              role="button"
                              aria-expanded="false"
                              aria-controls="coursVideo">
                              <div>Video Duration</div>
                              <!-- Chevron -->
                              <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                              </span>
                            </a>
                            <!-- Row -->
                            <!-- Collapse -->
                            <div class="collapse show" id="coursVideo" data-bs-parent="#courseAccordion">
                              <ul class="list-unstyled mb-0 d-flex flex-column gap-1 mt-3">
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckVideo1" />
                                    <label class="form-check-label d-flex flex-row gap-2" for="flexCheckVideo1">
                                      0 - 1 Hour
                                      <span class="text-secondary">(45)</span>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckVideo2" />
                                    <label class="form-check-label d-flex flex-row gap-2" for="flexCheckVideo2">
                                      1 - 3 Hour
                                      <span class="text-secondary">(12)</span>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckVideo3" />
                                    <label class="form-check-label d-flex flex-row gap-2" for="flexCheckVideo3">
                                      3 - 6 Hour
                                      <span class="text-secondary">(342)</span>
                                    </label>
                                  </div>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckVideo4" />
                                    <label class="form-check-label d-flex flex-row gap-2" for="flexCheckVideo4">
                                      6-17
                                      <span class="text-secondary">(8)</span>
                                    </label>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-9 col-lg-8 col-12">
              <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-row align-items-center justify-content-between">
                  <span class="fw-semibold text-dark">20 results</span>
                  <div class="col-xl-2 col-md-4 col-6">
                    <div class="">
                      <label for="single-select" class="visually-hidden">Sorting</label>
                      <select id="single-select" class="form-select" data-choices>
                        <option selected>Sorting</option>
                        <option value="Newest">Newest</option>
                        <option value="Free">Free</option>
                        <option value="Most Popular">Most Popular</option>
                        <option value="Highest Rated">Highest Rated</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row gy-4">
                  <div class="col-12">
                    <div class="row g-0">
                      <div class="col-lg-4 col-md-12">
                        <a href="#!"><img src="../assets/images/course/figma.jpg" alt="figma" class="img-fluid w-100 rounded mb-4 mb-lg-0" /></a>
                      </div>
                      <div class="col-lg-8 col-12 ps-4">
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-3">
                            <div>
                              <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                            </div>

                            <div class="d-flex flex-column gap-2">
                              <h3 class="mb-0">
                                <a href="#!" class="text-reset">Figma UI UX Design Course for the Beginner</a>
                              </h3>
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus turpis, quis convallis leo venenin consectetur vehicula neque non hendrerit.
                              </p>

                              <span class="text-gray-500">
                                By
                                <a href="#!">Jitu Chauhan</a>
                              </span>
                            </div>

                            <div class="lh-1">
                              <span class="text-secondary fw-semibold">4.5</span>
                              <span class="align-text-top">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-500">(13,245)</span>
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center">
                            <span class="fw-semibold text-dark">$599</span>
                            <span class="fw-semibold text-gray-400"><del>$3,499</del></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4" />
                    <div class="row g-0 mb-5">
                      <div class="col-lg-4 col-md-12">
                        <a href="#!"><img src="../assets/images/course/python.jpg" alt="python" class="img-fluid w-100 rounded mb-4 mb-lg-0" /></a>
                      </div>
                      <div class="col-lg-8 col-12 ps-4">
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-3">
                            <div>
                              <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Web Development</span>
                            </div>

                            <div class="d-flex flex-column gap-2">
                              <h3 class="mb-0">
                                <a href="#!" class="text-reset">Master the basics of data analysis with Python</a>
                              </h3>
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus turpis, quis convallis leo venenin consectetur vehicula neque non hendrerit.
                              </p>

                              <span class="text-gray-500">
                                By
                                <a href="#!">Sandip Chauhan</a>
                              </span>
                            </div>

                            <div class="lh-1">
                              <span class="text-secondary fw-semibold">4.5</span>
                              <span class="align-text-top">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-500">(3,124)</span>
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center">
                            <span class="fw-semibold text-dark">$399</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4" />
                    <div class="row g-0 mb-5">
                      <div class="col-lg-4 col-md-12">
                        <a href="#!"><img src="../assets/images/course/nuxt.jpg" alt="nuxt" class="img-fluid w-100 rounded mb-4 mb-lg-0" /></a>
                      </div>
                      <div class="col-lg-8 col-12 ps-4">
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-3">
                            <div>
                              <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                            </div>

                            <div class="d-flex flex-column gap-2">
                              <h3 class="mb-0">
                                <a href="#!" class="text-reset">About the Nuxt.js Fundamentals course</a>
                              </h3>
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus turpis, quis convallis leo venenin consectetur vehicula neque non hendrerit.
                              </p>

                              <span class="text-gray-500">
                                By
                                <a href="#!">Manasvi Suthar</a>
                              </span>
                            </div>

                            <div class="lh-1">
                              <span class="text-secondary fw-semibold">4.5</span>
                              <span class="align-text-top">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-500">(121)</span>
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center">
                            <span class="fw-semibold text-dark">$899</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4" />
                    <div class="row g-0 mb-5">
                      <div class="col-lg-4 col-md-12">
                        <a href="#!"><img src="../assets/images/course/bootstrap.jpg" alt="bootstrap" class="img-fluid w-100 rounded mb-4 mb-lg-0" /></a>
                      </div>
                      <div class="col-lg-8 col-12 ps-4">
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-3">
                            <div>
                              <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Programing</span>
                            </div>

                            <div class="d-flex flex-column gap-2">
                              <h3 class="mb-0">
                                <a href="#!" class="text-reset">Create Modern Website Using HTML,CSS And Bootstrap</a>
                              </h3>
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus turpis, quis convallis leo venenin consectetur vehicula neque non hendrerit.
                              </p>

                              <span class="text-gray-500">
                                By
                                <a href="#!">Anita Parmar</a>
                              </span>
                            </div>

                            <div class="lh-1">
                              <span class="text-secondary fw-semibold">4.5</span>
                              <span class="align-text-top">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-500">(13,245)</span>
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center">
                            <span class="fw-semibold text-dark">$199</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4" />
                    <div class="row g-0 mb-5">
                      <div class="col-lg-4 col-md-12">
                        <a href="#!"><img src="../assets/images/course/aws.jpg" alt="figma" class="img-fluid w-100 rounded mb-4 mb-lg-0" /></a>
                      </div>
                      <div class="col-lg-8 col-12 ps-4">
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-3">
                            <div>
                              <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                            </div>

                            <div class="d-flex flex-column gap-2">
                              <h3 class="mb-0">
                                <a href="#!" class="text-reset">AWS Fundamentals Specialization</a>
                              </h3>
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus turpis, quis convallis leo venenin consectetur vehicula neque non hendrerit.
                              </p>

                              <span class="text-gray-500">
                                By
                                <a href="#!">Jitu Chauhan</a>
                              </span>
                            </div>

                            <div class="lh-1">
                              <span class="text-secondary fw-semibold">4.5</span>
                              <span class="align-text-top">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-500">(13,245)</span>
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center">
                            <span class="fw-semibold text-dark">$599</span>
                            <span class="fw-semibold text-gray-400"><del>$3,499</del></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4" />
                    <div class="row g-0 mb-5">
                      <div class="col-lg-4 col-md-12">
                        <a href="#!"><img src="../assets/images/course/mongodb.jpg" alt="figma" class="img-fluid w-100 rounded mb-4 mb-lg-0" /></a>
                      </div>
                      <div class="col-lg-8 col-12 ps-4">
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-3">
                            <div>
                              <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Programing</span>
                            </div>

                            <div class="d-flex flex-column gap-2">
                              <h3 class="mb-0">
                                <a href="#!" class="text-reset">MongoDB - The Complete Developer's Guide 2024</a>
                              </h3>
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus turpis, quis convallis leo venenin consectetur vehicula neque non hendrerit.
                              </p>

                              <span class="text-gray-500">
                                By
                                <a href="#!">Jitu Chauhan</a>
                              </span>
                            </div>

                            <div class="lh-1">
                              <span class="text-secondary fw-semibold">4.5</span>
                              <span class="align-text-top">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-500">(13,245)</span>
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center">
                            <span class="fw-semibold text-dark">$399</span>
                            <span class="fw-semibold text-gray-400"><del>$3,499</del></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <!-- Pagination -->
                      <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                          <li class="page-item">
                            <a class="page-link disabled" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                              </svg>
                            </a>
                          </li>
                          <li class="page-item active" ><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                              </svg>
                            </a>
                          </li>
                        </ul>
                                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Course List-->
    </main>
    <!-- Footer -->
    <!-- Footer -->
<footer class="footer bg-dark-stable py-8">
  <div class="container">
    <div class="row gy-6 gy-xl-0 pb-8">
      <div class="col-xl-3 col-lg-12 col-md-6 col-12">
        <div class="d-flex flex-column gap-4">
          <div>
            <img src="../assets/images/svg/geeks-logo.svg" alt="geeks logo" />
          </div>
          <p class="mb-0">Nascetur nibh feugiat vulputate urna mauris tincidunt porttitor ultricies. Et dis augue praesent congue.</p>
          <div class="d-flex gap-2">
            <a href="#langaugeModal" class="btn btn-outline-secondary" data-bs-toggle="modal">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                  <path
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                </svg>
              </span>
              <span class="ms-2">English</span>
            </a>
            <div class="dropdown">
              <button
                class="btn btn-outline-secondary btn-icon rounded-circle d-flex align-items-center"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active"></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text" data-bs-theme="dark">
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
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-3">
          <span class="text-white-stable">Company</span>
          <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
            <li>
              <a href="#!" class="nav-link">About us</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Contact us</a>
            </li>
            <li>
              <a href="#!" class="nav-link">News and Blogs</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Career</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Investors</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-3">
          <span class="text-white-stable">Community</span>
          <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
            <li>
              <a href="#!" class="nav-link">Help and Support</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Affiliate</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Blog</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Geeks Business</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-2 col-md-3 col-12">
        <div class="d-flex flex-column gap-3">
          <span class="text-white-stable">Teaching</span>
          <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
            <li>
              <a href="#!" class="nav-link">Become a teacher</a>
            </li>
            <li>
              <a href="#!" class="nav-link">How to guide</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Documentation</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-12">
        <div class="d-flex flex-column gap-5">
          <div class="d-flex flex-column gap-3">
            <span class="text-white-stable">Contact</span>
            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
              <li>
                Toll free:
                <span class="fw-semibold">+1234 567 890</span>
              </li>
              <li>
                Time:
                <span class="fw-semibold">9AM to 8:PM IST</span>
              </li>
              <li>
                Email:
                <span class="fw-semibold">example@gmail.com</span>
              </li>
            </ul>
          </div>
          <div class="d-flex flex-row gap-2">
            <a href="#"><img src="../assets/images/svg/appstore.svg" alt="" class="img-fluid" /></a>
            <a href="#"><img src="../assets/images/svg/playstore.svg" alt="" class="img-fluid" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
      <!-- Desc -->
      <div class="col-lg-6 col-12 text-center text-md-start">
        <span>
          ©
          <span id="copyright">
            <script>
              document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
            </script>
          </span>
          GeeksTheme. Powered Codescandy
        </span>
      </div>
      <!-- Links -->
      <div class="col-12 col-lg-6">
        <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
          <a class="nav-link active" href="#!">Terms of use</a>
          <a class="nav-link" href="#!">Cookies Settings</a>
          <a class="nav-link" href="#!">Privacy policy</a>
        </nav>
      </div>
    </div>
  </div>
</footer>


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

    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="../assets/js/vendors/btnFilter.js"></script>
    <script src="../assets/js/vendors/choice.js"></script>
    <script src="../assets/js/vendors/collapse.js"></script>
  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/course-filter-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:47:57 GMT -->
</html>
