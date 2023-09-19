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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
        <div class="container-fluid px-4">
            <h1 class="mt-4">Governance Resource Management and Information System</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Add School Profile</li>
            </ol>
			<div class="container mt-5">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active" id="schoolInfo-tab" data-toggle="tab" href="#schoolInfo" role="tab" aria-controls="schoolInfo" aria-selected="true">School Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="teacherProfile-tab" data-toggle="tab" href="#teacherProfile" role="tab" aria-controls="teacherProfile" aria-selected="false">Teacher Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="kpi-tab" data-toggle="tab" href="#kpi" role="tab" aria-controls="kpi" aria-selected="false">Key Performance Indicator</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabsContent">
            <div class="tab-pane fade show active" id="schoolInfo" role="tabpanel" aria-labelledby="schoolInfo-tab">
                <h3>School Information</h3>
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
								$academic_classroom = isset($school_info['academic_classroom']) ? $school_info['academic_classroom'] : '';
								$non_academic_classroom = isset($school_info['non_academic_classroom']) ? $school_info['non_academic_classroom'] : '';
								$needing_repair = isset($school_info['needing_repair']) ? $school_info['needing_repair'] : '';
								$tls = isset($school_info['tls']) ? $school_info['tls'] : '';
								$makeshift = isset($school_info['makeshift']) ? $school_info['makeshift'] : '';
								$arms_and_chairs = isset($school_info['arms_and_chairs']) ? $school_info['arms_and_chairs'] : '';
								$tables_and_chairs = isset($school_info['tables_and_chairs']) ? $school_info['tables_and_chairs'] : '';
								$functional_clinic = isset($school_info['functional_clinic']) ? $school_info['functional_clinic'] : '';
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
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">School ID:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_id" readonly value="<?php echo $school_id; ?>">
                        </div>
            	</div>
				
				<div class="row g-9 mb-2">
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">School Name:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_name" readonly value="<?php echo $school_name; ?>">
                            </div>
							<div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">School Address:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_address" readonly value="<?php echo $school_address; ?>">
                            </div>
            	</div>
				
				<div class="row g-9 mb-2">
                            <div class="col-md-3 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Type of School:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_type" readonly value="<?php echo $school_type; ?>">
                            </div>
							<div class="col-md-3 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Category:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="category" readonly value="<?php echo $category; ?>">
                            </div>
							<div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">School Email Address:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_email_address" readonly value="<?php echo $school_email_address; ?>">
								
							</div>
            	</div>
				<div class="row g-9 mb-2">
                            <div class="col-md-3 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Municipality:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="municipality" readonly value="<?php echo $municipality; ?>">
                            </div>
							<div class="col-md-3 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">District:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="district" readonly value="<?php echo $district; ?>">
                            </div>
							<div class="col-md-3 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">SBM Level of Practice:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="sbm_level" readonly value="<?php echo $sbm_level; ?>">
                            </div>
							<div class="col-md-2 fv-row">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">School Location:</span>
								</label>
								<input class="form-control form-control-solid" type="text" class="form-control" id="sbm_level" readonly value="<?php echo $sbm_level; ?>">
								<button type="button" class="btn btn-link" data-toggle="modal" data-target="#googleMapModal">View</button>
							</div>
							
							<?php
								include('admin/config/dbcon.php');

								// Get the school_id from the URL parameter
								if (isset($_GET['school_id'])) {
									$school_id = $_GET['school_id'];

									// Query to fetch location information from the database
									$sql = "SELECT frame FROM location WHERE school_id = $school_id";
									$result = $conn->query($sql);

									// Fetch the location URL from the database
									if ($result->num_rows > 0) {
										$row = $result->fetch_assoc();
										$locationUrl = $row['frame'];

										// Close the database connection
									
									}
								}
								?>

								<!-- Google Map Modal -->
								<div class="modal fade" id="googleMapModal" tabindex="-1" role="dialog" aria-labelledby="googleMapModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="googleMapModalLabel">Google Map</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<?php if (isset($locationUrl)) { ?>
													<?php echo $locationUrl; ?>
												<?php } else { ?>
													<p>No location found for this school.</p>
												<?php } ?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>



            	</div>			
				<h3>Physical Facilities</h3>
				<div class="row g-9 mb-2">
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Number of Academic Classroom in Good Condition:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="academic_classroom" readonly value="<?php echo $academic_classroom; ?>">
                            </div>
							<div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Number of Damaged Academic Classroom:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="non_academic_classroom" readonly value="<?php echo $non_academic_classroom; ?>">
                            </div>
            	</div>
				<div class="row g-9 mb-2">
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Number of Academic Classroom Needing Repair:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="needing_repair" readonly value="<?php echo $needing_repair; ?>">
                            </div>
							<div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Number of Temporary Learning Space:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="tls" readonly value="<?php echo $tls; ?>">
                            </div>
            	</div>
				<div class="row g-9 mb-2">
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Number of Makeshift:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="makeshift" readonly value="<?php echo $makeshift; ?>">
                            </div>
							<div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Number of Arms and Chairs:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="arms_and_chairs" readonly value="<?php echo $arms_and_chairs; ?>">
                            </div>
            	</div>
				<div class="row g-9 mb-2">
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Number of Tables and Chairs:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="tables_and_chairs" readonly value="<?php echo $tables_and_chairs; ?>">
                            </div>
							<div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Functional Clinic:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="functional_clinic" readonly value="<?php echo $functional_clinic; ?>">
                            </div>
            	</div>

            </div>
            <div class="tab-pane fade" id="teacherProfile" role="tabpanel" aria-labelledby="teacherProfile-tab">
			<h3>List of Teachers</h3>
			<?php

			$_GET['school_id'];
			

			// Query to fetch teachers' information
			$sql = "SELECT emp_no, designation, fname, email_address, t_birthday, t_age, sex FROM teacher_profile WHERE school_id = $school_id";
			$result = $conn->query($sql);
			?>
			
			<!-- Display teacher cards -->
			<div class="row g-2 mb-2">
				<?php
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$emp_no = $row["emp_no"];
						$designation = $row["designation"];
						$fname = $row["fname"];
						$email_address = $row["email_address"];
						$t_birthday =$row["t_birthday"];
						$t_age = $row["t_age"];
						$sex = $row["sex"];
						?>			
			 <div class="col-md-4 fv-row">
                <div class="card bg-light d-flex flex-fill" style="padding-bottom: 0; margin-bottom: 10px;">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-5 text-center">
                                <img src="assets/images/Blair.jpg" alt="user-avatar" class="img-circle img-fluid">
                            </div>
                            <div class="col-7">
                                <h6 class="text-muted text-sm"><?php echo $fname; ?></h6>
                                <h6 class="text-muted text-sm"><?php echo $designation; ?></h6>
                                <h6 class="text-muted text-sm"><?php echo $emp_no; ?></h6>
                                <p class="text-muted text-sm"><?php echo $email_address; ?></p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <!-- Additional information if needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#teacherModal_<?php echo $emp_no; ?>">
                                <i class="fas fa-user"></i> View Profile
                            </a>
                        </div>
                    </div>
                </div>
        </div>
		 <!-- Teacher Modal -->
