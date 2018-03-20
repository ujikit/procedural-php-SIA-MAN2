<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="frontend/img/logo2.png">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontend/bootstrap/dist/css/bootstrap-theme.min.css" />

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php include_once "index_navbar.php" ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="margin-top: 50px;background:#e6ffe6">
    <div class="container">
    <div class="row">
    <div class="col-lg-4" style="margin-top: 25px;">

    <?php include_once "index_sidebar.php" ?>

    </div>
      <div class="col-lg-8">

         <!-- Carousel ================================================== -->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="margin-bottom:20px;float:0px;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img class="first-slide" src="frontend/img/profil/<?php echo "gambar_slide_data_website1" ?>" alt="First slide" style="width:1525px;height:400px;margin:auto">
                        <div class="container">
                          <div class="carousel-caption">
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <img class="second-slide" src="frontend/img/profil/<?php echo "gambar_slide_data_website2" ?>" alt="Second slide" style="width:1525px;height:400px;margin:auto">
                        <div class="container">
                          <div class="carousel-caption">
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <img class="third-slide" src="frontend/img/profil/<?php echo "gambar_slide_data_website3" ?>" alt="Third slide" style="width:1525px;height:400px;margin:auto">
                        <div class="container">
                          <div class="carousel-caption">
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div><!-- /.carousel -->

      </div>
      </div>
      </div>
    </div>

    <?php include_once "index_footer.php" ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="frontend/bootstrap/dist/jquery.min.js"></script>
    <script src="frontend/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
