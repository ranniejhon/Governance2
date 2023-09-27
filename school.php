<?php
include ("admin/includes/header.php");
include ("admin/includes/navbar.php");
include ("admin/includes/sidebar.php");
?>

   <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Governance Resource Management and Information System</h1>
        	<div class="container mt-5">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active" id="schoolInfo-tab" data-toggle="tab" href="#schoolInfo" role="tab" aria-controls="schoolInfo" aria-selected="true">School Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="teacherProfile-tab" data-toggle="tab" href="#teacherProfile" role="tab" aria-controls="teacherProfile" aria-selected="false">Teaching & Non-Teaching Profile</a>
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
			<h3>Teaching & Non-Teaching Profile</h3>
			<div class="row g-2 mb-2">
		<div class="col-md-6 fv-row">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Teacher Profile by Sex</h3>
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
                <canvas id="TeachingBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="col-md-6 fv-row">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Non-Teaching Profile by Sex</h3>
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
                <canvas id="Non_TeachingBarChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>


    </div>


            <div class="tab-pane fade" id="kpi" role="tabpanel" aria-labelledby="kpi-tab">
				Key Performance Indicator
		<div class="row g-2 mb-2">
		<div class="col-md-6 fv-row">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Enrollment Per Year By Sex</h3>
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
                <canvas id="enrolleeBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
    <div class="col-md-6 fv-row">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Teacher Profile by Sex</h3>
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
                    <!-- Use $teacherData to populate your chart -->
                    <canvas id="enrolleeBarChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<div class="row g-2 mb-2">
        <div class="col-md-6 fv-row">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Enrollment Per Year By Strand - SHS</h3>
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
                <canvas id="enrolleeBarChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>


<?php
include('admin/config/dbcon.php');

$selectedSchoolId = $_GET['school_id']; // You should sanitize and validate this input

$sql = "SELECT year, 
               SUM(CASE WHEN sex = 'Male' THEN 1 ELSE 0 END) AS male_enrollees,
               SUM(CASE WHEN sex = 'Female' THEN 1 ELSE 0 END) AS female_enrollees
        FROM school_enrol 
        WHERE school_id = $selectedSchoolId 
        GROUP BY year";

$result = $conn->query($sql);

$enrollData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $enrollData[] = [
            'year' => $row['year'],
            'male_enrollees' => $row['male_enrollees'],
            'female_enrollees' => $row['female_enrollees']
        ];
    }
}
?>

<!-- Include your HTML and other code here -->

<script>
// Replace this with your database fetching code or API call
var enrollData = <?php echo json_encode($enrollData); ?>;

// Extract years and male/female enrollees for the chart
var years = enrollData.map(function(data) {
    return data.year;
});
var maleEnrollees = enrollData.map(function(data) {
    return data.male_enrollees;
});
var femaleEnrollees = enrollData.map(function(data) {
    return data.female_enrollees;
});

// Chart.js configuration
var ctx = document.getElementById('enrolleeBarChart').getContext('2d');
var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: years,
        datasets: [
            {
                label: 'Male Enrollees',
                data: maleEnrollees,
                backgroundColor: 'rgba(0, 128, 255, 0.6)'
            },
            {
                label: 'Female Enrollees',
                data: femaleEnrollees,
                backgroundColor: 'rgba(255, 0, 0, 0.6)'
            }
        ]
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

$sql = "SELECT year, grade_level, COUNT(enrolee) AS total_enrollees
        FROM school_enrol 
        WHERE school_id = $selectedSchoolId 
        GROUP BY year, grade_level";

$result = $conn->query($sql);

$enrollDataByGrade = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $enrollDataByGrade[] = [
            'year' => $row['year'],
            'grade_level' => $row['grade_level'],
            'total_enrollees' => $row['total_enrollees']
        ];
    }
}
?>

<!-- Include your HTML and other code here -->

<script>
// Replace this with your database fetching code or API call
var enrollDataByGrade = <?php echo json_encode($enrollDataByGrade); ?>;

// Extract years, grade levels, and total enrollees for the chart
var yearsByGrade = enrollDataByGrade.map(function(data) {
    return data.year;
});
var gradeLevels = [...new Set(enrollDataByGrade.map(data => data.grade_level))]; // Get unique grade levels
var totalEnrolleesByGrade = gradeLevels.map(function(grade) {
    return {
        label: grade,
        data: enrollDataByGrade.filter(data => data.grade_level === grade).map(data => data.total_enrollees),
        backgroundColor: getRandomColor(), // Function to generate random colors
    };
});

// Function to generate random colors
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Chart.js configuration for the bar chart
var ctx = document.getElementById('enrolleeBarChart2').getContext('2d');
var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: yearsByGrade,
        datasets: totalEnrolleesByGrade
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
include 'admin/config/dbcon2.php';

$selectedSchoolId = $_GET['school_id']; // You should sanitize and validate this input

$sql = "SELECT e.school_id, 
               SUM(CASE WHEN pi.sex = 'Male' THEN 1 ELSE 0 END) AS male_teachers,
               SUM(CASE WHEN pi.sex = 'Female' THEN 1 ELSE 0 END) AS female_teachers
        FROM employment_record AS e
        INNER JOIN personal_info AS pi ON e.emp_no = pi.emp_no
        WHERE e.school_id = $selectedSchoolId 
        GROUP BY e.school_id";

$result = $conn->query($sql);

$teacherData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $teacherData[] = [
            'school_id' => $row['school_id'], // Changed 'year' to 'id'
            'male_teachers' => $row['male_teachers'],
            'female_teachers' => $row['female_teachers']
        ];
    }
}
?>


<script>
// Replace this with your database fetching code or API call
var teacherData = <?php echo json_encode($teacherData); ?>;

// Extract ids and male/female teachers for the chart
var ids = teacherData.map(function(data) {
    return data.school_id; // Changed from 'year' to 'id'
});
var maleTeachers = teacherData.map(function(data) {
    return data.male_teachers;
});
var femaleTeachers = teacherData.map(function(data) {
    return data.female_teachers;
});

// Chart.js configuration
var ctx = document.getElementById('TeachingBarChart').getContext('2d');
var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ids, // Changed from 'years' to 'ids'
        datasets: [
            {
                label: 'Male Teachers',
                data: maleTeachers,
                backgroundColor: 'rgba(0, 128, 255, 0.6)'
            },
            {
                label: 'Female Teachers',
                data: femaleTeachers,
                backgroundColor: 'rgba(255, 0, 0, 0.6)'
            }
        ]
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