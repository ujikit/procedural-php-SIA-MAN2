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
        <li class="active">Daftar Nama Mata Pelajaran</li>
      </ol>
    </section>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:50px;">
          <span class="label label-success" style="font-size:21px;float:left">Halaman Daftar Nama Mata Pelajaran </span>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="container">
      <div class="col-lg-12" style="margin-top:20px;">
        <div class="table-responsive">
          <table id="tampilDataTables" class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">No</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Mata Pelajaran</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Kelompok Kelas</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=1;
                $tampilData = "SELECT * from mata_pelajaran where nama_mata_pelajaran !='Null' order by kelompok_kelas asc";
                $tampil = mysqli_query($connect, $tampilData);
                while($row=mysqli_fetch_array($tampil)){
              ?>

              <tr>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:left;position:relative;float:center"><?php echo $row["nama_mata_pelajaran"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:left;position:relative;float:center"><?php echo $row["kelompok_kelas"] ?></td>

              </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    </div>

    <div id="verifikasiPasswordBaru" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="verifikasi"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
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
