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
        <li class="active">Daftar Pegawai</li>
      </ol>
    </section>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:50px;">
          <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDataPegawai"><i class="fa fa-plus"></i> Tambah Pegawai</a>
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
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Foto Siswa</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">NIP Pegawai</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Pembayaran</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#99ff66">Total yg Harus di Bayar</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Total Cicil</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#ff8080">Kekurangan</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  $tampilDataPegawai = "SELECT * from pembayaran INNER JOIN pembayaran_daftar on pembayaran.kd_pembayaran = pembayaran_daftar.kd_pembayaran_daftar WHERE lunas_pembayaran='N' ORDER BY kekurangan_pembayaran asc";
                  $tampil = mysqli_query($connect, $tampilDataPegawai);
                  while($row = mysqli_fetch_array($tampil)){
                ?>
                <tr>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><img  src="frontend/img/foto/siswa/<?php echo $row['nis_siswa_pembayaran']; ?>" class="img-circle" style="width:50px;"></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nis_siswa_pembayaran"] ?></td>
                  <td><?php echo $row["nama_pembayaran_daftar"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Rp. ".ucfirst($row["jumlah_bayar_pembayaran_daftar"]).",-" ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Rp. ".ucfirst($row["cicil_total_pembayaran"]).",-" ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Rp. ".$row["kekurangan_pembayaran"].",-" ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <a type="button" class="btn btn-success" href="javascript:detailPembayaranSiswa('<?php echo $row['id_pembayaran'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-primary" href="javascript:editPembayaranSiswa('<?php echo $row['id_pembayaran'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
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

    <div id="detailPembayaranSiswa" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php

              ?>
            </div>
        </div>
    </div>

  <div id="editPembayaranSiswa" class="modal fade">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div id="edit"></div>
            <?php

            ?>
          </div>
      </div>
  </div>

<?php include_once "halaman_administrator_footer.php" ?>

  <div class="control-sidebar-bg"></div>
</div>

<script type="text/javascript">

</script>

</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
