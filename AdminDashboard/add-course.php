<!doctype html>
<html lang="en">


<!-- Mirrored from geeksui.codescandy.com/geeks/pages/add-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:48:00 GMT -->
<head>
  <link rel="stylesheet" href="../assets/libs/quill/dist/quill.snow.css" />
  <link rel="stylesheet" href="../assets/libs/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="../assets/libs/bs-stepper/dist/css/bs-stepper.min.css" />
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


  <link rel="canonical" href="add-course.html" />
  <link href="../assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet " />
  <link href="../assets/libs/dragula/dist/dragula.min.css" rel="stylesheet " />
  <title>Add Course | Geeks - Bootstrap 5 Template</title>
</head>

<body>
  <!-- Navbar -->
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

  <!-- Page header-->
  <main>
    <section class="py-4 py-lg-6 bg-primary">
      <div class="container">
        <div class="row">
          <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
            <div class="d-lg-flex align-items-center justify-content-between">
              <!-- Content -->
              <div class="mb-4 mb-lg-0">
                <h1 class="text-white mb-1">Add New Course</h1>
                <p class="mb-0 text-white lead">Just fill the form and create your courses.</p>
              </div>
              <div>
                <a href="instructor-courses.html" class="btn btn-white">Back to Course</a>
                <a href="instructor-courses.html" class="btn btn-dark">Save</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Content -->
    <section class="pb-8">
      <div class="container">
        <div id="courseForm" class="bs-stepper">
          <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
              <!-- Stepper Button -->
              <div class="bs-stepper-header shadow-sm" role="tablist">
                <div class="step" data-target="#test-l-1">
                  <button type="button" class="step-trigger" role="tab" id="courseFormtrigger1"
                    aria-controls="test-l-1">
                    <span class="bs-stepper-circle">1</span>
                    <span class="bs-stepper-label">Basic Information</span>
                  </button>
                </div>
                <div class="bs-stepper-line"></div>
                <div class="step" data-target="#test-l-2">
                  <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2"
                    aria-controls="test-l-2">
                    <span class="bs-stepper-circle">2</span>
                    <span class="bs-stepper-label">Courses Media</span>
                  </button>
                </div>
                <div class="bs-stepper-line"></div>
                <div class="step" data-target="#test-l-3">
                  <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3"
                    aria-controls="test-l-3">
                    <span class="bs-stepper-circle">3</span>
                    <span class="bs-stepper-label">Curriculum</span>
                  </button>
                </div>
                <div class="bs-stepper-line"></div>
                <div class="step" data-target="#test-l-4">
                  <button type="button" class="step-trigger" role="tab" id="courseFormtrigger4"
                    aria-controls="test-l-4">
                    <span class="bs-stepper-circle">4</span>
                    <span class="bs-stepper-label">Settings</span>
                  </button>
                </div>
              </div>
              <!-- Stepper content -->
              <div class="bs-stepper-content mt-5">
                <form onSubmit="return false">
                  <!-- Content one -->
                  <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger1">
                    <!-- Card -->
                    <div class="card mb-3">
                      <div class="card-header border-bottom px-4 py-3">
                        <h4 class="mb-0">Basic Information</h4>
                      </div>
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="mb-3">
                          <label for="addCourseTitle" class="form-label">Course Title</label>
                          <input id="addCourseTitle" name="addCourseTitle" class="form-control" type="text"
                            placeholder="Course Title " />
                          <small>Write a 60 character course title.</small>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="addCourseCategory">Courses category</label>
                          <select class="form-select" data-choices="" id="addCourseCategory" name="addCourseCategory">
                            <option value="">Select category</option>
                            <option value="React">React</option>
                            <option value="Javascript">Javascript</option>
                            <option value="HTML">HTML</option>
                            <option value="Vue">Vue js</option>
                            <option value="Gulp">Gulp js</option>
                          </select>
                          <small>Help people find your courses by choosing categories that represent your
                            course.</small>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="addCourseLevel">Courses level</label>
                          <select class="form-select" data-choices="" id="addCourseLevel" name="addCourseLevel">
                            <option value="">Select level</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="Beignners">Beignners</option>
                            <option value="Advance">Advance</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Course Description</label>
                          <div id="editor">
                            <p>Insert course description</p>
                            <p>
                              Some initial
                              <strong>bold</strong>
                              text
                            </p>
                            <p><br /></p>
                          </div>
                          <small>A brief summary of your courses.</small>
                        </div>
                      </div>
                    </div>
                    <!-- Button -->
                    <button class="btn btn-primary" onclick="courseForm.next()">Next</button>
                  </div>
                  <!-- Content two -->
                  <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger2">
                    <!-- Card -->
                    <div class="card mb-3 border-0">
                      <div class="card-header border-bottom px-4 py-3">
                        <h4 class="mb-0">Courses Media</h4>
                      </div>
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="custom-file-container mb-4" data-upload-id="courseImage"></div>
                        <div>
                          <input type="url" class="form-control" placeholder="Video URL " />
                        </div>
                        <small class="mt-3 d-block">Enter a valid video URL. Students who watch a well-made promo video
                          are 5X more likely to enroll in your course.</small>

                        <div
                          class="mt-3 d-flex justify-content-center align-items-center position-relative rounded py-16 border-white border rounded bg-cover"
                          style="background-image: url(../assets/images/course/course-javascript.jpg); height: 250px">
                          <a href="https://www.youtube.com/watch?v=Nfzi7034Kbg"
                            class="icon-shape rounded-circle btn-play icon-xl glightbox position-absolute top-50 start-50 translate-middle">
                            <i class="bi bi-play-fill fs-3"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- Button -->
                    <div class="d-flex justify-content-between">
                      <button class="btn btn-secondary" onclick="courseForm.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="courseForm.next()">Next</button>
                    </div>
                  </div>
                  <!-- Content three -->
                  <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger3">
                    <!-- Card -->
                    <div class="card mb-3 border-0">
                      <div class="card-header border-bottom px-4 py-3">
                        <h4 class="mb-0">Curriculum</h4>
                      </div>
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="bg-light rounded p-2 mb-4">
                          <h4>Introduction to JavaScript</h4>
                          <!-- List group -->
                          <div class="list-group list-group-flush border-top-0" id="courseList">
                            <div id="courseOne">
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="introduction">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Introduction</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" aria-expanded="true" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistOne" aria-controls="collapselistOne">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistOne" class="collapse show" aria-labelledby="introduction"
                                  data-bs-parent="#courseList">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="development">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Installing Development Software</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistTwo" aria-expanded="false"
                                      aria-controls="collapselistTwo">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistTwo" class="collapse" aria-labelledby="development"
                                  data-bs-parent="#courseList">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="project">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Hello World Project from GitHub</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistThree" aria-expanded="false"
                                      aria-controls="collapselistThree">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistThree" class="collapse" aria-labelledby="project"
                                  data-bs-parent="#courseList">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="sample">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Our Sample Website</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistFour" aria-expanded="false"
                                      aria-controls="collapselistFour">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistFour" class="collapse" aria-labelledby="sample"
                                  data-bs-parent="#courseList">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="#" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal"
                            data-bs-target="#addLectureModal">Add Lecture +</a>
                        </div>
                        <div class="bg-light rounded p-2 mb-4">
                          <h4>JavaScript Beginnings</h4>

                          <!-- List group -->
                          <div class="list-group list-group-flush border-top-0" id="courseListSecond">
                            <div id="courseTwo">
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="introductionSecond">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Introduction</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistFive" aria-expanded="false"
                                      aria-controls="collapselistFive">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistFive" class="collapse" aria-labelledby="introductionSecond"
                                  data-bs-parent="#courseListSecond">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="developmentSecond">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Installing Development Software</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistSix" aria-expanded="false"
                                      aria-controls="collapselistSix">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistSix" class="collapse" aria-labelledby="developmentSecond"
                                  data-bs-parent="#courseListSecond">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="projectSecond">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Hello World Project from GitHub</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistSeven" aria-expanded="false"
                                      aria-controls="collapselistSeven">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistSeven" class="collapse" aria-labelledby="projectSecond"
                                  data-bs-parent="#courseListSecond">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                              <div class="list-group-item rounded px-3 text-nowrap mb-1" id="sampleSecond">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 text-truncate">
                                    <a href="#" class="text-inherit">
                                      <i class="fe fe-menu me-1 align-middle"></i>
                                      <span class="align-middle">Our Sample Website</span>
                                    </a>
                                  </h5>
                                  <div>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Edit">
                                      <i class="fe fe-edit fs-6"></i>
                                    </a>
                                    <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                      title="Delete">
                                      <i class="fe fe-trash-2 fs-6"></i>
                                    </a>
                                    <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                      data-bs-target="#collapselistEight" aria-expanded="false"
                                      aria-controls="collapselistEight">
                                      <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                    </a>
                                  </div>
                                </div>
                                <div id="collapselistEight" class="collapse" aria-labelledby="sampleSecond"
                                  data-bs-parent="#courseListSecond">
                                  <div class="p-md-4 p-2">
                                    <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="#" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal"
                            data-bs-target="#addLectureModal">Add Lecture +</a>
                        </div>
                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                          data-bs-target="#addSectionModal">Add Section</a>
                      </div>
                    </div>
                    <!-- Button -->
                    <div class="d-flex justify-content-between">
                      <button class="btn btn-secondary" onclick="courseForm.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="courseForm.next()">Next</button>
                    </div>
                  </div>
                  <!-- Content four -->
                  <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger4">
                    <!-- Card -->
                    <div class="card mb-3 border-0">
                      <div class="card-header border-bottom px-4 py-3">
                        <h4 class="mb-0">Requirements</h4>
                      </div>
                      <!-- Card body -->
                      <div class="card-body">
                        <input name="tags" class="w-100" value="jquery, bootstrap" />
                      </div>
                    </div>
                    <div class="d-flex justify-content-between mb-8">
                      <!-- Button -->
                      <button class="btn btn-secondary" onclick="courseForm.previous()">Previous</button>
                      <button type="submit" class="btn btn-danger">Submit For Review</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

  <!-- Modal -->
  <div class="modal fade" id="addSectionModal" tabindex="-1" role="dialog" aria-labelledby="addSectionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addSectionModalLabel">Add New Section</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input class="form-control mb-3" type="text" placeholder="Add new section " />
          <button class="btn btn-primary" type="Button">Add New Section</button>
          <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <!-- Modal -->
  <div class="modal fade" id="addLectureModal" tabindex="-1" role="dialog" aria-labelledby="addLectureModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addLectureModalLabel">Add New Lecture</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="CourseAddLecture" class="form-label">Add lecture</label>
          <input class="form-control mb-3" type="text" placeholder="Add new lecture " id="CourseAddLecture"
            name="CourseAddLecture" />
          <button class="btn btn-primary" type="Button">Add New Lecture</button>
          <button class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="addSectionModal" tabindex="-1" role="dialog" aria-labelledby="addSectionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addSectionModalLabel">Add New Section</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input class="form-control mb-3" type="text" placeholder="Add new section " />
          <button class="btn btn-primary" type="Button">Add New Section</button>
          <button class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->

  <script src="../assets/libs/file-upload-with-preview/dist/file-upload-with-preview.iife.js"></script>
  <script src="../assets/libs/%40yaireo/tagify/dist/tagify.js"></script>

  <!-- Scripts -->
  <!-- Libs JS -->
<script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>


  <script src="../assets/libs/quill/dist/quill.js"></script>
  <script src="../assets/js/vendors/editor.js"></script>
  <script src="../assets/libs/dragula/dist/dragula.min.js"></script>

  <script src="../assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
  <script src="../assets/js/vendors/beStepper.js"></script>
  <script src="../assets/js/vendors/customDragula.js"></script>

  <script src="../assets/js/vendors/file-upload.js"></script>
  <script src="../assets/libs/glightbox/dist/js/glightbox.min.js"></script>
  <script src="../assets/js/vendors/glight.js"></script>
  <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

  <script src="../assets/js/vendors/choice.js"></script>
</body>


<!-- Mirrored from geeksui.codescandy.com/geeks/pages/add-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jun 2025 05:48:04 GMT -->
</html>