<div class="modal fade" id="teacherModal_<?php echo $emp_no; ?>" tabindex="-1" role="dialog" aria-labelledby="teacherModalLabel_<?php echo $emp_no; ?>" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teacherModalLabel_<?php echo $emp_no; ?>"><?php echo $fname; ?> Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Tabs navigation -->
                <ul class="nav nav-tabs" id="teacherTabs_<?php echo $emp_no; ?>">
                    <li class="nav-item">
                        <a class="nav-link active" id="teacherInfoTab_<?php echo $emp_no; ?>" data-toggle="tab" href="#teacherInfo_<?php echo $emp_no; ?>">Teacher Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="eduBackgroundTab_<?php echo $emp_no; ?>" data-toggle="tab" href="#eduBackground_<?php echo $emp_no; ?>">Educational Background</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trainingTab_<?php echo $emp_no; ?>" data-toggle="tab" href="#training_<?php echo $emp_no; ?>">Training Attended</a>
                    </li>
                </ul>
                
                <!-- Tabs content -->
                <div class="tab-content" id="teacherTabsContent_<?php echo $emp_no; ?>">
				<div class="row g-9 mb-2">
                        <div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Employee Number:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="emp_no" readonly value="<?php echo $emp_no; ?>">
                        </div>
						<div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Full Name:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="fname" readonly value="<?php echo $fname; ?>">
                        </div>
						<div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Designation:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="designation" readonly value="<?php echo $designation; ?>">
                        </div>
            	</div>
				<div class="row g-9 mb-2">
                        <div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Sex:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="sex" readonly value="<?php echo $sex; ?>">
                        </div>
						<div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Birthday:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="t_birthday" readonly value="<?php echo $t_birthday; ?>">
                        </div>
						<div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Age:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="t_age" readonly value="<?php echo $t_age; ?>">
                        </div>
            	</div>
				<div class="row g-9 mb-2">
                        <div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Civil Status:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="t_status" readonly value="<?php echo $t_status; ?>">
                        </div>
						<div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Birthday:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_id" readonly value="<?php echo $t_birthday; ?>">
                        </div>
						<div class="col-md-4 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Age:</span>
                                </label>
                                <input class="form-control form-control-solid" type="text" class="form-control" id="school_id" readonly value="<?php echo $t_age; ?>">
                        </div>
            	</div>
				
                   
                    <!-- Educational Background Tab -->
                    <div class="tab-pane fade" id="eduBackground_<?php echo $emp_no; ?>">
                        <!-- Add educational background information here -->
                    </div>
                    <!-- Training Attended Tab -->
                    <div class="tab-pane fade" id="training_<?php echo $emp_no; ?>">
                        <!-- Add training attended information here -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
    }
} else {
    echo "No teachers found.";
}
?>
</div>

    </div>


            <div class="tab-pane fade" id="kpi" role="tabpanel" aria-labelledby="kpi-tab">
				Key Performance Indicator
		<div class="row g-2 mb-2">
		<div class="col-md-6 fv-row">
			<div class="card card-success">
    			<div class="card-header">
        			<h3 class="card-title">Enrollment by Sex</h3>
        		<div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="chart">
            <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<div class="col-md-6 fv-row">
			<div class="card card-success">
    			<div class="card-header">
        			<h3 class="card-title">Enrollment Per Year</h3>
        		<div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="chart">
            <canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>

