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

  <link rel="stylesheet" href="css/main.css">

  <title>Car Sale Site</title>
</head>
<body>
  <div class="wrapper"> <!-- Start of Wrapper -->

    <div class="container-fluid"> <!-- Start of Main Container -->

      <nav class="navbar navbar-inverse navbar-fixed-top"> <!-- Start of Nav Bar -->
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><span class="brand-color">Riyasewana.Lk</span></a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Vehicles</a></li>
            <li><a href="#">Order Now</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav> <!-- End of Nav Bar -->

          <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:70px"> <!-- Start of Carousel -->
            <div class="container">

            <ol class="carousel-indicators"> <!-- Indicators -->
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

          <div class="carousel-inner"> <!-- Wrapper for slides -->
            <div class="item active">
              <img class="img-responsive center-block" src="img/car1.jpg" alt="Los Angeles">
              <div class="carousel-caption">
                <h3>Sri Lanka</h3>
                <p>Navinna, Colombo</p>
              </div>
            </div>

            <div class="item">
              <img class="img-responsive center-block" src="img/car2.jpg" alt="Chicago">
              <div class="carousel-caption">
                <h3>Singapore</h3>
                <p>Pulau Ujong, Main Island</p>
              </div>
            </div>

            <div class="item">
              <img class="img-responsive center-block" src="img/car3.jpg" alt="New York">
              <div class="carousel-caption">
                <h3>Japan</h3>
                <p>Chuo, Tokyo</p>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <!-- Left and right controls -->
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div> <!-- End of Carousel -->

      <hr> <!-- Added hr between carousel and Jumbotron -->

      <div class="row">
        <div class="col-md-6 text-center">
          <div class="jumbotron" style="height: 489px;">  <!-- Start of Register Form -->
            <h2 class="text-center">Signin</h2><hr>
            <form action="LoginAction.php" method="POST">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email / Username"><br>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br><br> -->
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password"><br>
                <input type="submit" class="btn btn-info btn-lg"value="Signin">
              </div>
            </form>
          </div> <!-- End of Register Form -->
        </div>
        <div class="col-md-6">
          <div class="jumbotron">  <!-- Start of Register Form -->
            <h2  class="text-center">Registration Form</h2><hr>
            <form action="RegisterAction.php" method="POST">
              <div class="form-group">
                <div class="text-center"><label>Full Name</label></div>
                <input type="text" name="name" class="form-control" placeholder="Enter Full Name"><br>
                <div class="text-center"><label>Email</label></div>
                <input type="text" name="email" class="form-control" placeholder="Enter Email"><br>
                <!-- <div class="text-center"><small class="form-text text-muted">We'll never share your email with anyone else.</small></div><br> -->
                <div class="text-center"><label>Password</label></div>
                <input type="password" name="password" class="form-control" placeholder="Enter Password"><br>
                <input type="reset" class="btn btn-warning btn-lg"value="Reset">
                <input type="submit" class="btn btn-info btn-lg"value="Submit" style="float: right";>
              </div>
            </form>
          </div> <!-- End of Register Form -->
        </div>
      </div>

      <div class="jumbotron" style="background: #0091DC; color: #B2C2E7; height: 10px; padding-bottom: 35px; padding-top: 10px;">
        <p class="text-center">© 2017 All Rights Reserved. Riyasewana.LK.
      </div>

    </div> <!-- End of Main Container -->

  </div> <!-- End of Wrapper -->

</body>
</html>
