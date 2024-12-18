<?php
include 'connect.php';

// Check if 'deleteid' is set in the URL
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Use backticks for the table name
    $sql = "DELETE FROM `crud` WHERE id = $id";  // Use backticks for table name and no quotes for values

    // Execute the query
    $result = mysqli_query($con, $sql);

    if ($result) {
       // echo "Deleted successfully";
       header('location:display.php');
    } else {
        die( mysqli_error($con));
    }
}
?>
