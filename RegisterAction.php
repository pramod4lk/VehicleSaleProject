<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>Register Action</title>
</head>
<body>
  <?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $con = mysqli_connect("localhost", "root", "", "vehiclesaledb");
      if (($con)) {
          $sql = "INSERT INTO member (name, email, password, joindate)" . "VALUES('$name', '$email', '$password', NOW())";
          if (mysqli_query($con, $sql)) {
            echo "<h1>Saved Registration Data!</h1>";
          } else {
            echo "Error: " . mysqli_error($con);
          }
      }else {
        echo "<h1>Connection Failed!</h1>";
      }
    }else {
      echo "<h1>Invalid Email!</h1>";
    }

   ?>
</body>
</html>
