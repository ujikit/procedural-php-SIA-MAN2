<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Portal Login Administrator</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontend/bootstrap/dist/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="frontend/bootstrap/dist/css/offcanvas.css" />
    <link rel="stylesheet" type="text/css" href="frontend/bootstrap/dist/css/login.css" />

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

<?php include_once "index_navbar.php" ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="margin-top: -20px;background:#e6ffe6">
    <div class="container">
    <div class="row">
    <div class="col-lg-4" style="margin-top: 25px;">

    <?php include_once "index_sidebar.php" ?>

      </div>
      <div class="col-lg-8">

         <div class="blog-masthead" style="background:#009933;height:45px;margin-top:20px;">
                    <a href="#" class="list-group-item active active" style="z-index:1;border:0px;margin:0 auto;text-align:center;position:relative;font-size:18px;background:#009933;float:center"><b>Portal Login Administrator</b></a>
                  </div>

                  <div class="row" style="background:#d6f5d6;">
                    <div class="col-sm-12">
                    <div class="card card-container" style="margin-top:0px;">
                        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                          <img id="profile-img" class="profile-img-card" src="frontend/img/MAN2YK.png" style="width:120px;height:120px;"/>
                              <p id="profile-name" class="profile-name-card"></p>
                                <form class="form-signin" action="backend/cek_login_administrator.php" method="post">
                                     <label for="sel1">Masukan Username Pegawai : </label>
                                      <input type="text" id="inputEmail" class="form-control" placeholder="Masukan Username" name="username_pegawai" required autofocus>
                                      <label for="sel1">Masukan Password : </label>
                                      <input type="password" id="inputPassword" class="form-control" placeholder="Masukan Password" name="password_pegawai" required>
                                        <div id="remember" class="checkbox">
                                          <label style="color:#404040">
                                            <input type="checkbox" value="remember-me"> Remember me
                                          </label>
                                        </div>
                                      <input name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Masuk">
                                </form><!-- /form -->
                                <a href="#" class="forgot-password" style="color:#404040">
                                Forgot the password?
                          </a>
                    </div><!-- /card-container -->
                  </div>
                </div>

      </div>
      </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script>window.jQuery || document.writehttp://localhost/man2/login_administrator.php#('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="frontend/bootstrap/dist/jquery.min.js"></script>
    <script src="frontend/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="frontend/bootstrap/dist/js/login.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
