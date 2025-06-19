<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/libs/flatpickr/dist/flatpickr.min.css" />
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

    <link rel="canonical" href="admin-dashboard.html" />
    <title>Dashboard | UDESHA Academy</title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <?php include 'includes/adminheader.php'; ?>
            </div>

            <!-- Page Header -->
            <!-- Container fluid -->
            <section class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                            <div class="d-flex flex-column gap-1">
                                <h1 class="mb-0 h2 fw-bold">Add Course</h1>
                                <!-- Breadcrumb -->
                            </div>
                            <!-- button -->
                        </div>
                    </div>
                </div>
                <div class="py-12">
                    <!-- row -->
                    <div class="row">
                        <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                            <!-- card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body p-lg-10">
                                    <!-- form -->
                                    <form class="row gx-3 needs-validation" novalidate>
                                        <!-- form group -->
                                        <div class="mb-3 col-12">
                                            <label class="form-label">
                          Topic Name
                          <span class="text-danger">*</span>
                        </label>
                                            <input type="text" class="form-control" placeholder="Enter project title" required />
                                            <div class="invalid-feedback">Please enter first title.</div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Enter brief about project..." rows="3" required></textarea>
                                            <div class="invalid-feedback">Please enter messages.</div>
                                        </div>


                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label" for="budget">Course Fee</label>
                                            <select class="form-select" data-choices="" id="budget" required>
                          <option value="">Project Budget</option>
                          <option value="Based on Project Amount">Based on Project Amount</option>
                          <option value="Based on Project Hours">Based on Project Hours</option>
                        </select>
                                            <div class="invalid-feedback">Please choose option.</div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label" for="priority">Duration</label>
                                            <select class="form-select" data-choices="" id="priority" required>
                          <option value="">Set Priority</option>
                          <option value="High">High</option>
                          <option value="Medium">Medium</option>
                          <option value="Low">Low</option>
                        </select>
                                            <div class="invalid-feedback">Please choose option.</div>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label" for="priority">Duration Type</label>
                                            <select class="form-select" data-choices="" id="priority" required>
                          <option value="">Set Priority</option>
                          <option value="High">High</option>
                          <option value="Medium">Medium</option>
                          <option value="Low">Low</option>
                        </select>
                                            <div class="invalid-feedback">Please choose option.</div>
                                        </div>
                                        <div class="col-md-3 col-12 mb-4">
                                            <div>
                                                <!-- logo -->
                                                <h5 class="mb-3">Course Image</h5>


                                                <input class="form-control" type="file" />

                                            </div>
                                        </div>
                                        <div class="col-md-8"></div>
                                        <!-- button -->
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Script -->

    <!-- Libs JS -->
    <script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/js/vendors/chart.js"></script>
    <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../assets/js/vendors/flatpickr.js"></script>
</body>

</html>