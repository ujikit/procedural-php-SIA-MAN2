<?php
session_start();
include_once "backend/koneksi.php";

$nis_siswa = $_SESSION['nis_siswa'];
$query_tampilKelasSiswa = "SELECT * from data_siswa where nis_siswa='$nis_siswa'";
$result_tampilKelasSiswa = mysqli_query($connect, $query_tampilKelasSiswa);
$row_tampilKelasSiswa = mysqli_fetch_array($result_tampilKelasSiswa);
$kelasSiswa = $row_tampilKelasSiswa['id_kelas_daftar'];

if($_SESSION['nis_siswa']){


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="frontend/img/MAN2YK.png">
  <title>MAN2YK | Administrator Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php include_once "halaman_administrator_bundle_css.php" ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once "halaman_siswa_navbar_menu.php" ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once "halaman_siswa_sidebar_menu.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background:white;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

     <div class="row">
        <div class="container">

          

        </div> <!--col-lg-12-->
      </div>
    </div>
      <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

<?php include_once "halaman_administrator_footer.php" ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<?php include_once "halaman_administrator_bundle_js.php" ?>

</body>
</html>

<?php
}
else {
  header("location:login_siswa.php");
}
 ?>
