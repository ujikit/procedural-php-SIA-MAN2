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

  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Edit Data Pengampu Mata Pelajaran</h4>
  </div>

  <form class="form-signin" action="backend/administrator_edit_pengampu_mata_pelajaran.php" method="post">
    <div class="modal-body">
      <div class="row">
        <h3>Masih Dalam Pengembangan.</h3>
        <!-- <input type="hidden" class="form-control" name="id_mata_pelajaran_transaksi" value="<?php echo $tampil["id_mata_pelajaran_transaksi"] ?>" readonly>
        <div class="col-lg-12">
          <label for="sel1">Nama Kelas : </label>
          <select class="form-control" name="kd_kelas_daftar_mata_pelajaran_transaksi">
            <?php
              $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi inner join kelas_daftar on mata_pelajaran_transaksi.kd_kelas_daftar_mata_pelajaran_transaksi = kelas_daftar.kd_kelas_daftar where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
              $tampil = mysqli_query($connect, $tampilDataKelas);
              $row=mysqli_fetch_array($tampil);
            ?>
            <option value="<?php echo $row["kd_kelas_daftar_mata_pelajaran_transaksi"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
            <?php
              $no=1;
              $tampilDataJabatan = "SELECT * from kelas_daftar";
              $tampil = mysqli_query($connect, $tampilDataJabatan);
              while($row=mysqli_fetch_array($tampil)){
            ?>
            <option value="<?php echo $row["kd_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
            <?php  } ?>
          </select>
            <br>
        </div>
        <div class="col-lg-12">
          <label for="sel1">Nama Mata Pelajaran : </label>
          <select class="form-control" name="kd_mata_pelajaran" onchange="fetch_selectEdit(this.value);">
            <option>Pilih Nama Mata Pelajaran</option>
            <?php
            $select=mysqli_query($connect, "SELECT * from mata_pelajaran group by nama_mata_pelajaran");
            while($row=mysqli_fetch_array($select)){
             echo "<option value=".$row['kd_mata_pelajaran'].">".$row['nama_mata_pelajaran']."</option>";
            }
            ?>
          </select>
          </br>
        </div>
        <div class="col-lg-12" style="margin-top:0px">
          <label for="sel1">Nama Guru Pengampu : </label>
          <select id="new_selectEdit" class="form-control" name="nip_pegawai" required>
            <option value="">Belum Ada Guru Pengampu</option>
          </select>
          </br>
        </div> -->
      </div>
    </div>
      <!-- <div class="modal-footer">
          <button class="btn btn-success" type="submit" name="submit">Ubah Data Kelas</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div> -->
  </form>
</body>
</html>
