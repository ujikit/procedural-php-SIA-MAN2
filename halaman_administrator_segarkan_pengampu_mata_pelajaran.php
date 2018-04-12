<?php
include_once "backend/koneksi.php";
$id_mata_pelajaran_transaksi = $_GET['id_mata_pelajaran_transaksi'];
$query = mysqli_query($connect, "SELECT * from mata_pelajaran_transaksi where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'");
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
  <div class="modal-body">
    <div class="row">
      <input type="hidden" class="form-control" name="id_mata_pelajaran_transaksi" value="<?php echo $tampil["id_mata_pelajaran_transaksi"] ?>" readonly>
      <div class="col-lg-12">
        <label for="sel1">Nama Kelas : </label>
        <input name="kd_kelas_daftar_mata_pelajaran_transaksi" class="form-control" type="text" value="<?php echo $tampil["kd_kelas_daftar_mata_pelajaran_transaksi"] ?>" readonly>
        <br>
      </div>
      <div class="col-lg-12">
        <?php
          $no=1;
          $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi inner join mata_pelajaran on mata_pelajaran_transaksi.kd_mata_pelajaran_transaksi = mata_pelajaran.kd_mata_pelajaran where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
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
          $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi inner join data_pegawai on mata_pelajaran_transaksi.kd_mata_pelajaran_transaksi = data_pegawai.kd_mata_pelajaran_pegawai where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
          $tampil = mysqli_query($connect, $tampilDataKelas);
          $row=mysqli_fetch_array($tampil);
        ?>
        <label for="sel1">Nama Mata Pelajaran : </label>
        <input name="nip_pegawai_mata_pelajaran_transaksi" class="form-control" type="hidden" value="<?php echo $row["nip_pegawai"] ?>" readonly>
        <input class="form-control" type="text" value="<?php echo $row["nama_pegawai"] ?>" readonly>
        <br>
      </div>
    </div>
  </div>

  <div class="modal-footer">
    <button class="btn btn-success" type="submit" name="submit">Validkan!</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
  </div>
</form>

</body>
</html>
