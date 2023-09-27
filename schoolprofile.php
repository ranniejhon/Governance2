<?php
include("admin/includes/header.php");
include("admin/includes/navbar.php");
include("admin/includes/sidebar.php");
?>

<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">

</div>
<?php ("admin/includes/sidebar2.php"); ?>

<!-- <<h1 class="mt-4">Database of Schools in Divison of Davao del Sur</h1>
<ol class="breadcrumb mb-0">
 <li class="breadcrumb-item active">School Profile</li> 
</ol> -->
<div style="margin-top: 10px;"></div>

<main> <!-- Main content -->


<?php
// Connect to your database (Replace with your database credentials)
include("admin/config/dbcon.php");

// Initialize variables for default values
$school_header = ''; // Initialize these variables
$school_logo = '';
$school_name = '';
$school_address ='';
$school_email_address ='';
$district = '';
$category ='';

// Get the school_id dynamically from the URL
if (isset($_GET['school_id'])) {
    $school_id = $_GET['school_id'];
    
    // Sanitize and validate the school_id to prevent SQL injection
    $school_id = mysqli_real_escape_string($conn, $school_id);
    
    // Fetch the image URLs from the database based on the dynamic school_id
    $sql = "SELECT school_header, school_logo, school_name, school_address, school_email_address, District, category FROM school_profile WHERE school_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $school_id); // "i" represents an integer parameter
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $school_header, $school_logo, $school_address, $school_name, $school_email_address, $district, $category); // Fetch the results
        
        if (mysqli_stmt_fetch($stmt)) {
            // Images found in the database
        }
        
        mysqli_stmt_close($stmt);
    }
}

// Close the database connection
mysqli_close($conn);
?>
<div>
    <div class="author-card pb-2">
        <?php if (!empty($school_header)): ?>
        <div class="author-card-cover" style="background-image: url('<?php echo $school_header; ?>'); height: 250px;"></div>
        <?php endif; ?>
        <div class="author-card-profile">
            <?php if (!empty($school_logo)): ?>
            <div class="author-card-avatar"><img src="<?php echo $school_logo; ?>" alt="<?php echo $school_logo; ?>"
                    style="width: 200px; height: 200px;"></div>
            <?php endif; ?>
            <br></br>
            <h5 class="author-card-name" style="font-size: 50px;"><?php echo $school_address; ?></h5>
            <span class="author-card-position" style="font-size: 20px; "><?php echo $school_name; ?></span><br>
            <span class="author-card-position" style="font-size: 20px; color: blue; font-style: italic; cursor: pointer;" data-toggle="modal" data-target="#updateProfileModal">
              <i class="fas fa-edit"></i> Edit Profile
</span>
        </div>
    </div>
</div>

        <!-- <div class="author-card-details">
          <h5 class="author-card-name" style="font-size: 50px;">Sta. Cruz National High School</h5>
          <span class="author-card-position" style="font-size: 20px; ">Santa Cruz,South, Davao del Sur</span>
        </div> -->
     

  <div style="margin-top: 10px;"></div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">School Profile</h3>
            </div>
            <div class="card-body card-primary">

              <!-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p> -->

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>School ID:</b> <a class="float-right"><?php echo $school_id; ?></a>
                </li>

                <li class="list-group-item">
                  <b>Email Address:</b> <a class="float-right"><?php echo $school_email_address; ?></a>
                </li>

                <li class="list-group-item">
                  <b>District</b> <a class="float-right"><?php echo $district; ?></a>
                </li>

                <li class="list-group-item">
                  <b>Category</b> <a class="float-right"><?php echo $category; ?></a>
                </li>
              </ul>

              <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- Our  Location Box -->
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
    }
}
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Our Location</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php if (isset($locationUrl)) { ?>
         <?php echo $locationUrl; ?>
        <?php } else { ?>
            <p>No location found for this school.</p>
        <?php } ?>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#About" data-toggle="tab">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#Statistics" data-toggle="tab">Teaching & Non Teaching</a></li>
                <li class="nav-item"><a class="nav-link" href="#Activities" data-toggle="tab">Key Performance Indicator</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">


                <!-- ---------------------------------- -->
                <div class="active tab-pane" id="About">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name1</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Skills1</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- ---------------------------------- -->
                <div class="tab-pane" id="Statistics">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Skills2</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>


                <!-- ---------------------------------- -->
                <div class="tab-pane" id="Activities">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Name3</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>

                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  <!-- /.content-wrapper -->


  <form action="save_school.php" method="POST">
