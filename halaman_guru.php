<?php
session_start();
if($_SESSION['nip_pegawai']){
include "backend/koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Guru Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php include_once "halaman_administrator_bundle_css.php" ?>

  <style media="screen">
    body{
      /*background-image: url("frontend/img/background-home.jpg");*/
    }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper" style="">

<?php include_once "halaman_guru_navbar_menu.php" ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once "halaman_guru_sidebar_menu.php" ?>

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
      <div class="col-lg-12">

        <p class="text-center" style="font-size:50px;">SELAMAT DATANG!</p>

      </div>
    </div> <!--col-lg-12-->
  </div>

</div><!--content-wrapper-->
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


<!--Modal Tambah Kelas-->
<div id="tambahKelas" class="modal fade">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Kelas</h4>
            </div>
              <form class="form-signin" action="backend/administrator_tambah_kelas.php" method="post">
            <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-12">
                    </br>
                    <div class="row" style="margin-top:15px;">
                                <div class="col-lg-12">
                                  <label for="sel1">Pilih Kelas : </label>
                                      <select class="form-control" name="nama_kelas_transaksi">
                                        <option value="">Pilih Kelas : </option>
                                        <?php
                                          $no=1;
                                          $tampilDataJabatan = "select * from kelas_daftar";
                                          $tampil = mysqli_query($connect, $tampilDataJabatan);
                                          while($row=mysqli_fetch_array($tampil)){
                                        ?>
                                        <option value="<?php echo $row["nama_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                                        <?php  } ?>
                                      </select>
                                    </br>
                                </div>
                                <div class="col-lg-12">
                                    <label for="sel1">Nama Wali Kelas </label>
                                    <select class="form-control" name="wali_kelas_transaksi">
                                      <option value="0">Pilih Wali Kelas : </option>
                                      <?php
                                        $no=1;
                                        $tampilDataPegawai = "select * from data_pegawai";
                                        $tampil = mysqli_query($connect, $tampilDataPegawai);
                                        while($row=mysqli_fetch_array($tampil)){
                                      ?>
                                      <option value="<?php echo $row["nama_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                                      <?php  } ?>
                                    </select>
                                    </br>
                                </div>
                                </div>
                      </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

    <div id="tampilDataKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>
    <div id="editDataKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="edit"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>
    <div id="deleteDataKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="delete"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

<?php include_once "halaman_administrator_bundle_js.php" ?>

<script type="text/javascript">

</script>

</body>
</html>

<?php
}
else {
  header("location:login_guru_atau_bk.php");
}
 ?>
