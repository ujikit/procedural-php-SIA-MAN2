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
  <title>MAN2YK | Administrator Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php include_once "halaman_administrator_bundle_css.php" ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once "halaman_siswa_navbar_menu.php" ?>
  <?php include_once "halaman_siswa_sidebar_menu.php" ?>
  <?php include_once "halaman_administrator_bundle_js.php" ?>

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
          <li class="active">Cek Hasil Belajar</li>
        </ol>
      </section>

     <div class="row" style="margin-top:40px;">
        <div class="container">

          <div class="row">

          	<div class="col-lg-3">
          		<!-- <a class="btn btn-default" role="button" href="#" title="Print" ><i class="fa fa-print"></i> Print</a> -->
          	</div>
          	<!-- <div class="col-lg-9" style="margin-bottom:15px;">
              <form role="form"  class="form-inline text-right" method="post" action="https://sia.uty.ac.id/std/khssmt/true">
                  <div class="form-group">
                  <label>Kelas : </label>
                      <select class="form-control" name="khsTa">
          		                <option value="2014" >10</option>
                              <option value="2015" >11</option>
                              <option value="2017" selected>12</option>
                      </select>
                  </div>
                  <div class="form-group">
                  <label>Semester :</label>
                      <select class="form-control" name="khsSmt">
                          <option value="0" selected> Semua </option>
                          <option value="1">1 / Ganjil</option>
                          <option value="2">2 / Genap</option>
                      </select>
                  </div>
                  <div class="form-group">
                  	<button type="submit" class="btn btn-primary">Lihat</button>
                  </div>
              </form>
          	</div> -->

          </div>


          <div class="panel panel-primary">
          	<div class="panel-heading">
          		<h3 class="panel-title">Kartu Hasil Belajar | Madrasah Aliyah Negeri Yogyakarta 2 </h3>
          	</div>
          	<div class="panel-body">
          		<!-- <div class='alert alert-dismissable alert-warning'>
          			<button type='button' class='close' data-dismiss='alert'>×</button><i class="fa fa-exclamation-triangle fa-lg"></i> <b>Catatan !</b><br/>
          			<ol>
          				<li>
          					Data KHS mahasiswa merupakan data KHS semester Ganjil,Genap, dan Pendek.
          				</li>
          				<li>
          					Nilai yang muncul pada menu KHS menampilkan <b>semua Data Nilai ( baik nilai matkul yang diambil 1 kali ataupun matkul yang di ambil lebih dari satu kali )</b>.
          				</li>
          				<li>
          					Jika ingin mendapatkan Rekap Nilai yang valid, bisa menghubungi bagian Operasional.
          				</li>
          			</ol>
          		</div> -->
              <div class="table-responsive">
          			<table id="tampilDataTables" class="table table-bordered table-hover table-striped tablesorter">
            			<thead>
            			  <tr>
            				<th  colspan="9" class="header text-center">NILAI AKADEMIK SISWA</th>
            			  </tr>
            			  <tr>
            				<th class="header text-center">No</th>
            				<th class="header text-center">Mata Pelajaran</i></th>
            				<th class="header text-center">Kelas</i></th>
            				<th class="header text-center">Tugas</i></th>
            				<th class="header text-center">UTS </th>
            				<th class="header text-center">Remidi UTS</th>
            				<th class="header text-center">UAS</i></th>
            				<th class="header text-center">Remidi UAS</i></th>
            				<th class="header text-center">Nilai Akhir</i></th>
            			  </tr>
            			</thead>
                  <!-- SMT1 -->
          			  <tbody>
                    <?php
                    $i=1;
                    $query_NilaiPerSiswa = "SELECT DISTINCT * from nilai_siswa_transaksi_smt1_pengetahuan inner join kelas_daftar on nilai_siswa_transaksi_smt1_pengetahuan.nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan=kelas_daftar.id_kelas_daftar where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$kelasSiswa' order by nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan asc, nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan asc";
                    $result_NilaiPerSiswa = mysqli_query($connect, $query_NilaiPerSiswa);
                    while($row_NilaiPerSiswa = mysqli_fetch_array($result_NilaiPerSiswa)){
                    ?>
                  <tr>
                    <td class="text-center"><?php echo $i++ ?></td>
                    <td><?php echo $row_NilaiPerSiswa['nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan']." (smt1)" ?></td>
                    <td><?php echo $row_NilaiPerSiswa['nama_kelas_daftar'] ?></td>
                    <td class="text-center"><a type="button" href="javascript:detailNilaiTugasPerSiswaSMT1('<?php echo $_SESSION['nis_siswa'] ?>','<?php echo $row_tampilKelasSiswa['id_kelas_daftar'] ?>','<?php echo $row_NilaiPerSiswa['id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan'] ?>')" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat Nilai</a></td>
                    <td class="text-center"><?php echo $row_NilaiPerSiswa['uts_nilai_siswa_transaksi11_smt1_pengetahuan'] ?></td>
          					<td class="text-center text-danger"><?php echo $row_NilaiPerSiswa['uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan'] ?></td>
          					<td class="text-center"><?php echo $row_NilaiPerSiswa['uas_nilai_siswa_transaksi11_smt1_pengetahuan'] ?></td>
                    <td class="text-center text-danger"><?php echo $row_NilaiPerSiswa['uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan'] ?></td>
                    <td class="text-center"><?php echo $row_NilaiPerSiswa['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'] ?></td>
          			  </tr>
                    <?php
                    }
                    ?>
                 <!-- SMT2 -->
                   <?php
                   $query_NilaiPerSiswa = "SELECT DISTINCT * from nilai_siswa_transaksi_smt2_pengetahuan inner join kelas_daftar on nilai_siswa_transaksi_smt2_pengetahuan.nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan=kelas_daftar.id_kelas_daftar where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$kelasSiswa' order by nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan asc, nama_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan asc";
                   $result_NilaiPerSiswa = mysqli_query($connect, $query_NilaiPerSiswa);
                   while($row_NilaiPerSiswa = mysqli_fetch_array($result_NilaiPerSiswa)){
                   ?>
                  <tr>
                   <td class="text-center"><?php echo $i++ ?></td>
                   <td><?php echo $row_NilaiPerSiswa['nama_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan']." (smt2)" ?></td>
                   <td><?php echo $row_NilaiPerSiswa['nama_kelas_daftar'] ?></td>
                   <td class="text-center"><a type="button" href="javascript:detailNilaiTugasPerSiswaSMT2('<?php echo $_SESSION['nis_siswa'] ?>','<?php echo $row_tampilKelasSiswa['id_kelas_daftar'] ?>','<?php echo $row_NilaiPerSiswa['id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan'] ?>')" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat Nilai</a></td>
                   <td class="text-center"><?php echo $row_NilaiPerSiswa['uts_nilai_siswa_transaksi11_smt2_pengetahuan'] ?></td>
                   <td class="text-center text-danger"><?php echo $row_NilaiPerSiswa['uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan'] ?></td>
                   <td class="text-center"><?php echo $row_NilaiPerSiswa['uas_nilai_siswa_transaksi11_smt2_pengetahuan'] ?></td>
                   <td class="text-center text-danger"><?php echo $row_NilaiPerSiswa['uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan'] ?></td>
                   <td class="text-center"><?php echo $row_NilaiPerSiswa['nilai_akhir_nilai_siswa_transaksi_smt2_pengetahuan'] ?></td>
                 </tr>
                   <?php
                   }
                   ?>
                 </tbody>
          			 <tfoot>
          			  <tr>
            				<!-- <td colspan="3" class="text-center"><strong></strong></td> -->
            				<!-- <td colspan="3" class="text-center"><strong></strong></td> -->
                    <!-- <td colspan="3" class="text-center"><strong></strong></td> -->
          			  </tr>
          			</tfoot>
          			</table>
          		</div>
          	</div> <!--end panel body-->
          </div> <!--end panel panel-primary-->

        </div> <!-- end container -->
    </div> <!-- end row -->

    <div id="asd" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_detail_pegawai.php"
              ?>
            </div>
        </div>
    </div>

</body>
</html>

<?php
}
else {
  header("location:login_siswa.php");
}
 ?>