<div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add School</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
        <?php
        include("admin/config/dbcon2.php");

        $sql = "SELECT * FROM schools";
        $sql2 = mysqli_query($conn, $sql);

        ?>
        <div class="row mb-4">
            <div class="col-md-6">
                <label class="fw-bold text-muted"><h5>School ID</h5></label>
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select ID" id="school_id" name="school_id" class="form-control">
                    <option value="">Select School ID</option>
                    <?php
                    if (mysqli_num_rows($sql2) > 0) {
                        foreach ($sql2 as $row) {
                            ?>
                            <option value="<?= $row['school_id'] ?>"><?= $row['school_id'] ?></option>
                        <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <form action="code.php" method="POST">	
										<div class="card-body p-9">
											<!--begin::Row-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-bold text-muted"><h5>Upload School Logo</h5></label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media/avatars/deped.png)"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Label-->
																<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="bi bi-pencil-fill fs-7"></i>
																	<!--begin::Inputs-->
																	<input type="file" name="school_logo" accept=".png, .jpg, .jpeg" value =""  />
																	<input type="hidden" name="avatar_remove" />
																	<!--end::Inputs-->
																</label>
																<!--end::Label-->
															</div>
															<!--end::Image input-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->

													<div class="row mb-7">
														<!--begin::Label-->
														<label class="col-lg-4 fw-bold text-muted"><h5>Upload School Header</h5></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<!--begin::Image input-->
															<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-550px h-200px" style="background-image: url(assets/media/avatars/header.jpg)"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Label-->
																<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="bi bi-pencil-fill fs-7"></i>
																	<!--begin::Inputs-->
																	<input type="file" name="school_header" accept=".png, .jpg, .jpeg" value =""  />
																	<input type="hidden" name="avatar_remove" />
																	<!--end::Inputs-->
																</label>
																<!--end::Label-->																
															</div>
															<!--end::Image input-->
												</div>
												<!--end::Col-->
											</div>
            <div class="col-md-6">
                <label class="fw-bold text-muted"><h5>School Name</h5></label>
                <input class="form-control form-control-solid" size="5" type="text" class="form-control" name="school_name" id="school_name" readonly>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <label class="fw-bold text-muted"><h5>School Address</h5></label>
                <input class="form-control form-control-solid" size="5" type="text" class="form-control" name="school_address">
            </div>
            <div class="col-md-6">
                <label class="fw-bold text-muted"><h5>District</h5></label>
                <input class="form-control form-control-solid" size="5" type="text" class="form-control" name="district" id="district" readonly>
            </div>
        </div>
        <div class="row mb-4">
        <div class="col-md-6">
                <label class="fw-bold text-muted"><h5>Email Address:</h5></label>
                <input class="form-control form-control-solid" size="5" type="text" class="form-control" name="email_address">
            </div>
            <div class="col-md-6">
                <label class="fw-bold text-muted"><h5>School Size</h5></label>
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Category" name="category" class="form-control">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="very_large">Very Large</option>
                </select>
            </div>
            <div aria-live="polite" aria-atomic="true" style="position: fixed; top: 20px; right: 20px;">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="mr-auto">Success</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <!-- Toast message content goes here -->
        </div>
    </div>
</div>

        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="save_changes">Save changes</button>
</div>
</div>




  <?php
  include("admin/includes/script.php");
  include("admin/includes/footer.php");
  ?>
  