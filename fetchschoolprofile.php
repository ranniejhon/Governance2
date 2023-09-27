<?php
// Connect to your database (Replace with your database credentials)
include ("admin/config/dbcon.php");

// Fetch the image URLs from the database
$sql = "SELECT school_header, school_logo FROM school_profile WHERE school_id = 1"; // Replace with your appropriate query

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $school_header_image_url = $row['school_header'];
    $school_logo_image_url = $row['school_logo'];
} else {
    // Default image URLs if no data is found in the database
    $school_header_image_url = 'default_header_image.jpg';
    $school_logo_image_url = 'default_logo_image.jpg';
}

mysqli_close($conn);
?>
