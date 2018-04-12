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

  <script type="text/javascript">
  function fetch_select(val){
   $.ajax({
     type: 'post',
     url: 'backend/get_tambah_guru_pengampu_mapel_halaman_administrator_daftar_guru_pengampu_mata_pelajaran_perkelas.php',
     data: {
      get_option:val
     },
     success: function (response) {
      document.getElementById("new_select").innerHTML=response;
     }
   });
  }
  </script>

  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Edit Data Pengampu Mata Pelajaran</h4>
  </div>

  <form class="form-signin" action="backend/administrator_edit_pengampu_mata_pelajaran.php" method="post">
      <div class="modal-body">
          <div class="row">
              <input type="hidden" class="form-control" name="id_mata_pelajaran_transaksi" value="<?php echo $tampil["id_mata_pelajaran_transaksi"] ?>" readonly>
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
                    <select class="form-control" name="kd_mata_pelajaran_transaksi" Onchange="getMataPelajaranToGuru(this.value);">
                      <?php
                        $no=1;
                        $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi inner join mata_pelajaran on mata_pelajaran_transaksi.kd_mata_pelajaran_transaksi = mata_pelajaran.kd_mata_pelajaran where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
                        $tampil = mysqli_query($connect, $tampilDataKelas);
                        $row=mysqli_fetch_array($tampil);
                      ?>
                      <option value="<?php echo $row["kd_mata_pelajaran_transaksi"] ?>"><?php echo $row["nama_mata_pelajaran"] ?></option>
                    </select>
                    <br>
                </div>
                  <div class="col-lg-12">
                  <label for="sel1">Guru Pengampu : </label>
                      <select class="form-control" name="nama_guru_mata_pelajaran_transaksi">
                        <?php
                          $no=1;
                          $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
                          $tampil = mysqli_query($connect, $tampilDataKelas);
                          $row=mysqli_fetch_array($tampil);
                          $nip_pegawai_mata_pelajaran_transaksi = $row["nip_pegawai_mata_pelajaran_transaksi"];

                          $tampilNamaGuru = mysqli_query($connect, "SELECT nama_pegawai from data_pegawai where nip_pegawai='$nip_pegawai_mata_pelajaran_transaksi'");
                          $tampil2 = mysqli_fetch_array($tampilNamaGuru);
                        ?>
                        <option value="<?php echo $tampil2["nip_pegawai"] ?>"><?php echo $tampil2["nama_pegawai"] ?></option>
                        <?php
                          $no=1;
                          $tampilDataJabatan = "SELECT * from data_pegawai where nip_pegawai !='1111'";
                          $tampil = mysqli_query($connect, $tampilDataJabatan);
                          while($row=mysqli_fetch_array($tampil)){
                        ?>
                        <option value="<?php echo $row["nip_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                        <?php  } ?>
                      </select>
                  </div>
          </div>
      </div>

      <div class="modal-footer">
          <button class="btn btn-success" type="submit" name="submit">Ubah Data Kelas</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
  </form>
</body>
</html>
