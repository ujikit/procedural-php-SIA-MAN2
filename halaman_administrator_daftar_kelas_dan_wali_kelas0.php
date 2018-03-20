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
<body class="hold-transition skin-blue sidebar-mini" id="bodyDaftarKelas">
  <div class="wrapper">
  <?php include_once "halaman_administrator_navbar_menu.php" ?>
  <?php include_once "halaman_administrator_sidebar_menu.php" ?>
  <?php include_once "halaman_administrator_bundle_js.php" ?>

  <div class="content-wrapper" style="background:white;">

  <div id="tampilPengampuMataPelajaran">
    <div id="tampilSiswaPerKelas">

    <section class="content-header">
      <ol class="breadcrumb" style="position:;float:">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Kelas & Wali Kelas</li>
      </ol>
    </section>

      <div class="row">
        <div class="container">
          <div class="col-lg-12" style="margin-top:50px;">
            <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahKelas"><i class="fa fa-plus"></i> Tambah Kelas</a>
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
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jumlah Siswa</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Guru Pengampu</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1;
                    $tampilDataPegawai = "SELECT * from kelas_transaksi order by nama_kelas_transaksi asc";
                    $tampil = mysqli_query($connect, $tampilDataPegawai);
                    while($row=mysqli_fetch_array($tampil)){
                  ?>
                  <tr>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_kelas_transaksi"] ?></td>
                    <td><?php echo $row["wali_kelas_transaksi"] ?></td>
                      <?php
                    $id_kelas_daftar = $row['id_kelas_daftar'];
                    $query_hitung_siswa_per_kelas = mysqli_query($connect, "SELECT count(id_kelas_daftar) AS jumlah_siswa from data_siswa where id_kelas_daftar='$id_kelas_daftar'");
                    $rows = mysqli_fetch_array($query_hitung_siswa_per_kelas);
                    ?>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "{$rows['jumlah_siswa']}"; ?></td>
                    <!--<td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">JUMLAH SISWA PER KELAS</td>-->
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <a type="button" class="btn btn-success" href="javascript:detailSemuaPengampuMataPelajaran('<?php echo $row['id_kelas_daftar'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Lihat Guru Pengampu</a>
                          <a type="button" class="btn btn-primary" href="javascript:detailSemuaSiswaPerKelas('<?php echo $row['id_kelas_daftar'] ?>','<?php echo $row['kelompok_kelas_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Lihat Siswa</a>
                    </td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <a type="button" class="btn btn-success" href="javascript:detailKelas('<?php echo $row['id_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                          <a type="button" class="btn btn-primary" href="javascript:editKelas('<?php echo $row['id_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                          <a type="button" class="btn btn-danger " href="javascript:deleteKelas('<?php echo $row['id_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

          <form class="form-signin" action="backend/administrator_tambah_kelas_dan_wali_kelas.php" method="post" enctype="multipart/form-data">
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
                                        $tampilDataJabatan = "select * from data_pegawai";
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

  <script type="text/javascript">

  </script>

</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
