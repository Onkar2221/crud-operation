<?php
//Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudoperation";

// Creata connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error: Could not connect" . mysqli_error($conn));
} else {
    // echo "connection done !!";
}
?>