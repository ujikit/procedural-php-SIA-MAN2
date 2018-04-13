<?php
session_start();
if($_SESSION['nip_pegawai']){
include_once "backend/koneksi.php";

$nip_pegawai = $_SESSION['nip_pegawai'];
$query_tampilNamaPegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
$row_tampilNamaPegawai = mysqli_fetch_array($query_tampilNamaPegawai);
$nama_pegawai = $row_tampilNamaPegawai['nama_pegawai'];
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
      <h1> Dashboard  <small>Input KD</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input KD</li>
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

                    $query_dataPegawai = mysqli_query($connect, "SELECT * from data_pegawai where nama_pegawai='$nama_pegawai'");
                    $rowPegawai = mysqli_fetch_array($query_dataPegawai);
                    $nip_pegawai = $rowPegawai['nip_pegawai'];

                    $tampilDataPegawai = "SELECT * from mata_pelajaran_transaksi inner join kelas_transaksi on mata_pelajaran_transaksi.kd_kelas_daftar_mata_pelajaran_transaksi = kelas_transaksi.kd_kelas_daftar_kelas_transaksi where nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai' order by kd_kelas_daftar_mata_pelajaran_transaksi asc";
                    //$tampilDataPegawai = "SELECT * from mata_pelajaran_transaksi where nama_guru_mata_pelajaran_transaksi = '$nama_pegawai'";
                    $tampil = mysqli_query($connect, $tampilDataPegawai);
                    while($row=mysqli_fetch_array($tampil)){
                  ?>
                  <tr>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_kelas_daftar_mata_pelajaran_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nip_pegawai_mata_pelajaran_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_mata_pelajaran_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <a type="button" class="btn btn-success" href="javascript:detailKDPerKelas('<?php echo $row['kd_kelas_daftar_mata_pelajaran_transaksi'] ?>','<?php echo $row['kd_mata_pelajaran_transaksi'] ?>','<?php echo $row['nip_pegawai_mata_pelajaran_transaksi'] ?>')" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Input Nilai Siswa</a>
                    </td>
                  </tr>
                  <?php  } ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>

    </div>

    </div>

    <?php include_once "halaman_administrator_footer.php" ?>

    <div class="control-sidebar-bg"></div>
  </div>



</body>
</html>

<?php
}
else {
  header("location:login_guru_atau_bk.php");
}
?>
