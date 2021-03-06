<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JMU AOI - Reports</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
      <div class="container">
        <a href="index.html">
        <img src="img/AVLOGOsite.jpg" class="avatar" float="left" width="50px" height="50px">
        <a class="navbar-brand fl text-muted" href="#" float="left" color="red"><i>JMU AOI</i></a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4" text-aligh="center">Erratic Driving Reports</h1>
          <div class="list-group">
            <a href="reports.html" class="list-group-item active">Recent Reports</a>
            <a href="#" class="list-group-item">Past Reports</a>
            <a href="report-page-statistics.html" class="list-group-item">Statistics</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-5">
          	<h3>
            <?php
			print("Variable capital is");
			?>
			</h3>
            <h4>HH:MM:SS</h4>
            <h5>Reported: YES<br></h5>
            <div class="card-body">
              <h6>Location:</h6>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=701 Carrier&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.webdesign-muenchen-pb.de"></a><style>.mapouter{overflow:hidden;height:500px;width:865px;}.gmap_canvas {background:none!important;height:500px;width:865px;}</style></div>
            </div>
          </div>

          <div class="card mt-4">
            <h3 class="card-title">DD:MM:YYYY</h3>
            <h4>HH:MM:SS</h4>
            <h5>Reported: NO<br></h5>
            <div class="card-body">
              <h6>Location:</h6>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=715 South Main Street, Harrisonburg, VA&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.webdesign-muenchen-pb.de">webdesign münchen</a><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>
            </div>
          </div>

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">© 2018 by JMU Autonomous Capstone Team. Background Image by Claire S. Fulk</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
