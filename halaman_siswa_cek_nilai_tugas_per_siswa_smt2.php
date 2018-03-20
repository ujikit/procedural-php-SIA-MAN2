<?php
// error_reporting(0);
include_once "backend/koneksi.php";
$nis_siswa                                                = $_GET['nis_siswa'];
$id_kelas_daftar                                          = $_GET['id_kelas_daftar'];
$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan = $_GET['id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan'];

$query_nilaiTugas = mysqli_query($connect, "SELECT * from nilai_siswa_transaksi_smt2_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' and nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' and id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' ");
$tampil_nilaiTugas = mysqli_fetch_array($query_nilaiTugas, MYSQLI_ASSOC);
?>

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tampil Tugas Siswa SMT2</h4>
    </div>
    <div class="modal-body">

      <form class="form-signin" action="Detail. Kosong" method="post">

<div class="row">
  <div class="col-lg-12">
              </br>
              <div class="row" style="margin-top:15px;">
                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.11' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi1_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 1 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi1_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.2' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi2_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 2 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi2_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.3' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi3_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 3 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi3_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.4' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi4_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 4 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi4_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.5' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi5_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 5 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi5_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.6' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi6_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 6 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi6_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.7' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi7_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 7 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi7_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.8' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi8_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 8 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi8_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.9' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi9_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 9 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi9_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

                <?php
                $query_namaKD = mysqli_query($connect, "SELECT * from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.10' and guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' ");
                $tampil_namaKD = mysqli_fetch_array($query_namaKD, MYSQLI_ASSOC);
                if ($tampil_nilaiTugas["penugasan_nilai_siswa_transaksi10_smt2_pengetahuan"] == "") {
                  # code...
                }
                else {
                ?>
                <div class="col-lg-12">
                   <div class="row">
                     <div class="col-lg-4 col-xs-4">
                       <label for="sel1">Tugas 10 </label>
                     </div>
                     <div class="col-lg-8 col-xs-8">
                       <input type="text" class="form-control" value="<?php echo $tampil_namaKD['guru_kompetensi_dasar_pengetahuan_noDKD_smt2'] ?>" readonly/>
                     </div>
                   </div>
                   <br>
                       <input type="text" class="form-control" value="<?php echo $tampil_nilaiTugas["penugasan_nilai_siswa_transaksi10_smt2_pengetahuan"] ?>" readonly/>
                     <br>
                </div>
                <?php
                }
                ?>

              </div>
  </div>
</div>

      </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
    </div>
