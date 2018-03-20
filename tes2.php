<?php
include_once "backend/koneksi.php";
error_reporting(0);
?>

<div id="pengetahuan1">
  <div style="margin-bottom:15px;font-size:28px;background:white">
      <span class="label label-success">Pengetahuan 1 </span>
      <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
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
          <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "TES" ?></th>
        </tr>
        <tr>
          <?php
          $datas = array();
          $tampil_dataSem1Pengetahuan = "SELECT guru_kompetensi_dasar_pengetahuan_noDKD_smt1 from guru_kompetensi_dasar_smt1";
          $tampil = mysqli_query($connect, $tampil_dataSem1Pengetahuan);
          while($row = mysqli_fetch_array($tampil)){
            $datas[] = $row;
          }
          $file = json_encode($datas, JSON_PRETTY_PRINT);
          $json = json_decode($file, true);
          for ($i=1; $i <= 10 ; $i++) {
          ?>
          <th colspan="10">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_pengetahuan_noDKD_smt1"] ?>" readonly>
          </th>
          <?php
          }
          ?>
          <th colspan="10">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "ssdfsdfsdfd" ?>" readonly>
        </th>
            </tr>
        <tr>
          <?php
          for ($i=1; $i <= 10 ; $i++) {
          ?>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
          </th>

          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
          </th>
          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
          </th>
          <?php
          }
          ?>
        </tr>
        <?php

        $no=1;
        $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan inner join data_siswa on nilai_siswa_transaksi_smt1_pengetahuan.nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='aqh' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='10IPA1' && nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='23124124' order by nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan asc";
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
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
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                  <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
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
        </tr>
        <?php
        }
        ?>
      </table>
  </div>
</div>
