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
        <div class="container-fluid px-4">
            <h1 class="mt-3">Governance Resource Management and Information System</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">View School Profile</li>
            </ol>
			 <!-- Dropdown Lists -->
			 <div class="d-flex justify-content-end">
                    <div class="dropdown mr-3">
					<select class="btn btn-secondary dropdown-toggle" name="municipality" id="municipality_dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<option value="">Select Municipality</option>
						<option value="BANSALAN">BANSALAN</option>
						<option value="HAGONOY">HAGONOY</option>
						<option value="KIBLAWAN">KIBLAWAN</option>
						<option value="MAGSAYSAY">MAGSAYSAY</option>
						<option value="MALALAG">MALALAG</option>
						<option value="MATANAO">MATANAO</option>
						<option value="PADADA">PADADA</option>
						<option value="SANTA CRUZ">SANTA CRUZ</option>
						<option value="SULOP">SULOP</option>
					</select>
                    </div>

                    <div class="dropdown mr-3">
					<select class="btn btn-secondary dropdown-toggle" name="district" id="district_dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<option value="">Select District</option>
						<option value="South">SOUTH</option>
						<option value="North">NORTH</option>
					</select>
                    </div>

                    <div class="dropdown">
					<select class="btn btn-secondary dropdown-toggle" name="school_type" id="school_type_dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<option value="">Select Type of School</option>
						<option value="Elementary">Elementary</option>
						<option value="Secondary">Secondary</option>
					</select>
                </div>
				<button class="btn btn-primary" type="button">Search</button>
				</div>
				<!-- end of dropdown -->

				<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Database of Schools in Divison of Davao del Sur
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>School ID</th>
                                            <th>Name of School</th>
                                            <th>Address</th>
                                            <th>District</th>
                                            <th>School Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th>School ID</th>
                                            <th>Name of School</th>
                                            <th>Address</th>
                                            <th>District</th>
                                            <th>School Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php
                                
                                    
									include ("admin/config/dbcon.php");

									$query = "SELECT * FROM school_profile";
									$result = $conn->query($query);
										// Loop through the fetched data and populate the table rows
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {
												echo "<tr>";
												echo "<td>" . $row['school_id'] . "</td>";
												echo "<td>" . $row['school_name'] . "</td>";
												echo "<td>" . $row['school_address'] . "</td>";
												echo "<td>" . $row['District'] . "</td>";
												echo "<td>" . $row['category'] . "</td>";
												echo "<td><a href='school.php?school_id=" . $row['school_id'] . "'>View</a></td>";
												echo "</tr>";
											}
										} else {
											echo "<tr><td colspan='6'>No data available</td></tr>";
										}
										?>
                                    </tbody>
                                </table>
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