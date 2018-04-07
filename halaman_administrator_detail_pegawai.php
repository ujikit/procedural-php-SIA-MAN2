<?php
include_once "backend/koneksi.php";
$id_pegawai = $_GET['id_pegawai'];
$query = mysqli_query($connect, "SELECT * from data_pegawai inner join mata_pelajaran on data_pegawai.kd_mata_pelajaran_pegawai = mata_pelajaran.kd_mata_pelajaran where id_pegawai='$id_pegawai'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

 ?>

 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tampil Data Pegawai</h4>
    </div>
    <div class="modal-body">

      <form class="form-signin" action="Detail. Kosong" method="post">

<div class="row">
  <div class="col-lg-12">
                <input type="hidden" class="form-control" name="id_pegawai" value="<?php echo $tampil["id_pegawai"] ?>" readonly>
              </br>
              <div class="row" style="background:#66ff66">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                       <img  src="frontend/img/foto/pegawai/<?php echo $tampil['nip_pegawai']; ?>" class="img-circle" style="margin-left:80px;width:130px;">
                      </br>
              </div>
              <div class="col-lg-4">
              </div>
              </div>
              <div class="row" style="margin-top:15px;">
              <div class="col-lg-4">
                  <label for="sel1">NIP : </label>
                    <input type="text" class="form-control" name="nip_pegawai" value="<?php echo $tampil["nip_pegawai"] ?>" readonly>
                  </br>
              </div>
              <div class="col-lg-4">
                  <label for="sel1">Nama Pegawai : </label>
                    <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $tampil["nama_pegawai"]?>" readonly>
                  </br>
              </div>
              <div class="col-lg-4">
                  <label for="sel1">Jabatan : </label>
                    <input type="text" class="form-control" name="jabatan_pegawai" value="<?php echo $tampil["jabatan_pegawai"]?>" readonly>
              </br>
              </div>
              </div>

              <div class="row">
              <div class="col-lg-4">
                  <label for="sel1">Pengampu Mata Pelajaran : </label>
                    <input type="text" class="form-control" name="nama_mata_pelajaran_pegawai" value="<?php echo $tampil["nama_mata_pelajaran"]?>" readonly>
                  </br>
              </div>
              <div class="col-lg-4">
                  <label for="sel1">Username : </label>
                    <input type="text" class="form-control" name="username_pegawai" value="<?php echo $tampil["username_pegawai"]?>" readonly>
                  </br>
              </div>
              <div class="col-lg-4">
                  <label for="sel1">Password : </label>
                    <input style="background:#e6e6e6" type="text" class="form-control" name="password_pegawai" value="<?php echo "Password Bersifat Rahasia" ?>" readonly>
                  </br>
              </div>
              </div>

              <div class="row">
              <div class="col-lg-4">
                  <label for="sel1">Alamat : </label>
                    <input type="text" class="form-control" name="alamat_pegawai" value="<?php echo $tampil["alamat_pegawai"]?>" readonly>
                  </br>
              </div>
              <div class="col-lg-4">
                  <label for="sel1">Tempat Lahir : </label>
                    <input type="text" class="form-control" name="tempat_lahir_pegawai" value="<?php echo $tampil["tempat_lahir_pegawai"]?>" readonly>
                  </br>
              </div>
              <div class="col-lg-4">
                  <label for="sel1">Tanggal Lahir : </label>
                    <input type="text" class="form-control" name="tanggal_lahir_pegawai" value="<?php echo $tampil["tanggal_lahir_pegawai"]?>" readonly>
                  </br>
              </div>
              </div>

              <div class="row">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                  <label for="sel1">No. Handphone : </label>
                    <input type="text" class="form-control" name="no_handphone_pegawai" value="<?php echo $tampil["no_handphone_pegawai"]?>" readonly>
                  </br>
              </div>
              <div class="col-lg-4">
              </div>
              </div>
  </div>
</div>

      </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
    </div>
