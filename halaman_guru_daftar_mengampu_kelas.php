<?php
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";

// $nama_guru = $_SESSION['nama_guru'];

if($_SESSION['nip_pegawai']){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Guru Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include_once "halaman_administrator_bundle_css.php" ?>


</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <?php include_once "halaman_guru_navbar_menu.php" ?>
  <?php include_once "halaman_guru_sidebar_menu.php" ?>
  <?php include_once "halaman_administrator_bundle_js.php" ?>

  <div class="content-wrapper" style="background:white;">
    <section class="content-header">
      <h1> Dashboard  <small>Input Nilai Siswa</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Nilai Siswa</li>
      </ol>
    </section>

    <div id="tampilPengampuMataPelajaran">

      <div class="row">
        <div class="container">
          <div class="col-lg-12" style="margin-top:50px;">

          </div>
        </div>
      </div>

      <div class="row">
        <div class="container">
          <div class="col-lg-12" style="margin-top:20px;">
            <div class="table-responsive">
              <table id="tampilDataTables" class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">

                <?php
                $cek_dataPegawai = "SELECT nip_pegawai from data_pegawai where nip_pegawai='$nip_pegawai'";
                $runqueryCekPegawai = mysqli_query($connect, $cek_dataPegawai);
                $row = mysqli_fetch_array($runqueryCekPegawai);
                $nip_pegawai = $row["nip_pegawai"];

                $query_cek_guru_mengampu = "SELECT * FROM mata_pelajaran_transaksi WHERE nip_pegawai_mata_pelajaran_transaksi = '$nip_pegawai'";
                $runqueryCekGuruPengampu = mysqli_query($connect, $query_cek_guru_mengampu);
                $num_rows = mysqli_num_rows($runqueryCekGuruPengampu);
                if ($num_rows > 0) {
                ?>

                <thead>
                  <tr>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">No</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Kelas</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Wali Kelas</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Mata Pelajaran</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1;

                    $tampilDataPegawai = "SELECT * from mata_pelajaran_transaksi inner join kelas_transaksi on mata_pelajaran_transaksi.kd_kelas_daftar_mata_pelajaran_transaksi=kelas_transaksi.kd_kelas_daftar_kelas_transaksi where nip_pegawai_mata_pelajaran_transaksi = '$nip_pegawai' order by kd_kelas_daftar_mata_pelajaran_transaksi asc";
                    $tampil = mysqli_query($connect, $tampilDataPegawai);
                    while($row=mysqli_fetch_array($tampil)){
                  ?>
                  <tr>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_kelas_daftar_mata_pelajaran_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nip_pegawai_mata_pelajaran_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_mata_pelajaran_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <a type="button" class="btn btn-success" href="javascript:detailSemuaNilaiSiswa('<?php echo $row['kd_kelas_daftar_mata_pelajaran_transaksi'] ?>','<?php echo $row['kd_mata_pelajaran_transaksi'] ?>','<?php echo $row['nip_pegawai_mata_pelajaran_transaksi'] ?>')" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Input Nilai Siswa</a>
                    </td>
                  </tr>
                  <?php  } ?>
                </tbody>

                <?php
                }
                else{
                  echo "Data Kelas Tidak Tersedia.";
                }
                 ?>

              </table>
            </div>
          </div>
        </div>
      </div>

    </div>

    </div>

    <div id="detailKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_detail_pegawai.php"
              ?>
            </div>
        </div>
    </div>

    <div id="tambahKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Data Kelas dan Wali Kelas</h4>
              </div>

          <form class="form-signin" action="backend/administrator_tambah_kelas.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                      <div class="row">
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-12">
                            <label for="sel1">Nama Kelas </label>
                                <select class="form-control" name="nama_kelas_transaksi" require>
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
                              </div>
                                <div class="col-lg-12" style="margin-top:15px;">
                                <label for="sel1">Wali Kelas </label>
                                    <select class="form-control" name="wali_kelas_transaksi" require>
                                      <option value="">Pilih Wali Kelas : </option>
                                      <?php
                                        $no=1;
                                        $tampilDataJabatan = "SELECT * from data_pegawai";
                                        $tampil = mysqli_query($connect, $tampilDataJabatan);
                                        while($row=mysqli_fetch_array($tampil)){
                                      ?>
                                      <option value="<?php echo $row["nama_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                                      <?php  } ?>
                                    </select>
                                </div>
                          </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                      <button class="btn btn-success" type="submit" name="submit">Tambah Data Kelas</button>
                    </div>
          </form>
            </div>
        </div>
    </div>

    <div id="editKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="edit"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

    <div id="deleteKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="delete"></div>
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
