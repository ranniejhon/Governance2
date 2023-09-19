<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">GRMIS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                 Main Menu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="overview.php">Add School Profile</a>
                                    <a class="nav-link" href="view.php">View School Profile</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        GRMIS
                    </div>
                </nav>
            </div>
            <<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2">
            <h1 class="mt-4">Static Navigation</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Static Navigation</li>
            </ol>
            <div class="card mb-4">
			<ul class="nav nav-tabs" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="schoolInfo-tab" data-toggle="tab" href="#schoolInfo" role="tab" aria-controls="schoolInfo" aria-selected="true">School Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="physicalFacilities-tab" data-toggle="tab" href="#physicalFacilities" role="tab" aria-controls="physicalFacilities" aria-selected="false">Physical Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="enrollment-tab" data-toggle="tab" href="#enrollment" role="tab" aria-controls="enrollment" aria-selected="false">Enrollment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="schoolStatus-tab" data-toggle="tab" href="#schoolStatus" role="tab" aria-controls="schoolStatus" aria-selected="false">School Status</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabsContent">
                    <div class="tab-pane fade show active" id="schoolInfo" role="tabpanel" aria-labelledby="schoolInfo-tab">
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">

					<?php
						// school.php

						include("code.php");

						// Get the school ID from the URL parameter
						if (isset($_GET['school_id'])) {
							$school_id = $_GET['school_id'];

							// Fetch the specific school's information from the database based on the school ID
							$school_info = getSchoolInfo($school_id);

							if ($school_info) {
								// Retrieve the school details
								$school_name = $school_info['school_name'];
								$school_address = $school_info['school_address'];
								$school_type = isset($school_info['school_type']) ? $school_info['school_type'] : '';  // Fetch school_type if available
								$category = isset($school_info['category']) ? $school_info['category'] : '';  // Fetch category if available
								$school_email_address = isset($school_info['school_email_address']) ? $school_info['school_email_address'] : '';
								$municipality = isset($school_info['Municipality']) ? $school_info['Municipality'] : '';
								$district = isset($school_info['District']) ? $school_info['District'] : '';
								$sbm_level = isset($school_info['sbm_level']) ? $school_info['sbm_level'] : '';
								
								// Continue this pattern for other fields
							} else {
								// Handle the case when no data is found for the provided school ID
								echo "No data found for the school ID: " . $school_id;
							}

						} else {
							// Handle the case when no school ID is provided
							echo "No school ID provided.";
						}
						?>
					<div class="row g-9 mb-2">
                            <div class="col-md-4 fv-row">
							<label class="d-flex align-items-center fs-3 fw-bold mb-2">
								<span class="required" style="font-size: 1.25rem;">School Basic Information</span>
							</label>
                            </div>
                        </div>
						<style>
							.header-image {
								/* Adjust the background properties as needed */
								background-image: url('assets/images/header.png');
								background-size: cover;
								background-position: center center;
								/* Set the height of the header image */
								height: 200px; /* Adjust the height as needed */
							}
						</style>

						<!-- The HTML structure for the header and logo -->
						<div class="header-image">
							<div class="row g-9 mb-2">
								<div class="col-md-4 offset-md-4 text-center mb-3">
									<!-- Place your school logo image here -->
									<img src="assets/images/logo.png" alt="School Logo" style="max-width: 80%;">
								</div>
							</div>
						</div>
                        <div class="row g-9 mb-2">
                            <div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">School ID:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_id" readonly value="<?php echo $school_id; ?>">
                            </div>
                        </div>
                        <div class="row g-9 mb-2">
                            <div class="col-md-4 fv-row">
                                <label class="form-label">School Name</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_name" readonly value="<?php echo $school_name; ?>">
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="form-label">School Address</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_address" readonly value="<?php echo $school_address; ?>">
                            </div>
                            
                        <div class="row g-9 mb-2">
                            <div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span>Type of School</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_type" readonly value="<?php echo $school_type; ?>">
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="form-label">Category</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="category" readonly value="<?php echo $category ?>">
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="form-label">School Email Address</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_email_address" readonly value="<?php echo $school_email_address ?>">
                            </div>
                        </div>
                        <div class="row g-9 mb-2">
                            <div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span>Municipality</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="Municipality" readonly value="<?php echo $municipality ?>">
                            </div>
                            <div class="col-md-8 fv-row">
                                <label class="form-label">District</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="District" readonly value="<?php echo $district ?>">
                            </div>
							<div class="col-md-8 fv-row">
                                <label class="form-label">SBM Level of Practice</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="sbm_level" readonly value="<?php echo $sbm_level ?>">
                            </div>
							<div class="row g-9 mb-2">
                            <div class="col-md-4 fv-row">
							<label class="d-flex align-items-center fs-3 fw-bold mb-2">
								<span class="required" style="font-size: 1.25rem;">Physical Facilities</span>
							</label>
                            </div>
							 <div class="row g-9 mb-2">
                            <div class="col-md-4 fv-row">
                                <label class="form-label">School Name</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_name" readonly value="<?php echo $school_name; ?>">
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="form-label">School Address</label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_address" readonly value="<?php echo $school_address; ?>">
                            </div>
								<div class="row g-9 mb-2">
								<div class="col-md-4 fv-row">
									<label class="form-label">School Name</label>
									<input class="form-control form-control-solid" type="text" class="form-control" id="school_name" readonly value="<?php echo $school_name; ?>">
								</div>
								<div class="col-md-4 fv-row">
									<label class="form-label">School Address</label>
									<input class="form-control form-control-solid" type="text" class="form-control" id="school_address" readonly value="<?php echo $school_address; ?>">
								</div>
								<div>
						</div>
						<div class="row g-9 mb-2">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Enrollment Each Year
                                    </div>
                                    <div class="card-body">
                                        <!-- The canvas element for the chart -->
                                        <canvas id="enrolleeBarChart" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <div class="tab-pane fade" id="physicalFacilities" role="tabpanel" aria-labelledby="physicalFacilities-tab">
                
											
					<div class="tab-pane fade" id="enrollment" role="tabpanel" aria-labelledby="enrollment-tab">
					
                    <div class="tab-pane fade" id="schoolStatus" role="tabpanel" aria-labelledby="schoolStatus-tab">
                        <!-- Content for School Status tab -->
                        <p>This is the School Status tab.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
    </body>
</html>
<?php
include('admin/includes/script.php');
?>