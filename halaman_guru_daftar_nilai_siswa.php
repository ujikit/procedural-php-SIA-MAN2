<?php
error_reporting(0);
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";

if($_SESSION['nip_pegawai']){
$kd_kelas_daftar = $_GET["kd_kelas_daftar"];
$kd_mata_pelajaran = $_GET["kd_mata_pelajaran"];
$nip_pegawai = $_GET["nip_pegawai"];

?>

<!DOCTYPE html>
<html>
<head>
</head>
  <body class="hold-transition skin-blue sidebar-mini">

    <script type="text/javascript" charset="utf-8">
    		$(document).ready(function() {
    			$('#tampilDataTables').DataTable();

    		} );
    </script>

    <?php
    $query_cetakLaporan = "SELECT kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan from nilai_siswa_transaksi_smt1_pengetahuan where kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan='$kd_kelas_daftar' && kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$kd_mata_pelajaran'";
    $tampil = mysqli_query($connect, $query_cetakLaporan);
    $row = mysqli_fetch_array($tampil);
    $kd_mata_pelajaran_nilai_siswa_transaksi = $row['kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan'];
    ?>

    <div class="row" style="margin-bottom:-75px;margin-top:40px;">
      <div class="col-lg-12">
        <div class="container">
          <div class="col-lg-12">

          <!-- Static navbar -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a style="background:#00a65a;color:white" href="#" id="peng1">SEMESTER 1</a></li>
                  <li><a style="background:#dd4b39;color:white" href="#" id="peng2">SEMESTER 2</a></li>
                  <!-- <li><a style="background:#dd4b39;color:white" href="#" id="ket1">KETERAMPILAN 1</a></li>
                  <li><a style="background:#dd4b39;color:white" href="#" id="ket2">KETERAMPILAN 2</a></li> -->
                  <!-- <li><a style="background:#00c0ef;color:white" href="#" id="spir1">SPIRITUAL 1</a></li>
                  <li><a style="background:#00c0ef;color:white" href="#" id="spir2">SPIRITUAL 2</a></li>
                  <li><a style="background:#f39c12;color:white" href="#" id="sos1">SOSIAL 1</a></li>
                  <li><a style="background:#f39c12;color:white" href="#" id="sos2">SOSIAL 2</a></li> -->
                </ul>
              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
          </nav>

          </div>
          <div class="col-lg-12" style="margin-top:5px;margin-bottom:10px;">
            <!-- <button id="Segarkan" type="submit" class="btn btn-success" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-refresh"></i> Refresh</button> -->
          </div>
        </div>
      </div>
    </div>

      <div class="row" style="margin-top:60px;">
        <div class="col-lg-12">
          <div class="container">
            <div class="col-lg-12">
              <form class="form-signin" action="backend/guru_edit_nilai_siswa.php?kd_kelas_daftar=<?php echo $kd_kelas_daftar ?>&kd_mata_pelajaran=<?php echo $kd_mata_pelajaran ?>&nip_pegawai=<?php echo $nip_pegawai ?>" method="post" enctype="multipart/form-data">

                <div id="pengetahuan1">
                  <div style="margin-bottom:15px;font-size:28px;background:white">
                      <span class="label label-success">Semester 1 / Ganjil </span>
                  </div>
                  <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                    <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                        <tr>
                          <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                          <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Peserta Didik"; ?></p></th>
                          <?php
                          for ($i=1; $i <= 10; $i++) {
                          ?>
                          <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                          <?php
                          }
                          ?>
                          <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Nilai Akhir Semester 1"; ?></th>

                          <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Nilai Akhir" ?></th>
                          <!-- <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Predikat" ?></th>
                          <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Deskripsi" ?></th>
                          <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Keterangan" ?><br><?php echo "T/TT" ?></th> -->
                        </tr>
                        <tr>
                          <?php
                          $datas = array();
                          $tampil_dataSem1Pengetahuan = "SELECT guru_kompetensi_dasar_pengetahuan_noDKD_smt1 from guru_kompetensi_dasar_smt1 where guru_kompetensi_dasar_kd_mata_pelajaran_smt1='$kd_mata_pelajaran' && guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar' && guru_kompetensi_dasar_semester_smt1='1'";
                          $tampil = mysqli_query($connect, $tampil_dataSem1Pengetahuan);
                          while($row = mysqli_fetch_array($tampil)){
                            $datas[] = $row;
                          }
                          $file = json_encode($datas, JSON_PRETTY_PRINT);
                          $json = json_decode($file, true);
                          for ($i=1; $i <= 10 ; $i++) {
                          ?>
                          <th colspan="10">
                            <input id="KD" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_pengetahuan_noDKD_smt1"] ?>" readonly>
                          </th>
                          <?php
                          }
                          ?>
                          <th colspan="10">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Nilai Akhir Semester 1" ?>" readonly>
                          </th>
                          <!-- Nilai Akhir, predikat, deskripsi, keterangan -->
                          <th colspan="4">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th>
                        </tr>
                        <tr>
                          <?php
                          for ($i=1; $i <= 11 ; $i++) {
                          ?>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-default">TET</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-default">OBS</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-default">PEN</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <?php
                            if ($i == 11) {
                            ?>
                              <span style="font-size:13px;" class="label label-success">UTS</span>
                            <?php
                            }
                            else {
                            ?>
                              <span style="font-size:13px;" class="label label-success">RER</span>
                            <?php
                            }
                            ?>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                            <?php
                            if ($i == 11) {
                            ?>
                              <span style="font-size:13px;" class="label label-danger">UTS-R</span>
                            <?php
                            }
                            else {
                            ?>
                              <span style="font-size:13px;" class="label label-danger">NH-R</span>
                            <?php
                            }
                            ?>
                          </th>

                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <?php
                            if ($i == 11) {
                            ?>
                              <span style="font-size:13px;" class="label label-primary">NA-UTS</span>
                            <?php
                            }
                            else {
                            ?>
                              <span style="font-size:13px;" class="label label-primary">NAH</span>
                            <?php
                            }
                            ?>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-success">UAS</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-danger">UAS-R</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-primary">NA-UAS</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-success">RRT</span>
                          </th>
                          <?php
                          }
                          ?>
                          <!-- Nilai Akhir 2 -->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                          <!-- Predikat 2-->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                          <!-- Deskripsi 2 -->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                          <!-- keterangan 2 -->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                        </tr>
                        <?php

                        $no=1;
                        $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan inner join data_siswa on nilai_siswa_transaksi_smt1_pengetahuan.nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan = data_siswa.nis_siswa where kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$kd_mata_pelajaran' && kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan='$kd_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan asc";
                        $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                        while($row=mysqli_fetch_array($tampil)){
                        ?>
                        <tr>
                              <?php $nis_siswa = $row['nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan'] ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                                <!-- SMT 1 -->
                                <!--KD 1-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input size="" id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi1_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan+$observasi_nilai_siswa_transaksi1_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi1_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi1_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi1_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi1_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi1_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi1_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = $uas_nilai_siswa_transaksi1_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi1_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan,0,PHP_ROUND_HALF_UP);?>
                                </td>
                                <!--KD 2-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi2_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan+$observasi_nilai_siswa_transaksi2_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi2_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi2_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi2_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi2_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi2_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi2_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = $uas_nilai_siswa_transaksi2_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi2_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 3-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi3_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan+$observasi_nilai_siswa_transaksi3_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi3_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi3_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi3_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi3_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi3_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi3_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = $uas_nilai_siswa_transaksi3_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi3_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 4-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi4_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan+$observasi_nilai_siswa_transaksi4_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi4_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi4_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi4_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi4_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi4_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi4_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = $uas_nilai_siswa_transaksi4_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi4_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 5-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi5_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan+$observasi_nilai_siswa_transaksi5_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi5_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi5_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi5_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi5_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi5_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi5_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = $uas_nilai_siswa_transaksi5_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi5_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 6-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi6_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan+$observasi_nilai_siswa_transaksi6_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi6_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi6_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi6_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi6_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi6_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi6_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = $uas_nilai_siswa_transaksi6_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi6_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 7-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi7_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan+$observasi_nilai_siswa_transaksi7_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi7_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi7_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi7_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi7_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi7_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi7_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = $uas_nilai_siswa_transaksi7_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi7_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 8-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi8_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan+$observasi_nilai_siswa_transaksi8_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi8_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi8_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi8_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi8_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi8_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi8_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = $uas_nilai_siswa_transaksi8_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi8_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 9-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi9_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan+$observasi_nilai_siswa_transaksi9_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi9_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi9_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi9_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi9_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi9_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi9_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = $uas_nilai_siswa_transaksi9_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi9_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 10-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                $observasi_nilai_siswa_transaksi10_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan+$observasi_nilai_siswa_transaksi10_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi10_smt1_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                                if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt1 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt1 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                                  $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi10_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi10_smt1_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi10_smt1_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi10_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi10_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = $uas_nilai_siswa_transaksi10_smt1_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "" && $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt1_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt1_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>

                                <!--KD 11-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->

                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->

                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->

                                </td>
                                <?php
                                $uts_nilai_siswa_transaksi11_smt1_pengetahuan = $row['uts_nilai_siswa_transaksi11_smt1_pengetahuan'];
                                $uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan = $row['uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan'];
                                $na_uts_nilai_siswa_transaksi11_smt1_pengetahuan = $row['na_uts_nilai_siswa_transaksi11_smt1_pengetahuan'];
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uts_nilai_siswa_transaksi11_smt1_pengetahuan[]" value="<?php echo $uts_nilai_siswa_transaksi11_smt1_pengetahuan ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan[]" value="<?php echo $uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan ?>">
                                </td>
                                <?php
                                if ($uts_nilai_siswa_transaksi11_smt1_pengetahuan < $uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan) {
                                  $na_uts_nilai_siswa_transaksi11_smt1_pengetahuan = $uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan;
                                }
                                else if($uts_nilai_siswa_transaksi11_smt1_pengetahuan > $uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan){
                                  $na_uts_nilai_siswa_transaksi11_smt1_pengetahuan = $uts_nilai_siswa_transaksi11_smt1_pengetahuan;
                                }
                                else {
                                  $na_uts_nilai_siswa_transaksi11_smt1_pengetahuan = $uts_nilai_siswa_transaksi11_smt1_pengetahuan;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uts_nilai_siswa_transaksi11_smt1_pengetahuan[]" value="<?php echo $na_uts_nilai_siswa_transaksi11_smt1_pengetahuan ?>">
                                  <?php echo $na_uts_nilai_siswa_transaksi11_smt1_pengetahuan ?>
                                </td>
                                <?php
                                $uas_nilai_siswa_transaksi11_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi11_smt1_pengetahuan'];
                                $uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan'];
                                $na_uas_nilai_siswa_transaksi11_smt1_pengetahuan = $row['na_uas_nilai_siswa_transaksi11_smt1_pengetahuan'];
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi11_smt1_pengetahuan[]" value="<?php echo $uas_nilai_siswa_transaksi11_smt1_pengetahuan ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan[]" value="<?php echo $uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan ?>">
                                </td>
                                <?php
                                if ($uas_nilai_siswa_transaksi11_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan) {
                                  $na_uas_nilai_siswa_transaksi11_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan;
                                }
                                else if ($uas_nilai_siswa_transaksi11_smt1_pengetahuan > $uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan){
                                  $na_uas_nilai_siswa_transaksi11_smt1_pengetahuan = $uas_nilai_siswa_transaksi11_smt1_pengetahuan;
                                }
                                else {
                                  $na_uas_nilai_siswa_transaksi11_smt1_pengetahuan = $uas_nilai_siswa_transaksi11_smt1_pengetahuan;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi11_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi11_smt1_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi11_smt1_pengetahuan; ?>
                                </td>
                                <?php
                                $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan = $na_uts_nilai_siswa_transaksi11_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi11_smt1_pengetahuan;
                                $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan = $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan/2;
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>

                                <?php
                                // if ($rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 0;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 1;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 2;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 3;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 4;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 5;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 6;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 7;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 8;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0")
                                // {
                                //   $bagi = 9;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan == "0"){
                                //   $bagi = 10;
                                // }

                                //kondisi ke 2

                                if ($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 2;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 3;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 4;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 5;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 6;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 7;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 8;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 9;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan == "0")
                                {
                                  $bagi = 10;
                                }
                                else {
                                  $bagi = 11;
                                }

                                $nilai_akhir_smt1_pengetahuan = $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan+$rerata_akhir_nilai_siswa_transaksi11_smt1_pengetahuan;
                                $nilai_akhir_smt1_pengetahuan = ($nilai_akhir_smt1_pengetahuan/$bagi);
                                ?>

                                <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="nilai_akhir_siswa_transaksi_smt1_pengetahuan[]" value="<?php echo round($nilai_akhir_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <!-- <?php echo $row['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'] ?> -->
                                  <?php echo round($nilai_akhir_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>
                                </th>

                                <!-- <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                                  <input type="hidden" class="form-control" autocomplete="off" name="predikat_nilai_siswa_transaksi_smt1_pengetahuan[]" value="<?php echo $row['predikat_nilai_siswa_transaksi_smt1_pengetahuan']?>">
                                  <?php echo $row['predikat_nilai_siswa_transaksi_smt1_pengetahuan'] ?>
                                </th>
                                <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nilai_akhir_siswa_transaksi_smt1_pengetahuan[]" value="<?php echo round($nilai_akhir_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>" readonly>
                                </th>
                                <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nilai_akhir_siswa_transaksi_smt1_pengetahuan[]" value="<?php echo round($nilai_akhir_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($nilai_akhir_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </th> -->

                        </tr>
                        <?php
                        }
                        ?>
                      </table>
                  </div>
                </div>

                <div class="row">
                  <div class="container">
                    <div class="col-lg-10" style="margin-top:-30px;">
                      <div class="bs-callout bs-callout-info" id="callout-type-dl-truncate">
                        <h4 style="color:#dd4b39 !important;margin-bottom:10px"><span class="glyphicon glyphicon-warning-sign"></span> Keterangan Penilaian</h4>
                        <span class="label label-custom" style="font-size:15px;">1. KD / Kompetensi Dasar (1-10)</span>
                        <p style="margin-top:10px;line-height: 2;"><span class="label label-default">1.TET</span> : Tes Tulis, <span class="label label-default">2.OBS</span> : Observasi, <span class="label label-default">3.PEN</span> : Penugasan, <span class="label label-success">4.RER</span> : Rerata, <span class="label label-danger">5.NH-R</span> : Nilai Harian Remidi, <span class="label label-primary">6.NAH</span> : Nilai Akhir Harian KD, <span class="label label-success">7.UAS</span> : Ujian Akhir Semester, <span class="label label-danger">8.UAS-R</span> : UAS Remidi, <span class="label label-primary">9.NA-UAS</span> : Nilai Akhir UAS, <span class="label label-success">10.RRT</span> : Rerata</p>
                        <span class="label label-custom" style="font-size:15px;">2. Nilai Akhir Semester 1</span>
                        <p style="margin-top:10px;line-height: 2"><span class="label label-success">1.UTS</span> : Ujian Tengah Semester, <span class="label label-danger">2.UTS-R</span> : UTS Remidi, <span class="label label-primary">3.NA-UTS</span> : Nilai Akhir UTS, <span class="label label-success">4.UAS</span> : Ujian Akhir Semester, <span class="label label-danger">5.UAS-R</span> : UAS Remidi, <span class="label label-primary">6.NA-UAS</span> : Nilai Akhir UAS, <span class="label label-success">7.RRT</span> : Rerata</p>
                      </div>
                    </div>
                    <div class="col-lg-2" style="margin-top:-30px;">
                      <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
                    </div>
                  </div>
                </div>

                <!-- Semester 2 -->

                <div id="pengetahuan2">
                  <div style="margin-bottom:15px;font-size:28px;background:white">
                      <span class="label label-danger">Semester 2 / Genap </span>
                  </div>
                  <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                    <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                        <tr>
                          <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                          <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Peserta Didik"; ?></p></th>
                          <?php
                          for ($i=1; $i <= 10; $i++) {
                          ?>
                          <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                          <?php
                          }
                          ?>
                          <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Nilai Akhir Semester 1"; ?></th>

                          <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Nilai Akhir" ?></th>
                          <!-- <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Predikat" ?></th>
                          <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Deskripsi" ?></th>
                          <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "Keterangan" ?><br><?php echo "T/TT" ?></th> -->
                        </tr>
                        <tr>
                          <?php
                          $datas = array();
                          $tampil_dataSem1Pengetahuan = "SELECT guru_kompetensi_dasar_pengetahuan_noDKD_smt2 from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_kd_mata_pelajaran_smt2='$kd_mata_pelajaran' && guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar' && guru_kompetensi_dasar_semester_smt2='2'";
                          $tampil = mysqli_query($connect, $tampil_dataSem1Pengetahuan);
                          while($row = mysqli_fetch_array($tampil)){
                            $datas[] = $row;
                          }
                          $file = json_encode($datas, JSON_PRETTY_PRINT);
                          $json = json_decode($file, true);
                          for ($i=1; $i <= 10 ; $i++) {
                          ?>
                          <th colspan="10">
                            <input id="KD" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_pengetahuan_noDKD_smt2"] ?>" readonly>
                          </th>
                          <?php
                          }
                          ?>
                          <th colspan="10">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Nilai Akhir Semester 1" ?>" readonly>
                          </th>
                          <!-- Nilai Akhir, predikat, deskripsi, keterangan -->
                          <th colspan="4">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th>
                        </tr>
                        <tr>
                          <?php
                          for ($i=1; $i <= 11 ; $i++) {
                          ?>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-default">TET</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-default">OBS</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-default">PEN</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <?php
                            if ($i == 11) {
                            ?>
                              <span style="font-size:13px;" class="label label-success">UTS</span>
                            <?php
                            }
                            else {
                            ?>
                              <span style="font-size:13px;" class="label label-success">RER</span>
                            <?php
                            }
                            ?>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                            <?php
                            if ($i == 11) {
                            ?>
                              <span style="font-size:13px;" class="label label-danger">UTS-R</span>
                            <?php
                            }
                            else {
                            ?>
                              <span style="font-size:13px;" class="label label-danger">NH-R</span>
                            <?php
                            }
                            ?>
                          </th>

                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <?php
                            if ($i == 11) {
                            ?>
                              <span style="font-size:13px;" class="label label-primary">NA-UTS</span>
                            <?php
                            }
                            else {
                            ?>
                              <span style="font-size:13px;" class="label label-primary">NAH</span>
                            <?php
                            }
                            ?>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-success">UAS</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-danger">UAS-R</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-primary">NA-UAS</span>
                          </th>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <span style="font-size:13px;" class="label label-success">RRT</span>
                          </th>
                          <?php
                          }
                          ?>
                          <!-- Nilai Akhir 2 -->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                          <!-- Predikat 2-->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                          <!-- Deskripsi 2 -->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                          <!-- keterangan 2 -->
                          <!-- <th colspan="1">
                            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;background:#f4f4f4" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "" ?>" readonly>
                          </th> -->
                        </tr>
                        <?php

                        $no=1;
                        $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt2_pengetahuan inner join data_siswa on nilai_siswa_transaksi_smt2_pengetahuan.nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan = data_siswa.nis_siswa where kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$kd_mata_pelajaran' && kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan='$kd_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan asc";
                        $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                        while($row=mysqli_fetch_array($tampil)){
                        ?>
                        <tr>
                              <?php $nis_siswa = $row['nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan'] ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                                <!-- SMT 1 -->
                                <!--KD 1-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi1_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan+$observasi_nilai_siswa_transaksi1_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi1_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi1_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi1_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi1_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi1_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi1_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = $uas_nilai_siswa_transaksi1_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi1_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan,0,PHP_ROUND_HALF_UP);?>
                                </td>
                                <!--KD 2-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi2_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan+$observasi_nilai_siswa_transaksi2_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi2_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi2_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi2_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi2_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi2_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi2_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = $uas_nilai_siswa_transaksi2_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi2_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 3-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi3_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan+$observasi_nilai_siswa_transaksi3_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi3_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi3_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi3_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi3_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi3_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi3_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = $uas_nilai_siswa_transaksi3_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi3_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 4-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi4_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan+$observasi_nilai_siswa_transaksi4_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi4_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi4_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi4_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi4_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi4_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi4_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = $uas_nilai_siswa_transaksi4_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi4_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 5-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi5_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan+$observasi_nilai_siswa_transaksi5_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi5_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi5_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi5_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi5_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi5_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi5_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = $uas_nilai_siswa_transaksi5_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi5_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 6-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi6_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan+$observasi_nilai_siswa_transaksi6_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi6_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi6_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi6_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi6_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi6_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi6_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = $uas_nilai_siswa_transaksi6_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi6_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 7-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi7_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan+$observasi_nilai_siswa_transaksi7_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi7_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi7_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi7_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi7_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi7_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi7_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = $uas_nilai_siswa_transaksi7_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi7_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 8-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi8_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan+$observasi_nilai_siswa_transaksi8_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi8_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi8_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi8_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi8_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi8_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi8_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = $uas_nilai_siswa_transaksi8_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi8_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 9-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi9_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan+$observasi_nilai_siswa_transaksi9_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi9_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi9_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi9_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi9_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi9_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi9_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = $uas_nilai_siswa_transaksi9_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi9_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>
                                <!--KD 10-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                $observasi_nilai_siswa_transaksi10_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == ""){
                                  $bagi = 0;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                else if ($observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == ""){
                                  $bagi = 1;
                                }
                                elseif ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                elseif ($penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                  $bagi = 2;
                                }
                                else {
                                  $bagi = 3;
                                }
                                $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan+$observasi_nilai_siswa_transaksi10_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi10_smt2_pengetahuan)/$bagi);
                                $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                                if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                  $hasil_rerata_nilai1_smt2 = "0";
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                }
                                else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                }
                                else if ($observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == ""){
                                  $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                }
                                else {
                                  $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                                  <?php echo $hasil_rerata_nilai1_smt2 ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                                </td>
                                <?php
                                $nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan"];
                                if ($nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                                  $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan;
                                }
                                else if ($nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                  $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan ?>">
                                  <?php echo $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan ?>
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                                </td>

                                <?php
                                  $uas_nilai_siswa_transaksi10_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi10_smt2_pengetahuan"];
                                  $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan"];
                                if ($uas_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                  empty($na_uas_nilai_siswa_transaksi10_smt2_pengetahuan);
                                }
                                else{
                                  $uas_nilai_siswa_transaksi10_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                  $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'];
                                  if ($uas_nilai_siswa_transaksi10_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan) {
                                    $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan;
                                  }
                                  else {
                                    $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = $uas_nilai_siswa_transaksi10_smt2_pengetahuan;
                                  }
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                  if ($uas_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan;
                                  }
                                  elseif ($uas_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "" && $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan == "") {
                                    $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt2_pengetahuan)/1);
                                  }
                                  else {
                                    $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt2_pengetahuan)/2);
                                  }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>

                                <!--KD 11-->
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->

                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->

                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->

                                </td>
                                <?php
                                $uts_nilai_siswa_transaksi11_smt2_pengetahuan = $row['uts_nilai_siswa_transaksi11_smt2_pengetahuan'];
                                $uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan = $row['uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan'];
                                $na_uts_nilai_siswa_transaksi11_smt2_pengetahuan = $row['na_uts_nilai_siswa_transaksi11_smt2_pengetahuan'];
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uts_nilai_siswa_transaksi11_smt2_pengetahuan[]" value="<?php echo $uts_nilai_siswa_transaksi11_smt2_pengetahuan ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan[]" value="<?php echo $uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan ?>">
                                </td>
                                <?php
                                if ($uts_nilai_siswa_transaksi11_smt2_pengetahuan < $uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan) {
                                  $na_uts_nilai_siswa_transaksi11_smt2_pengetahuan = $uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan;
                                }
                                else if($uts_nilai_siswa_transaksi11_smt2_pengetahuan > $uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan){
                                  $na_uts_nilai_siswa_transaksi11_smt2_pengetahuan = $uts_nilai_siswa_transaksi11_smt2_pengetahuan;
                                }
                                else {
                                  $na_uts_nilai_siswa_transaksi11_smt2_pengetahuan = $uts_nilai_siswa_transaksi11_smt2_pengetahuan;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uts_nilai_siswa_transaksi11_smt2_pengetahuan[]" value="<?php echo $na_uts_nilai_siswa_transaksi11_smt2_pengetahuan ?>">
                                  <?php echo $na_uts_nilai_siswa_transaksi11_smt2_pengetahuan ?>
                                </td>
                                <?php
                                $uas_nilai_siswa_transaksi11_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi11_smt2_pengetahuan'];
                                $uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan'];
                                $na_uas_nilai_siswa_transaksi11_smt2_pengetahuan = $row['na_uas_nilai_siswa_transaksi11_smt2_pengetahuan'];
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi11_smt2_pengetahuan[]" value="<?php echo $uas_nilai_siswa_transaksi11_smt2_pengetahuan ?>">
                                </td>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                                  <input id="inputNilai" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan[]" value="<?php echo $uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan ?>">
                                </td>
                                <?php
                                if ($uas_nilai_siswa_transaksi11_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan) {
                                  $na_uas_nilai_siswa_transaksi11_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan;
                                }
                                else if ($uas_nilai_siswa_transaksi11_smt2_pengetahuan > $uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan){
                                  $na_uas_nilai_siswa_transaksi11_smt2_pengetahuan = $uas_nilai_siswa_transaksi11_smt2_pengetahuan;
                                }
                                else {
                                  $na_uas_nilai_siswa_transaksi11_smt2_pengetahuan = $uas_nilai_siswa_transaksi11_smt2_pengetahuan;
                                }
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi11_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi11_smt2_pengetahuan ?>">
                                  <?php echo $na_uas_nilai_siswa_transaksi11_smt2_pengetahuan; ?>
                                </td>
                                <?php
                                $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan = $na_uts_nilai_siswa_transaksi11_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi11_smt2_pengetahuan;
                                $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan = $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan/2;
                                ?>
                                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </td>

                                <?php
                                // if ($rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 0;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 1;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 2;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 3;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 4;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 5;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 6;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 7;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 8;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0")
                                // {
                                //   $bagi = 9;
                                // }
                                // else if ($rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan == "0"){
                                //   $bagi = 10;
                                // }

                                //kondisi ke 2

                                if ($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 2;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 3;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 4;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 5;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 6;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 7;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 8;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 9;
                                }
                                else if ($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan == "0")
                                {
                                  $bagi = 10;
                                }
                                else {
                                  $bagi = 11;
                                }

                                $nilai_akhir_smt2_pengetahuan = $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan+$rerata_akhir_nilai_siswa_transaksi11_smt2_pengetahuan;
                                $nilai_akhir_smt2_pengetahuan = ($nilai_akhir_smt2_pengetahuan/$bagi);
                                ?>

                                <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                                  <input type="hidden" class="form-control" autocomplete="off" name="nilai_akhir_siswa_transaksi_smt2_pengetahuan[]" value="<?php echo round($nilai_akhir_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <!-- <?php echo $row['nilai_akhir_nilai_siswa_transaksi_smt2_pengetahuan'] ?> -->
                                  <?php echo round($nilai_akhir_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>
                                </th>

                                <!-- <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                                  <input type="hidden" class="form-control" autocomplete="off" name="predikat_nilai_siswa_transaksi_smt2_pengetahuan[]" value="<?php echo $row['predikat_nilai_siswa_transaksi_smt2_pengetahuan']?>">
                                  <?php echo $row['predikat_nilai_siswa_transaksi_smt2_pengetahuan'] ?>
                                </th>
                                <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                                  <input id="inputNilai" type="text" class="form-control" autocomplete="off" name="nilai_akhir_siswa_transaksi_smt2_pengetahuan[]" value="<?php echo round($nilai_akhir_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>" readonly>
                                </th>
                                <th colspan="1" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                                  <input type="hidden" class="form-control" autocomplete="off" name="nilai_akhir_siswa_transaksi_smt2_pengetahuan[]" value="<?php echo round($nilai_akhir_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                                  <?php echo round($nilai_akhir_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                                </th> -->

                        </tr>
                        <?php
                        }
                        ?>
                      </table>
                  </div>
                </div>

                <div class="row">
                  <div class="container">
                    <div class="col-lg-10" style="margin-top:-30px;">
                      <div class="bs-callout bs-callout-info" id="callout-type-dl-truncate">
                        <h4 style="color:#dd4b39 !important;margin-bottom:10px"><span class="glyphicon glyphicon-warning-sign"></span> Keterangan Penilaian</h4>
                        <span class="label label-custom" style="font-size:15px;">1. KD / Kompetensi Dasar (1-10)</span>
                        <p style="margin-top:10px;line-height: 2;"><span class="label label-default">1.TET</span> : Tes Tulis, <span class="label label-default">2.OBS</span> : Observasi, <span class="label label-default">3.PEN</span> : Penugasan, <span class="label label-success">4.RER</span> : Rerata, <span class="label label-danger">5.NH-R</span> : Nilai Harian Remidi, <span class="label label-primary">6.NAH</span> : Nilai Akhir Harian KD, <span class="label label-success">7.UAS</span> : Ujian Akhir Semester, <span class="label label-danger">8.UAS-R</span> : UAS Remidi, <span class="label label-primary">9.NA-UAS</span> : Nilai Akhir UAS, <span class="label label-success">10.RRT</span> : Rerata</p>
                        <span class="label label-custom" style="font-size:15px;">2. Nilai Akhir Semester 1</span>
                        <p style="margin-top:10px;line-height: 2"><span class="label label-success">1.UTS</span> : Ujian Tengah Semester, <span class="label label-danger">2.UTS-R</span> : UTS Remidi, <span class="label label-primary">3.NA-UTS</span> : Nilai Akhir UTS, <span class="label label-success">4.UAS</span> : Ujian Akhir Semester, <span class="label label-danger">5.UAS-R</span> : UAS Remidi, <span class="label label-primary">6.NA-UAS</span> : Nilai Akhir UAS, <span class="label label-success">7.RRT</span> : Rerata</p>
                      </div>
                    </div>
                    <div class="col-lg-2" style="margin-top:-30px;">
                      <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

    <div class="control-sidebar-bg"></div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(data){

      // Semester 1
      $('#peng1').on('click',function(){
      $('#pengetahuan1').html($('#static').html()).show().siblings('div').hide();
      });
      $('#ket1').on('click',function(){
      $('#keterampilan1').html($('#static').html()).show().siblings('div').hide();
      });
      $('#spir1').on('click',function(){
      $('#spiritual1').html($('#static').html()).show().siblings('div').hide();
      });
      $('#sos1').on('click',function(){
      $('#sosial1').html($('#static').html()).show().siblings('div').hide();
      });
      // Semester 2
      $('#peng2').on('click',function(){
      $('#pengetahuan2').html($('#static').html()).show().siblings('div').hide();
      });
      $('#ket2').on('click',function(){
      $('#keterampilan2').html($('#static').html()).show().siblings('div').hide();
      });
      $('#spir2').on('click',function(){
      $('#spiritual2').html($('#static').html()).show().siblings('div').hide();
      });
      $('#sos2').on('click',function(){
      $('#sosial2').html($('#static').html()).show().siblings('div').hide();
      });

      $('input#inputNilai').inputmask({ //frontend-custom
        mask: '999',
        placeholder: ' ',
        showMaskOnHover: false,
        showMaskOnFocus: false,
        onBeforePaste: function (pastedValue, opts) {
          var processedValue = pastedValue;

          //do something with it

          return processedValue;
        }
      });

    })
  </script>

</body>
</html>

<?php } else {
  header("location:login_guru_atau_bk.php");
}
 ?>
