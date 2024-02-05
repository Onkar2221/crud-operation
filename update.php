<?php
include 'connect.php';
$id = $_GET['updateId'];

// when we click on "Update Button" then I want to see my previously data
# so I   will fetch the previous values from table where id=$id and display it in form fields

$sql = "SELECT * FROM `crudoperation` WHERE id='$id'";  // fetching all columns of user
$result=mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$mobile = $row['mobile'];
$email = $row['email'];
$password = $row["password"];


if (isset($_POST['update'])) {

    // echo "In form data";
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE `crudoperation` SET `name`='$name',`mobile`='$mobile',`email`='$email',`password`='$password' WHERE `id`='$id'";
    echo $sql;
    // to execuet this query we are create one variable
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data Update Successfully";
    } else {
        die("Error in Inserting Data" . mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./connect.php">
    <title>Update Page</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"   value=<?php echo $name ?>>
            </div>
            <div class="form-group pt-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile Number" name="mobile"  value=<?php echo $mobile ?>
                    autocomplete="off">
            </div>
            <div class="form-group pt-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"   value=<?php echo $email ?>>
            </div>
            <div class="form-group pt-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password"  value=<?php echo $password ?>
                    autocomplete="off">
            </div>

            <button name="update" type="update" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>

    <div class="container">

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>