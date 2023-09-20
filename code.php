

<?php
// get_school_info.php

// Include the database connection
include("admin/config/dbcon.php");

function getSchoolInfo($school_id) {
    global $conn;

    // Fetch the specific school's information from the database based on the school ID
    $query = "SELECT * FROM school_profile WHERE school_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $school_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Retrieve the school details
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false; // No data found
    }
    
}
?>
<?php

include('admin/includes/script.php');
include('admin/config/dbcon.php');

// school information //
if (isset($_POST['submit_sh_info'])) {

    $Municipality = $_POST['Municipality'];
    $District = $_POST['district'];
    $school_logo = $_POST['school_logo'];
    $school_header = $_POST['school_header'];
    $about_us = $_POST['about_us'];
    $school_id = $_POST['school_id'];
    $school_name = $_POST['school_name'];
    $school_address = $_POST['school_address'];
    $school_type = $_POST['school_type'];
    $school_number = $_POST['school_number'];
    $category = $_POST['category'];
    $school_email = $_POST['school_email'];
    $sbm_level = $_POST['sbm'];

    // Ask the user if they want to continue
    echo '<script type="text/javascript">';
    echo 'var confirmed = confirm("Do you want to save this information?");';
    echo 'if (confirmed) {';

    $sql = "INSERT INTO school_profile (school_id, school_name, school_address, about_school, school_type, contact_number, school_email_address, school_logo, school_header, Municipality, District, sbm_level, category) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Use prepared statements to avoid SQL injection
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $school_id, $school_name, $school_address, $about_us, $school_type, $school_number, $school_email, $school_logo, $school_header, $Municipality, $District, $sbm_level, $category);
    $sql_run = mysqli_stmt_execute($stmt);

    if ($sql_run) {
        echo 'Swal.fire({
                icon: "success",
                title: "Success!",
                text: "School Information Added Successfully",
                showConfirmButton: false,
                timer: 5000
              }).then(function() {
                window.location.href = "overview.php";
              });';
    } else {
        echo 'Swal.fire({
                icon: "error",
                title: "Error!",
                text: "School Information Not Added",
                showConfirmButton: false,
                timer: 5000
              }).then(function() {
                window.location.href = "overview.php";
              });';
    }

    echo '} else {';
    echo '  // User chose not to proceed, you can add any logic here if needed';
    echo '}';
    echo '</script>';
}
?>

<?php
include ('admin/config/dbcon.php');

if (isset($_POST['update_pf'])) {
    // Get the input values from the form
    $school_id = $_POST['school_id'];
    $academic_classroom = $_POST['academic_classroom'];
    $non_academic_classroom = $_POST['non_academic_classroom'];
    $needing_repair = $_POST['needing_repair'];
    $tls = $_POST['tls'];
    $makeshift = $_POST['makeshift'];
    $arms_and_chairs = $_POST['arms_and_chairs'];
    $tables_and_chairs = $_POST['tables_and_chairs'];
    $functional_clinic = $_POST['functional_clinic'];
    
    // Prepare the update query
    $sql = "UPDATE school_profile SET 
            academic_classroom = '$academic_classroom', 
            non_academic_classroom = '$non_academic_classroom', 
            needing_repair = '$needing_repair', 
            tls = '$tls', 
            makeshift = '$makeshift', 
            arms_and_chairs = '$arms_and_chairs', 
            tables_and_chairs = '$tables_and_chairs', 
            functional_clinic = '$functional_clinic' 
            WHERE school_id = '$school_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
        echo '<script type="text/javascript">';
        echo 'Swal.fire({
                icon: "success",
                title: "Success!",
                text: "School Information Updated Successfully",
                showConfirmButton: false,
                timer: 5000
              }).then(function() {
                window.location.href = "overview.php";
              });';
        echo '</script>';
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

//$conn->close();
?>



<!-- <?php
//if (isset($_GET['municipality'])) {
    $municipality = $_GET['municipality'];

    // Simulated data, you can replace this with your actual data source
    $districtOptions = array();
    if ($municipality == 'BANSALAN') {
        $districtOptions = array('MATANAO I', 'MATANAO II');
    } elseif ($municipality == 'SANTA CRUZ') {
        $districtOptions = array('SOUTH', 'NORTH');
    }

    foreach ($districtOptions as $district) {
        echo "<option value='$district'>$district</option>";
    }
//}
?> -->
