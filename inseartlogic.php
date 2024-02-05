<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    // echo "In form data";
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `crudoperation` (`name`,`mobile`,`email`,`password`) VALUES ('$name','$mobile','$email','$password')";
    // to execuet this query we are create one variable
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Data Inserted Successfully";
        header('location:display.php');
    } else {
        die("Error in Inserting Data" . mysqli_error($conn));
    }
}
?>