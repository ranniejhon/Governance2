<?php
session_start();
include ('admin/config/dbcon.php');

if (isset($_POST['save_changes'])) {
    // Get form data
    $school_id = $_POST['school_id'];
    $school_name = $_POST['school_name'];
    $school_address = $_POST['school_address'];
    $district = $_POST['district'];
    $category = $_POST['category'];
    $email_address = $_POST['email_address'];

    // Insert data into the 'approval' table
    $sql = "INSERT INTO approval (school_id, school_name, school_address, district, category, email_address)
            VALUES ('$school_id', '$school_name', '$school_address', '$district', '$category', '$email_address')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

header("Location: view.php"); // Redirect to view.php
?>
