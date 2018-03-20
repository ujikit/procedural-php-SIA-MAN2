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
        <li class="active">Daftar Verifikasi Password</li>
      </ol>
    </section>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:50px;">
          <span class="label label-success" style="font-size:21px;float:left">Halaman Verifikasi Password Baru </span>
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
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Username</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jabatan</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Tanggal Lupa Password</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jam Lupa Password</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Tanggal Verifikasi Password</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jam Verifikasi Password</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Tanggal Terpakai</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jam Terpakai</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Status</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=1;
                $tampilData = "SELECT * from verifikasi_password order by tanggal_ganti_verifikasi_password_baru asc, jam_ganti_verifikasi_password_baru asc";
                $tampil = mysqli_query($connect, $tampilData);
                while($row=mysqli_fetch_array($tampil)){
                  $username_verifikasi_password_baru = $row["username_verifikasi_password_baru"];
              ?>

              <tr>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["username_verifikasi_password_baru"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jabatan_verifikasi_password_baru"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["tanggal_ganti_verifikasi_password_baru"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jam_ganti_verifikasi_password_baru"] ?></td>

                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["tanggal_verifikasi_verifikasi_password_baru"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jam_verifikasi_verifikasi_password_baru"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["tanggal_terpakai_verifikasi_password_baru"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jam_terpakai_verifikasi_password_baru"] ?></td>

                <?php
                $query_tampilSiswaBelumValid = "SELECT * from verifikasi_password where status_verifikasi_password_baru='N' and username_verifikasi_password_baru='$username_verifikasi_password_baru'";
                $query = mysqli_query($connect, $query_tampilSiswaBelumValid);
                $mysqli_num_rows = mysqli_num_rows($query);
                if ($mysqli_num_rows==1) {
                ?>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><span class="label label-danger" style="font-size:15px;">Belum Aktif</span></td>
                <?php
                }
                else {
                ?>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><span class="label label-success" style="font-size:15px;">Sudah Aktif</span></td>
                <?php
                }
                ?>

                <?php
                $query_tampilSiswaBelumValid = "SELECT * from verifikasi_password where status_verifikasi_password_baru='N' and username_verifikasi_password_baru='$username_verifikasi_password_baru'";
                $query = mysqli_query($connect, $query_tampilSiswaBelumValid);
                $mysqli_num_rows = mysqli_num_rows($query);
                if ($mysqli_num_rows==1) {
                ?>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><a type="button" class="btn btn-success" href="javascript:verifikasiPasswordBaru('<?php echo $row['id_verifikasi_password_baru'] ?>')"><span class="glyphicon glyphicon-ok"></span></a></td>
                <?php
                }
                else {

                ?>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><a type="button" class="btn btn-default disabled" href="javascript:verifikasiPasswordBaru('<?php echo $row['id_verifikasi_password_baru'] ?>')"><span class="glyphicon glyphicon-ok"></span></a></td>
                <?php
                }
                ?>


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
