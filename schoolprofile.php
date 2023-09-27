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
            <span class="author-card-position" style="font-size: 20px; "><?php echo $school_name; ?></span>
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







  <?php
  include("admin/includes/script.php");
  include("admin/includes/footer.php");
  ?>
  