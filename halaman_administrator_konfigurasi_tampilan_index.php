<?php
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";

if($_SESSION['nip_administrator']){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Administrator Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include_once "halaman_administrator_bundle_css.php" ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <?php include_once "halaman_administrator_navbar_menu.php" ?>
  <?php include_once "halaman_administrator_sidebar_menu.php" ?>
  <?php include_once "halaman_administrator_bundle_js.php" ?>

  <div class="content-wrapper" style="background:white;">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Konfigurasi Tampilan Web</li>
      </ol>
    </section>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:50px;background:#E6FFF4">

          <?php
          $query_konfigurasi_tampilan_index_global = "SELECT * from data_website where id_data_website='1'";
          $result_konfigurasi_tampilan_index_global = mysqli_query($connect, $query_konfigurasi_tampilan_index_global);
          $row_konfigurasi_tampilan_index_global = mysqli_fetch_array($result_konfigurasi_tampilan_index_global);
          ?>

          <form class="form-signin" action="backend/administrator_konfigurasi_tampilan_index.php" method="post" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-lg-6">
                  <span class="label label-success" style="font-size:25px;float:left">Large Mode </span>
                  </div>
                  <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Konfigurasi</button>
                  </div>
                </div>

                <div class="row" style="margin-top:70px">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                      <!-- <img class="first-slide" src="frontend/img/logo3.png" alt="First slide" style="width:400px; float:right"> -->
                  </div>
                  <div class="col-lg-5">
                      <!-- <p> -->
                          <!-- <span class="label label-danger" style="font-size:17px;"><span class="glyphicon glyphicon-pencil"></span> Marquee</span> -->
                          <!-- <input class="form-control" type="text" name="marquee_data_website" style="margin-top:15px;" value="<?php echo $row_konfigurasi_tampilan_index_global['marquee_data_website'] ?>"> -->
                      <!-- </p> -->
                  </div>
                  <div class="col-lg-2">
                      <p>
                          <span class="label label-danger" style="font-size:17px;"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Hubungi Kami </span>
                          <input class="form-control" type="text" name="hubungi_kami_data_website" style="margin-top:15px;" value="<?php echo $row_konfigurasi_tampilan_index_global['hubungi_kami_data_website'] ?>">
                      </p>
                  </div>
                  <div class="col-lg-2">
                      <p>
                          <span class="label label-danger" style="font-size:17px;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email Kami </span>
                          <input class="form-control" type="text" name="email_data_website"style="margin-top:15px;" value="<?php echo $row_konfigurasi_tampilan_index_global['email_data_website'] ?>">
                      </p>
                  </div>
                  <div class="col-lg-1">
                  </div>
                </div>

                <div class="row" style="margin-top:30px;">

                  <?php
                  $query_konfigurasi_tampilan_index_slide1 = "SELECT * from data_website where id_data_website='2'";
                  $result_konfigurasi_tampilan_index_slide1 = mysqli_query($connect, $query_konfigurasi_tampilan_index_slide1);
                  $row_konfigurasi_tampilan_index_slide1 = mysqli_fetch_array($result_konfigurasi_tampilan_index_slide1);
                  ?>

                  <div class="col-lg-4" style="margin-bottom:20px;">
                    <span class="label label-danger" style="font-size:17px;"><span class="glyphicon glyphicon-picture"></span> Slide 1 </span>
                    <div style="max-width: 650px; margin: auto; margin-top:15px">

                        <div class="form-group">
                          <input type="file" name="gambar_slide_data_website1" id="file">
                        </div>
                        <br>
                    </div>
                    <span class="label label-info" style="font-size:12px;"> Judul Konten Slide 1</span>
                    <input class="form-control" style="margin-bottom:10px;margin-top:15px" type="text" name="judul_konten_slide_data_website1" value="<?php echo $row_konfigurasi_tampilan_index_slide1['judul_konten_slide_data_website'] ?>">
                    <span class="label label-warning" style="font-size:12px;"> Isi Konten Slide 1</span>
                    <textarea class="form-control" style="margin-top:15px;" name="isi_konten_slide_data_website1" rows="8" cols="30" autocomplete="off" ><?php echo $row_konfigurasi_tampilan_index_slide1['isi_konten_slide_data_website'] ?></textarea>
                  </div>
                  <div class="col-lg-4" style="margin-bottom:20px;">

                    <?php
                    $query_konfigurasi_tampilan_index_slide2 = "SELECT * from data_website where id_data_website='3'";
                    $result_konfigurasi_tampilan_index_slide2 = mysqli_query($connect, $query_konfigurasi_tampilan_index_slide2);
                    $row_konfigurasi_tampilan_index_slide2 = mysqli_fetch_array($result_konfigurasi_tampilan_index_slide2);
                    ?>

                    <span class="label label-danger" style="font-size:17px;"><span class="glyphicon glyphicon-picture"></span> Slide 2 </span>
                    <div style="max-width: 650px; margin: auto; margin-top:15px">

                        <div class="form-group">
                          <input type="file" name="gambar_slide_data_website2" id="file">
                        </div>
                        <br>
                    </div>
                    <span class="label label-info" style="font-size:12px;"> Judul Konten Slide 2</span>
                    <input class="form-control" style="margin-bottom:10px;margin-top:15px" type="text" name="judul_konten_slide_data_website2" value="<?php echo $row_konfigurasi_tampilan_index_slide2['judul_konten_slide_data_website'] ?>">
                    <span class="label label-warning" style="font-size:12px;"> Isi Konten Slide 2</span>
                    <textarea class="form-control" style="margin-top:15px;" name="isi_konten_slide_data_website2" rows="8" cols="30" autocomplete="off" ><?php echo $row_konfigurasi_tampilan_index_slide2['isi_konten_slide_data_website'] ?></textarea>
                  </div>
                  <div class="col-lg-4" style="margin-bottom:20px;">
                    <span class="label label-danger" style="font-size:17px;"><span class="glyphicon glyphicon-picture"></span> Slide 3 </span>
                    <div style="max-width: 650px; margin: auto; margin-top:15px">

                        <div class="form-group">
                          <input type="file" name="gambar_slide_data_website3" id="file">
                        </div>
                        <br>
                    </div>

                    <?php
                    $query_konfigurasi_tampilan_index_slide3 = "SELECT * from data_website where id_data_website='4'";
                    $result_konfigurasi_tampilan_index_slide3 = mysqli_query($connect, $query_konfigurasi_tampilan_index_slide3);
                    $row_konfigurasi_tampilan_index_slide3 = mysqli_fetch_array($result_konfigurasi_tampilan_index_slide3);
                    ?>

                    <span class="label label-info" style="font-size:12px;"> Judul Konten Slide 3</span>
                    <input class="form-control" style="margin-bottom:10px;margin-top:15px" type="text" name="judul_konten_slide_data_website3" value="<?php echo $row_konfigurasi_tampilan_index_slide3['judul_konten_slide_data_website'] ?>">
                    <span class="label label-warning" style="font-size:12px;"> Isi Konten Slide 3</span>
                    <textarea class="form-control" style="margin-top:15px;" name="isi_konten_slide_data_website3" rows="8" cols="30" autocomplete="off" ><?php echo $row_konfigurasi_tampilan_index_slide3['isi_konten_slide_data_website'] ?></textarea>
                  </div>
                </div>

          </form>




        </div>
      </div>
    </div>
    </div>


    <?php include_once "halaman_administrator_footer.php" ?>

    <div class="control-sidebar-bg"></div>
  </div>



</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
