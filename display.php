<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <title>Display</title>
</head>

<body>
  <div class="container">
    <div class="btn btn-primary mt-5"><a href="index.php" class="text-light">Add User</a></div>

    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php
        //if we want all data
        $sql = "SELECT * FROM `crudoperation`";
        $result = mysqli_query($conn, $sql);

        if ($result) {

          while ($row = mysqli_fetch_assoc($result)) {

            $id = $row['id'];
            $name = $row['name'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $password = $row["password"];

            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $mobile . '</td>
            <td>' . $email . '</td>
            <td>' . $password . '</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateId=' . $id . '" class="text-light">Update</a></button>

          <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
        </td>
          </tr>';

          }
        }
        ?>

      </tbody>
    </table>
  </div>
</body>

</html>