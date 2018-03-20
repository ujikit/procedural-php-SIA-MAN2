<!DOCTYPE html>
<?php
include_once ('backend/koneksi.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="frontend/img/logo2.png">

    <title>Situs Resmi MAN 2 Yogyakarta</title>

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

  <body style="background-color:#f2f2f2">

<?php include_once "index_navbar.php" ?>

  </div>

        <div class="hidden-xs">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="row" style="margin-top:70px">
              <div class="col-lg-1">
              </div>
              <div class="col-lg-1">
                  <!-- <img class="first-slide" src="frontend/img/logo3.png" alt="First slide" style="width:400px; float:right"> -->
              </div>
                <?php
                $query_data_website_global = "SELECT * from data_website where id_data_website='1'";
                $result_data_website_global = mysqli_query($connect, $query_data_website_global);
                $row_data_website_global = mysqli_fetch_array($result_data_website_global);
                ?>
              <div class="col-lg-5">
                  <p style="font-size:18px;margin-top:10px;">
                    <!-- marque -->
                      <marquee behavior="scroll" direction="left"><?php echo $row_data_website_global['marquee_data_website'] ?></marquee>
                  </p>
              </div>
              <div class="col-lg-2">
                  <p style="font-size:17px">
                      <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                      &nbsp&nbsp <b>Hubungi Kami</b><br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row_data_website_global['hubungi_kami_data_website'] ?>
                  </p>
              </div>
              <div class="col-lg-2">
                  <p style="font-size:17px">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                      &nbsp&nbsp <b>Email Kami</b><br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row_data_website_global['email_data_website'] ?>
                  </p>
              </div>
              <div class="col-lg-1">
              </div>
            </div>
            <div class="jumbotron" style="margin-top:10px;background:transparent">
                <!-- Carousel ================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-45px">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <?php
                  $query_data_website_slide1 = "SELECT * from data_website where id_data_website='2'";
                  $result_data_website_slide1 = mysqli_query($connect, $query_data_website_slide1);
                  $row_data_website_slide1 = mysqli_fetch_array($result_data_website_slide1);
                  ?>

                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="first-slide" src="frontend/img/profil/<?php echo "gambar_slide_data_website1" ?>" alt="First slide" style="width:1524px">
                      <div class="container">
                        <div class="row">
                          <div class="hidden-xs">
                          <div class="carousel-caption">
                            <div style="background: rgba(0, 0, 0, 0.4)" class="display:block">
                              <h1><b><?php echo $row_data_website_slide1['judul_konten_slide_data_website'] ?></b></h1>
                              <p><?php echo $row_data_website_slide1['isi_konten_slide_data_website'] ?></p>
                            </div>
                              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Baca Yuk!</a></p> -->
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php
                    $query_data_website_slide2 = "SELECT * from data_website where id_data_website='3'";
                    $result_data_website_slide2 = mysqli_query($connect, $query_data_website_slide2);
                    $row_data_website_slide2 = mysqli_fetch_array($result_data_website_slide2);
                    ?>

                    <div class="item">
                      <img class="second-slide" src="frontend/img/profil/<?php echo "gambar_slide_data_website2" ?>" alt="First slide" style="width:1524px">
                      <div class="container">
                        <div class="row">
                          <div class="hidden-xs">
                          <div class="carousel-caption">
                            <div style="background: rgba(0, 0, 0, 0.4)" class="display:block">
                              <h1><b><?php echo $row_data_website_slide2['judul_konten_slide_data_website'] ?></b></h1>
                              <p><?php echo $row_data_website_slide2['isi_konten_slide_data_website'] ?></p>
                            </div>
                              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Baca Yuk!</a></p> -->
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php
                    $query_data_website_slide3 = "SELECT * from data_website where id_data_website='4'";
                    $result_data_website_slide3 = mysqli_query($connect, $query_data_website_slide3);
                    $row_data_website_slide3 = mysqli_fetch_array($result_data_website_slide3);
                    ?>

                    <div class="item">
                      <img class="third-slide" src="frontend/img/profil/<?php echo "gambar_slide_data_website3" ?>" alt="First slide" style="width:1524px">
                      <div class="container">
                        <div class="row">
                          <div class="hidden-xs">
                          <div class="carousel-caption">
                            <div style="background: rgba(0, 0, 0, 0.4)" class="display:block">
                              <h1><b><?php echo $row_data_website_slide3['judul_konten_slide_data_website'] ?></b></h1>
                              <p><?php echo $row_data_website_slide3['isi_konten_slide_data_website'] ?></p>
                            </div>
                              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Baca Yuk!</a></p> -->
                          </div>
                          </div>
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

        <div class="visible-xs-block">
          <div class="row">
            <div class="container">
              <div class="col-lg-6" style="margin-top: 35px;">
                  <ol class="breadcrumb" style="font-size:13px;">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
                  </ol>
                  <h1 style="float:left">Selamat Datang!</h1>
                  <p style="float:left">Madrasah Aliyah Negeri Yogyakarta 2 adalah salah satu sekolah menengah keatas yang bertitle negeri nampun memadukannya dengan wawasan agama.</p>
              </div>
            </div>
          </div>
        </div>

      <div style="margin-top:0px">
        <?php include_once "index_footer.php" ?>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="frontend/bootstrap/dist/jquery.min.js"></script>
    <script src="frontend/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
