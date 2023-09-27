<?php
include("admin/config/dbcon.php");

if (isset($_GET['school_id'], $_GET['school_name'], $_GET['school_address'], $_GET['district'], $_GET['category'])) {
    $school_id = $_GET['school_id'];
    $school_name = $_GET['school_name'];
    $school_address = $_GET['school_address'];
    $district = $_GET['district'];
    $category = $_GET['category'];

    // Perform the INSERT operation into the school_profile table
    $insertQuery = "INSERT INTO school_profile (school_id, school_name, school_address, district, category) VALUES ('$school_id', '$school_name', '$school_address', '$district', '$category')";
    
    if ($conn->query($insertQuery) === TRUE) {
        // If the insert was successful, proceed to delete the corresponding row from the approval table
        $deleteQuery = "DELETE FROM approval WHERE school_id = '$school_id'";
        
        if ($conn->query($deleteQuery) === TRUE) {
            echo "Record inserted in school_profile and deleted from approval successfully.";
        } else {
            echo "Error deleting record from approval: " . $conn->error;
        }
    } else {
        echo "Error inserting record into school_profile: " . $conn->error;
    }
} else {
    echo "Invalid parameters.";
}

// Redirect back to the previous page or wherever you want
header("Location: approval.php");
exit;
?>
