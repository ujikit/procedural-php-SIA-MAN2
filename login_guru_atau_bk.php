<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
?>
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

    <title>Portal Login Guru atau BK</title>

    <?php include_once "halaman_administrator_bundle_css.php" ?>
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
  <?php include_once "halaman_administrator_bundle_js.php" ?>
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
                    <a href="#" class="list-group-item active active" style="z-index:1;border:0px;margin:0 auto;text-align:center;position:relative;font-size:18px;background:#009933;float:center"><b>Portal Login Guru</b></a>
                  </div>

                  <div class="row" style="background:#d6f5d6;">
                    <div class="col-sm-12">
                    <div class="card card-container" style="margin-top:0px;">
                        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                          <img id="profile-img" class="profile-img-card" src="frontend/img/guru.png" style="margin-top: -20px; margin-bottom: -20px" />
                              <p id="profile-name" class="profile-name-card"></p>
                                <form id="form-signin" action="backend/cek_login_guru_atau_bk.php" class="form-signin" method="post">
                                  <input type="hidden" name="tanggal_terpakai_verifikasi_password_baru" value="<?php echo date("Y-m-d") ?>">
                                  <input type="hidden" name="jam_terpakai_verifikasi_password_baru" value="<?php echo date("H:i:s") ?>">
                                    <!-- <div class="form-group">
                                      <label for="sel1">Pilih (Guru atau BK) : </label>
                                      <select class="form-control" id="sel1" name="select_guru_atau_bk">
                                        <option>Guru</option>
                                        <option>BK</option>
                                      </select>
                                    </div> -->
                                    <input type="hidden" name="select_guru_atau_bk" value="Guru">
                                     <label for="sel1">Masukan ID Pegawai : </label>
                                      <input type="text" id="username_pegawai" class="form-control" placeholder="Masukan Username" name="username_pegawai" required>
                                      <label for="sel1">Masukan Password : </label>
                                      <input type="password" id="password_pegawai" class="form-control" placeholder="Masukan Password" name="password_pegawai" required>
                                        <!-- <div id="remember" class="checkbox">
                                          <label style="color:#404040">
                                            <input type="checkbox" value="remember-me"> Remember me
                                          </label>
                                        </div> -->
                                        <div class="error">

                                        </div>
                                      <input class="btn btn-primary btn-block" id="submit_login" name="submit" value="Login" type="submit">
                                </form><!-- /form -->
                                <a style="font-size:13.5px;margin-top:15px;float:center" data-toggle="modal" type="button" class="btn btn-danger" data-target="#lupaPasswordGuruAtauBK">Lupa Password?</a>
                    </div><!-- /card-container -->
                  </div>
                </div>

      </div>
      </div>
      </div>
    </div>

      <hr>

      <div id="lupaPasswordGuruAtauBK" class="modal fade">
          <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ganti Password</h4>
                </div>

            <form class="form-signin" action="backend/lupa_password.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="row">
                          <div class="col-lg-12">
                            <input type="hidden" name="lupa_password" value="<?php echo "LupaPasswordGuruAtauBK" ?>">
                            <input type="hidden" name="tanggal_ganti_verifikasi_password_baru" value="<?php echo date("Y-m-d") ?>">
                            <input type="hidden" name="jam_ganti_verifikasi_password_baru" value="<?php echo date("H:i:s") ?>">
                            <label for="sel1">Masukan NIP Pegawai : </label>
                            <input type="text" class="form-control" name="username_verifikasi_password_baru" required oninvalid="this.setCustomValidity('Masukan NIP')" oninput="setCustomValidity('')">
                            <label for="sel1">Password Baru Pegawai : </label>
                            <input type="password" class="form-control" name="password_baru_verifikasi_password_baru" required oninvalid="this.setCustomValidity('Masukan Password Baru')" oninput="setCustomValidity('')">
                          </div>
                        </div>

                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary" type="submit" name="submit">Ganti Password</button>
                          <p>
                            <?php echo date("H:i:s") ?>
                          </p>
                      </div>
            </form>

              </div>
          </div>
      </div>

    <?php include_once "index_footer.php" ?>

    <script type="text/javascript">
      $(document).ready(function() {

        // swal("Gagal Login", "Pastikan Login Guru atau BK Terisi Dengan Benar.", "error");

      });
    </script>
  </body>



</html>
