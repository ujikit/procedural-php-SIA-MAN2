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
        <div class="modal-body">
            <div class="row">
                <input type="hidden" class="form-control" name="id_mata_pelajaran_transaksi" value="<?php echo $tampil["id_mata_pelajaran_transaksi"] ?>" readonly>
              <div class="col-lg-12">
                <?php
                $nip_pegawai = $tampil["nip_pegawai_mata_pelajaran_transaksi"];
                $query_tampilNamaPegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
                $row = mysqli_fetch_array($query_tampilNamaPegawai);
                ?>
                <p style="margin-bottom:0px;font-size:18px;border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                  Segarkan Data Kelas : <br>-> Mata Pelajaran :<br> <b><?php echo $tampil["nama_mata_pelajaran_transaksi"] ?></b> <br>-> Guru Mengampu : <br><b><?php echo $row["nama_pegawai"]; ?></b>
                </p>
              <!-- <label for="sel1">Nama Kelas : </label> -->
                  <select class="form-control" name="nama_kelas_mata_pelajaran_transaksi" style="visibility:hidden">
                    <?php
                      $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
                      $tampil = mysqli_query($connect, $tampilDataKelas);
                      $row=mysqli_fetch_array($tampil);
                    ?>
                    <option value="<?php echo $row["nama_kelas_mata_pelajaran_transaksi"] ?>"><?php echo $row["nama_kelas_mata_pelajaran_transaksi"] ?></option>
                    <?php
                      $no=1;
                      $tampilDataJabatan = "select * from kelas_daftar";
                      $tampil = mysqli_query($connect, $tampilDataJabatan);
                      while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <option value="<?php echo $row["nama_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                    <?php  } ?>
                  </select>
                  <br>
                </div>
                  <div class="col-lg-12">
                  <!-- <label for="sel1">Nama Mata Pelajaran : </label> -->
                      <select class="form-control" name="nama_mata_pelajaran_transaksi" Onchange="getMataPelajaranToGuru(this.value);" style="visibility:hidden">
                        <?php
                          $no=1;
                          $tampilDataKelas = "select * from mata_pelajaran_transaksi where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
                          $tampil = mysqli_query($connect, $tampilDataKelas);
                          $row=mysqli_fetch_array($tampil);
                        ?>
                        <option value="<?php echo $row["nama_mata_pelajaran_transaksi"] ?>"><?php echo $row["nama_mata_pelajaran_transaksi"] ?></option>
                      </select>
                      <br>
                  </div>
                    <div class="col-lg-12">
                    <!-- <label for="sel1">Guru Pengampu : </label> -->
                        <select class="form-control" name="nama_guru_mata_pelajaran_transaksi" style="visibility:hidden">
                          <?php
                            $no=1;
                            $tampilDataKelas = "SELECT * from mata_pelajaran_transaksi where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
                            $tampil = mysqli_query($connect, $tampilDataKelas);
                            $row=mysqli_fetch_array($tampil);
                            $nip_pegawai_mata_pelajaran_transaksi = $row["nip_pegawai_mata_pelajaran_transaksi"];

                            $tampilNamaGuru = mysqli_query($connect, "SELECT nama_pegawai from data_pegawai where nip_pegawai='$nip_pegawai_mata_pelajaran_transaksi'");
                            $tampil2 = mysqli_fetch_array($tampilNamaGuru);
                          ?>
                          <option value="<?php echo $tampil2["nama_pegawai"] ?>"><?php echo $tampil2["nama_pegawai"] ?></option>
                          <?php
                            $no=1;
                            $tampilDataJabatan = "select * from data_pegawai";
                            $tampil = mysqli_query($connect, $tampilDataJabatan);
                            while($row=mysqli_fetch_array($tampil)){
                          ?>
                          <option value="<?php echo $row["nama_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                          <?php  } ?>
                        </select>
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
