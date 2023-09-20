<?php
include('admin/config/dbcon2.php');

if (isset($_POST['school_id'])) {
    $schid = $_POST['school_id'];

    // Use prepared statement to avoid SQL injection
    $query = "SELECT school_name, district FROM schools WHERE school_id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $schid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $data = array(); // Initialize an array to hold the data

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $data['name'] = $row['school_name'];
        $data['district'] = $row['district'];
        echo json_encode($data);
    } else {
        // Handle case when data is not found
        echo json_encode(array('name' => '', 'district' => ''));
    }
}
?>