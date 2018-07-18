<?php
session_start();
error_reporting(0);
include_once "backend/koneksi.php";
if($_SESSION['nip_pegawai']){

$kd_kelas_daftar = $_GET['kd_kelas_daftar'];
$nip_pegawai     = $_SESSION['nip_pegawai'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $query_tampil_dataPegawai = "SELECT * from data_pegawai inner join mata_pelajaran_transaksi on data_pegawai.nip_pegawai = mata_pelajaran_transaksi.nip_pegawai_mata_pelajaran_transaksi where nip_pegawai='$nip_pegawai' && kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar'";
    $query = mysqli_query($connect, $query_tampil_dataPegawai);
    $row = mysqli_fetch_array($query);
    $kd_mata_pelajaran = $row['kd_mata_pelajaran_transaksi'];
    ?>
      <form id="formKD" class="form-signin" action="backend/guru_kd_mapel_ubah.php?nip_pegawai=<?php echo $nip_pegawai ?>&kd_mata_pelajaran=<?php echo $kd_mata_pelajaran ?>&kd_kelas_daftar=<?php echo $kd_kelas_daftar ?>" method="post" enctype="multipart/form-data">
          <div class="row" style="margin-top:40px;">
            <?php

            // $query_tampilKKM = "SELECT * from mata_pelajaran_transaksi inner join guru_kompetensi_dasar_smt1 on mata_pelajaran_transaksi.kd_mata_pelajaran_transaksi = guru_kompetensi_dasar_smt1.guru_kompetensi_dasar_mata_pelajaran_smt1 where kd_mata_pelajaran_transaksi='$kd_mata_pelajaran'and nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai' and kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar'";
            $query_tampilKKM = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_transaksi='$kd_mata_pelajaran'and nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai' and kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar'";
            $query = mysqli_query($connect, $query_tampilKKM);
            $row = mysqli_fetch_array($query);
            $kkm = $row['kkm_rendah_mata_pelajaran_transaksi'];
            $kkm_tengah = $row['kkm_tengah_mata_pelajaran_transaksi'];
            $kkm_tinggi = $row['kkm_tinggi_mata_pelajaran_transaksi'];
            ?>
            <input type="hidden" name="kd_kelas_daftar" value="<?php echo $kd_kelas_daftar ?>">
            <input type="hidden" name="nip_pegawai" value="<?php echo $nip_pegawai ?>">
            <input type="hidden" name="kd_mata_pelajaran_transaksi" value="<?php echo $kd_mata_pelajaran ?>">
            <input type="hidden" name="kd_kelas_daftar_mata_pelajaran_transaksi" value="<?php echo $kd_kelas_daftar ?>">
            <div class="col-lg-12" style="margin-top:10px;">
              <div class="container">
                <div class="col-lg-2">

                  <table class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%" style="color:white;background-color:#00a65a; margin-bottom:35px">
                    <thead>
                      <tr>
                        <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:3%;font-size:20px;color:white;font-weight: bold;">KKM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <input type="text" class="form-control" name="kkm_rendah_mata_pelajaran_transaksi" placeholder="Belum terisi..." value="<?php echo floor($kkm) ?>">
                        </td>
                      </tr>
                      <?php
                      //error_reporting(0);
                      ?>
                    </tbody>
                  </table>

                </div>
                <div class="col-lg-10">

                    <table class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%" style="color:white;background-color:#00a65a; margin-bottom:35px">
                      <thead>
                        <tr>
                          <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:3%;font-size:20px;color:white;font-weight: bold;"><?php echo "Predikat"; ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                          ?>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                            <div class="row">
                              <div class="col-lg-3">
                                <p style="margin-top:10px;">
                                  <span class="label label-danger" style="font-size:15px">D = Kurang</span>
                                </p>
                                <p style="font-size:20px;color:black">< <?php echo $kkm ?></p>
                              </div>
                              <div class="col-lg-3">
                                <p style="margin-top:10px;">
                                  <span class="label label-warning" style="font-size:15px">C = Cukup</span>
                                </p>
                                <p style="font-size:20px;color:black"><?php echo $kkm ?> <= n < <?php echo $kkm_tengah ?></p>
                                <input type="hidden" class="form-control" name="kkm_tengah_mata_pelajaran_transaksi" placeholder="Belum terisi..." value="<?php echo floor($nilai_tengah) ?>">
                              </div>
                              <div class="col-lg-3">
                                <p style="margin-top:10px;">
                                  <span class="label label-info" style="font-size:15px">B = Baik</span>
                                </p>
                                <p style="font-size:20px;color:black"><?php echo $kkm_tengah ?> <= n <= <?php echo $kkm_tinggi ?></p>
                              </div>
                              <div class="col-lg-3">
                                <p style="margin-top:10px;">
                                  <span class="label label-primary" style="font-size:15px">A = Sangat Baik</span>
                                </p>
                                <p style="font-size:20px;color:black">> <?php echo $kkm_tinggi ?></p>
                                <input type="hidden" class="form-control" name="kkm_tinggi_mata_pelajaran_transaksi" placeholder="Belum terisi..." value="<?php echo floor($nilai_tinggi) ?>">
                              </div>
                            </div>
                          </td>
                        </tr>
                        <?php
                        //error_reporting(0);
                        ?>
                      </tbody>
                    </table>

                </div>
              </div>
            </div>
        </div>

      <div class="row" style="margin-top:20px;">

        <div class="col-lg-12">
          <div class="container">

            <div class="col-lg-12" id="semester1">
              <div style="margin-bottom:5px;font-size:25px;">
              <span class="label label-info">Kompetensi Dasar 1 </span>
              </div>
              <div style="margin-bottom:10px;font-size:30px;">
                <span class="label label-success">Pengetahuan 1</span>
                <button type="submit" class="btn btn-primary" style="float:right;margin-top:5px"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Pengaturan</button>

              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:3%"><?php echo "No."; ?></th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:7%"><?php echo "No. KI"; ?></th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:7%"><?php echo "No. KD"; ?></th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Deskripsi Singkat Kompetensi Dasar"; ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                      $no=1;
                      $datas = array();
                      $query_tampilDataKD = "SELECT * from guru_kompetensi_dasar_smt1 where guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_mata_pelajaran_smt1='$kd_mata_pelajaran' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar' and guru_kompetensi_dasar_semester_smt1='1'";
                      $query = mysqli_query($connect, $query_tampilDataKD);
                      while($row = mysqli_fetch_assoc($query)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      // print_r($json);
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $i ?>
                      </td>
                      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input type="text" class="form-control" autocomplete="off" name="pengetahuanKI<?php echo $i ?>smt1" value="<?php echo $json[$i-1]['guru_kompetensi_dasar_pengetahuan_noKI_smt1'] ?>" readonly>
                      </td>
                      <td>
                        <input type="text" class="form-control" autocomplete="off" name="pengetahuanKD<?php echo $i ?>smt1" value="<?php echo $json[$i-1]['guru_kompetensi_dasar_pengetahuan_noKD_smt1'] ?>" readonly>
                      </td>
                      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input type="text" class="form-control" autocomplete="off" name="pengetahuanDKDsmt1[]" value="<?php echo $json[$i-1]['guru_kompetensi_dasar_pengetahuan_noDKD_smt1'] ?>">
                      </td>
                    </tr>
                    <?php
                    //error_reporting(0);
                    }
                    ?>
                  </tbody>
                </table>
                </div>
              </div>


              <div class="col-lg-12" id="semester2">
                <div style="margin-bottom:5px;font-size:25px;">
                <span class="label label-warning">Kompetensi Dasar 2 </span>
                </div>
                <div style="margin-bottom:10px;font-size:30px;">
                  <span class="label label-success">Pengetahuan 2</span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:5px"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Pengaturan</button>
                </div>
                <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                  <table class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:3%"><?php echo "No."; ?></th>
                        <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:7%"><?php echo "No. KI"; ?></th>
                        <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:7%"><?php echo "No. KD"; ?></th>
                        <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Deskripsi Singkat Kompetensi Dasar"; ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php

                        $no=1;
                        $datas = array();
                        $query_tampilDataKD = "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_mata_pelajaran_smt2='$kd_mata_pelajaran' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar' and guru_kompetensi_dasar_semester_smt2='2'";
                        $query = mysqli_query($connect, $query_tampilDataKD);
                        while($row = mysqli_fetch_assoc($query)){
                          $datas[] = $row;
                        }
                        $file = json_encode($datas, JSON_PRETTY_PRINT);
                        $json = json_decode($file, true);
                        for ($i=1; $i <= 10; $i++) {
                        ?>
                        <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $i ?>
                        </td>
                        <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <input type="text" class="form-control" autocomplete="off" name="pengetahuanKI<?php echo $i ?>smt2" value="<?php echo $json[$i-1]['guru_kompetensi_dasar_pengetahuan_noKI_smt2'] ?>" readonly>
                        </td>
                        <td>
                          <input type="text" class="form-control" autocomplete="off" name="pengetahuanKD<?php echo $i ?>smt2" value="<?php echo $json[$i-1]['guru_kompetensi_dasar_pengetahuan_noKD_smt2'] ?>" readonly>
                        </td>
                        <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <input type="text" class="form-control" autocomplete="off" name="pengetahuanDKDsmt2[]" value="<?php echo $json[$i-1]['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" >
                        </td>
                      </tr>
                      <?php
                      //error_reporting(0);
                      }
                      ?>
                    </tbody>
                  </table>
                  </div>
                </div>

            </div>
          </div> <!--Container-->

        </div>
      </form>

<script type="text/javascript">
  $('#formKD').on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type:$(this).attr('method'),
      url:$(this).attr('action'),
      data:$(this).serialize(),
      success:function(){
        loadData();
        swal(
          'Berhasil!',
          'Data KD berhasil diubah!',
          'success'
        )
      }
    });
  })
</script>

  </body>
</html>

<?php
}
else {
  header("location:login_guru_atau_bk.php");
}
?>
