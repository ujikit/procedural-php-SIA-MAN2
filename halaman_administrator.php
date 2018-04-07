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
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php include_once "halaman_administrator_bundle_css.php" ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include_once "halaman_administrator_navbar_menu.php" ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once "halaman_administrator_sidebar_menu.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<div class="row">
  <div class="container">

    <div class="col-lg-12">

          <div class="col-lg-3" style="margin-top:20px;">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <?php
                    $jumlahKelas = "SELECT count(kd_kelas_daftar_kelas_transaksi) AS jumlah_kelas FROM kelas_transaksi";
                    $query = mysqli_query($connect, $jumlahKelas);
                    $result = mysqli_fetch_array($query);
                    ?>
                    <p class="announcement-heading" style="font-size:45px;"><?php echo "{$result['jumlah_kelas']}"; ?></p>
                  </div>
                </div>
              </div>
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6" style="font-size:14px;color:#a94442">
                      Total Kelas
                    </div>
                  </div>
                </div>
            </div>
          </div>

            <div class="col-lg-3" style="margin-top:20px;">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <?php
                      $jumlahKelas = "SELECT count(nama_pegawai) AS jumlah_pegawai FROM data_pegawai where not jabatan_pegawai='administrator'";
                      $query = mysqli_query($connect, $jumlahKelas);
                      $result = mysqli_fetch_array($query);
                       ?>
                      <p class="announcement-heading" style="font-size:45px;"><?php echo "{$result['jumlah_pegawai']}"; ?></p>
                    </div>
                  </div>
                </div>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6" style="font-size:14px;color:green">
                        Total Pegawai
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-3" style="margin-top:20px;">
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <?php
                      $jumlahKelas = "SELECT count(nama_siswa) AS jumlah_siswa FROM data_siswa";
                      $query = mysqli_query($connect, $jumlahKelas);
                      $result = mysqli_fetch_array($query);
                       ?>
                      <p class="announcement-heading" style="font-size:45px;"><?php echo "{$result['jumlah_siswa']}"; ?></p>
                    </div>
                  </div>
                </div>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6" style="font-size:14px;color:#86592d ">
                        Total Siswa
                      </div>
                    </div>
                  </div>
              </div>
            </div>

  <form class="form-signin" action="backend/administrator_edit_data_sekolah.php" method="post" enctype="multipart/form-data">

        <?php
        $query_tampilDataSekolah = "SELECT * from data_sekolah";
        $query = mysqli_query($connect, $query_tampilDataSekolah);
        $row = mysqli_fetch_array($query);
        ?>

        <div class="col-lg-3" style="margin-top:20px;">
          <div class="row">
            <div class="col-lg-12">
              <span class="label label-primary" style="font-size:15px;">Username Administrator</span>
              <input type="text" class="form-control" style="margin-top:20px;" name="username_administrator_sekolah" value="<?php echo $row['username_administrator_sekolah'] ?>">
            </div>
            <div class="col-lg-12" style="margin-top:20px;">
              <span class="label label-primary" style="font-size:15px;">Email Sekolah</span>
              <input type="text" class="form-control" style="margin-top:20px;" name="email_sekolah" value="<?php echo $row['email_sekolah'] ?>">
            </div>
          </div>
        </div>

        </div>

    <div class="col-lg-12" style="margin-top:20px;">
      <div class="col-lg-1">
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan Konfigurasi</button>
      </div>
    </div>
    <div class="col-lg-12">
        <div class="col-lg-3" style="margin-top:20px;">
          <span class="label label-primary" style="font-size:15px;">Upload Foto Kepala Sekolah</span>
          <!-- <div style="max-width: 650px; margin: auto;">
            <br>
              <div id="image-preview-div" style="display: none">
                <label for="exampleInputFile">Selected image:</label>
                <br>
                <img id="preview-img" src="noimage" class="img-circle" style="width:130px;margin-bottom:20px;">
              </div>
              <div class="form-group">
                <input type="file" name="foto_siswa" id="file">
              </div>
              <br>
          </div> -->
            </br></br>
              <input type="file" name="foto_kepala_sekolah_sekolah" id="preview_gambar" />
              <img src="noimage" id="gambar_nodin" width="150" alt="" style="margin-top:10px" />
        </div>
        <div class="col-lg-3">
          <div class="row">
            <div class="col-lg-12">
              <span class="label label-primary" style="font-size:12px;">Nama Kepala Sekolah</span>
              <input type="text" class="form-control" style="margin-top:20px;" name="nama_kepala_sekolah_sekolah" value="<?php echo $row['nama_kepala_sekolah_sekolah'] ?>">
            </div>
            <div class="col-lg-12" style="margin-top:20px;">
              <span class="label label-primary" style="font-size:12px;">NIP Kepala Sekolah</span>
              <input type="text" class="form-control" style="margin-top:20px;" name="nip_kepala_sekolah_sekolah" value="<?php echo $row['nip_kepala_sekolah_sekolah'] ?>">
            </div>
            <div class="col-lg-12" style="margin-top:20px;">
              <span class="label label-primary" style="font-size:12px;">Tanggal Jadi Kepala Sekolah</span>
              <input data-provide="datepicker" type="text" class="form-control" style="margin-top:20px;" name="tanggal_jadi_kepala_sekolah_sekolah" value="<?php echo $row['tanggal_jadi_kepala_sekolah_sekolah'] ?>">
            </div>
            <div class="col-lg-12" style="margin-top:20px;">
              <span class="label label-primary" style="font-size:12px;">Tahun Pelajaran : (Contoh : 2017 / 2018)</span>
              <input type="text" class="form-control" style="margin-top:20px;" name="tahun_pelajaran_sekolah_sekolah" value="<?php echo $row['tahun_pelajaran_sekolah_sekolah'] ?>" required>
            </div>
          </div>
        </div>
        <div class="col-lg-3" style="margin-top:20px;">
          <span class="label label-primary" style="font-size:15px;">Foto Kepala Sekolah</span>
            </br></br>
              <img src="frontend/img/foto/pegawai/kepala_sekolah" id="gambar_nodin" width="150" alt="" style="margin-top:10px;" />
        </div>
        <div class="col-lg-3" style="margin-top:20px;">
          <div class="row">
            <div class="col-lg-12">
              <span class="label label-primary" style="font-size:15px;">Nama Sekolah</span>
              <input type="text" class="form-control" style="margin-top:20px;" name="nama_sekolah_sekolah" value="<?php echo $row['nama_sekolah_sekolah'] ?>">
            </div>
            <div class="col-lg-12" style="margin-top:20px;">
              <span class="label label-primary" style="font-size:12px;">Alamat Sekolah</span>
              <textarea style="margin-top:20px;" name="alamat_sekolah_sekolah" rows="8" cols="28"><?php echo $row['alamat_sekolah_sekolah'] ?></textarea>
            </div>
            <div class="col-lg-12" style="margin-top:20px;">
              <span class="label label-primary" style="font-size:12px;">Asal Kota Sekolah</span>
              <input type="text" class="form-control" style="margin-top:20px;" name="asal_kota_sekolah_sekolah" value="<?php echo $row['asal_kota_sekolah_sekolah'] ?>">
            </div>
          </div>
            </br></br>
        </div>
    </div>
  </form>


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

<script>
function bacaGambar(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $('#gambar_nodin').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#preview_gambar").change(function(){
 bacaGambar(this);
});
</script>

</body>
</html>

<?php
}
else {
  header("location:index.php");
}
 ?>
