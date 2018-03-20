<?php
include_once "backend/koneksi.php";
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
        $na_uas = Array();
        $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan inner join data_siswa on nilai_siswa_transaksi_smt1_pengetahuan.nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='penjas' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='10IPA1' && nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='123321233243212' order by nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan asc";
        $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
        while($row=mysqli_fetch_array($tampil)){
          $na_uas[] = $row['na_uas_nilai_siswa_transaksi1_smt1_pengetahuan'];
        }

        $query_hitung_siswa_per_kelas = mysqli_query($connect, "SELECT count(nis_siswa) AS jumlah_siswa from data_siswa where id_kelas_daftar='10IPA1'");
        $rows = mysqli_fetch_array($query_hitung_siswa_per_kelas);
        $jumlah_siswa = $rows['jumlah_siswa'];

        $na_uas = json_encode($na_uas, JSON_PRETTY_PRINT);
        $json_naUAS = json_decode($na_uas, true);

        for ($i=0; $i < $jumlah_siswa; $i++) {
        ?>
        <tr>

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
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['rerata_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                  <?php echo "90"; ?>
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                  <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                  <input type="text" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                  <input type="hidden" class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                  <?php echo "90"; ?>
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                  <input type="text" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php print_r($json_naUAS[$i]) ?>">
                </td>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                  <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                  <?php echo "90"; ?>
                </td>
                <?php
                }
                ?>
        </tr>
      </table>
  </div>
</div>