<?php
include('admin/config/dbcon.php');

$selectedSchoolId = $_GET['school_id']; // You should sanitize and validate this input

$sql = "SELECT year, SUM(enrolee) AS total_enrollees FROM school_enrol WHERE school_id = $selectedSchoolId GROUP BY year";
$result = $conn->query($sql);

$enrollData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $enrollData[] = ['year' => $row['year'], 'enrollees' => $row['total_enrollees']];
    }
}
?>

<!-- Include your HTML and other code here -->

<script>
// Replace this with your database fetching code or API call
var enrollData = <?php echo json_encode($enrollData); ?>;

// Extract years and enrollees for the chart
var years = enrollData.map(function(data) {
    return data.year;
});
var enrollees = enrollData.map(function(data) {
    return data.enrollees;
});

// Chart.js configuration
var ctx = document.getElementById('barChart2').getContext('2d');
var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: years,
        datasets: [{
            label: 'Enrollees',
            data: enrollees,
            backgroundColor: 'rgba(0, 128, 255, 0.6)'
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

<?php
include('admin/config/dbcon.php');

$selectedSchoolId = $_GET['school_id']; // You should sanitize and validate this input

$query = "SELECT COUNT(*) AS count, sex, year FROM school_enrol WHERE school_id = ? GROUP BY sex, year";
$stmt = $conn->prepare($query);

// Bind the parameter using bind_param() method
$stmt->bind_param("i", $selectedSchoolId);

$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close(); // Close the statement after use

?>

<script>
        var data = <?php echo json_encode($data); ?>;
        console.log(data);
        var years = [];
        var maleCounts = [];
        var femaleCounts = [];

        data.forEach(function(item) {
            var yearIndex = years.indexOf(item.year);

            if (yearIndex === -1) {
                years.push(item.year);
                maleCounts.push(item.sex === 'Male' ? item.count : 0);
                femaleCounts.push(item.sex === 'Female' ? item.count : 0);
            } else {
                if (item.sex === 'Male') {
                    maleCounts[yearIndex] = item.count;
                } else if (item.sex === 'Female') {
                    femaleCounts[yearIndex] = item.count;
                }
            }
        });

        var ctx = document.getElementById('barChart').getContext('2d');
        var enrollmentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: years,
                datasets: [{
                    label: 'Male',
                    data: maleCounts,
                    backgroundColor: 'blue'
                }, {
                    label: 'Female',
                    data: femaleCounts,
                    backgroundColor: 'pink'
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>


        </div>
    </div>
		</div>    
    </main>


        
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