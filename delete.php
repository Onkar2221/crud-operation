<?php
include 'connect.php';
$id = $_GET['deleteid'];

if (isset($_GET['deleteid'])) {
    // $id = $_GET['deleteid'];

    //sql query to delete data from database table using id as a parameter
    $sql = "Delete FROM `crudoperation` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Deleted data Successfully";
        header('location:display.php');
    } else {
        die("Error deleting record: " . mysqli_error($conn));
    }
}
?>