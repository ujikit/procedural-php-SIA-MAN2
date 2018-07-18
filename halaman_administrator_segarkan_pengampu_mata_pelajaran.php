<?php
include_once "backend/koneksi.php";
$kd_mata_pelajaran = $_GET['kd_mata_pelajaran'];
$kd_kelas_daftar = $_GET['kd_kelas_daftar'];
$nip_pegawai = $_GET['nip_pegawai'];
$query = mysqli_query($connect, "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_transaksi='$kd_mata_pelajaran'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

 ?>
<html>
<head>
</head>
<body>

<form class="form-signin" action="backend/administrator_edit_pengampu_mata_pelajaran.php" method="post">
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Segarkan Pengampu Mata Pelajaran</h4>
  </div>
  <?php echo $kd_mata_pelajaran ?>
  <?php echo $kd_kelas_daftar ?>
  <?php echo $nip_pegawai ?>
  <input type="hidden" class="form-control" name="kd_mata_pelajaran" value="<?php echo $kd_mata_pelajaran ?>" readonly>
  <input type="hidden" class="form-control" name="kd_kelas_daftar" value="<?php echo $kd_kelas_daftar ?>" readonly>
  <input type="hidden" class="form-control" name="nip_pegawai" value="<?php echo $nip_pegawai ?>" readonly>
  <!-- <div class="modal-body">
    <div class="row">
      <input type="hidden" class="form-control" name="kd_mata_pelajaran_transaksi" value="<?php echo $tampil["kd_mata_pelajaran_transaksi"] ?>" readonly>
      <div class="col-lg-12">
        <label for="sel1">Nama Kelas : </label>
        <input name="kd_kelas_daftar_mata_pelajaran_transaksi" class="form-control" type="text" value="<?php echo $tampil["kd_kelas_daftar_mata_pelajaran_transaksi"] ?>" readonly>
        <br>
      </div>
      <div class="col-lg-12">
        <?php
          $no=1;
          $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi inner join mata_pelajaran on mata_pelajaran_transaksi.kd_mata_pelajaran_transaksi = mata_pelajaran.kd_mata_pelajaran where kd_mata_pelajaran_transaksi='$kd_mata_pelajaran'";
          $tampil = mysqli_query($connect, $tampilDataKelas);
          $row = mysqli_fetch_array($tampil);
        ?>
        <label for="sel1">Nama Mata Pelajaran : </label>
        <input name="kd_mata_pelajaran_transaksi" class="form-control" type="hidden" value="<?php echo $row['kd_mata_pelajaran_transaksi'] ?>" readonly>
        <input class="form-control" type="text" value="<?php echo $row['nama_mata_pelajaran'] ?>" readonly>
        <br>
      </div>
      <div class="col-lg-12">
        <?php
          $no=1;
          $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi inner join data_pegawai on mata_pelajaran_transaksi.kd_mata_pelajaran_transaksi = data_pegawai.kd_mata_pelajaran_pegawai where kd_mata_pelajaran_transaksi='$kd_mata_pelajaran'";
          $tampil = mysqli_query($connect, $tampilDataKelas);
          $row=mysqli_fetch_array($tampil);
        ?>
        <label for="sel1">Nama Mata Pelajaran : </label>
        <input name="nip_pegawai_mata_pelajaran_transaksi" class="form-control" type="hidden" value="<?php echo $row["nip_pegawai"] ?>" readonly>
        <input class="form-control" type="text" value="<?php echo $row["nama_pegawai"] ?>" readonly>
        <br>
      </div>
    </div>
  </div> -->

  <div class="modal-footer">
    <button class="btn btn-success" type="submit" name="submit">Validkan!</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
  </div>
</form>

</body>
</html>
