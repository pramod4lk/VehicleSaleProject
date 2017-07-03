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

    <div class="container"> <!-- Start of Container -->

      <nav class="navbar navbar-inverse"> <!-- Start of Nav Bar -->
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

        <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- Start of Carousel -->

          <ol class="carousel-indicators"> <!-- Indicators -->
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

        <div class="carousel-inner"> <!-- Wrapper for slides -->
          <div class="item active">
            <img src="img/la.jpg" alt="Los Angeles">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="img/chicago.jpg" alt="Chicago">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="img/ny.jpg" alt="New York">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
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

      </div> <!-- End of Carousel -->

      <hr> <!-- Added hr between carousel and Jumbotron -->

      <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
      </div>

    </div> <!-- End of Container -->

  </div> <!-- End of Wrapper -->
</body>
</html>
