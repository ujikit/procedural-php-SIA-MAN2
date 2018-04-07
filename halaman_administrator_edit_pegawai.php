<?php
include_once "backend/koneksi.php";
$id_pegawai = $_GET['id_pegawai'];
$query = mysqli_query($connect, "SELECT * from data_pegawai where id_pegawai='$id_pegawai'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

 ?>

<!DOCTYPE html>
<html>
<head>



</head>
<body>
 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Pegawai</h4>
    </div>

    <form class="form-signin" action="backend/administrator_edit_pegawai.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <input type="hidden" class="form-control" name="id_pegawai" value="<?php echo $tampil["id_pegawai"] ?>" readonly>
            </br>
            <div class="row" style="background:#66ff66">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-4">
                </br>
                <span class="label label-primary">Foto Sebelumnya : </span>
                </br></br>
                <img name="foto_pegawai"  src="frontend/img/foto/pegawai/<?php echo $tampil['nip_pegawai']; ?>" style="margin-left:0px;width:130px;border: 15px solid #3e2b14;  padding: 10px;">
              </div>
              <div class="col-lg-4">
                <div style="max-width: 650px; margin: auto;">
                </br>
                <span class="label label-primary">Ganti Foto </span>
                </br></br>
                <div id="image-preview-div" style="display: none">
                   <label for="exampleInputFile">Selected image:</label>
                   <br>
                   <img id="preview-img" src="noimage" class="img-circle" style="width:130px;margin-bottom:20px;">
                 </div>
                 <div class="form-group">
                   <input type="file" name="foto_pegawai" id="file">
                 </div>
                 <br>
                </div>
              </div>
              <div class="col-lg-2">
              </div>
            </div>

            <div class="row" style="margin-top:15px;">
              <div class="col-lg-4">
                <label for="sel1">NIP : </label>
                <input type="text" class="form-control" name="nip_pegawai" value="<?php echo $tampil["nip_pegawai"] ?>" id="nip_pegawai" >
                </br>
              </div>
              <div class="col-lg-4">
                <label for="sel1">Nama Pegawai : </label>
                <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $tampil["nama_pegawai"]?>" >
                </br>
              </div>
              <div class="col-lg-4">
                  <label for="sel1">Jabatan : </label>
                  <select class="form-control" name="jabatan_pegawai">
                    <?php
                      $tampilDataJabatan = "SELECT * from data_pegawai where id_pegawai='$id_pegawai'";
                      $tampil = mysqli_query($connect, $tampilDataJabatan);
                      $row=mysqli_fetch_array($tampil);
                    ?>
                    <option value="<?php echo $row["jabatan_pegawai"] ?>"><?php echo ucfirst($row["jabatan_pegawai"]) ?></option>
                    <?php
                      $tampilDataJabatan = "SELECT * from jabatan";
                      $tampil = mysqli_query($connect, $tampilDataJabatan);
                      while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <option value="<?php echo $row["nama_jabatan"] ?>"><?php echo $row["nama_jabatan"] ?></option>
                    <?php  } ?>
                  </select>
                  </br>
              </div>
            </div>

           <div class="row">
             <div class="col-lg-4">
                 <label for="sel1">Pengampu Mata Pelajaran : </label>
                 <select class="form-control" name="kd_mata_pelajaran_pegawai">
                   <?php
                     $tampilMataPelajaranPegawai = "SELECT * from data_pegawai inner join mata_pelajaran on data_pegawai.kd_mata_pelajaran_pegawai = mata_pelajaran.kd_mata_pelajaran where id_pegawai='$id_pegawai'";
                     $tampil = mysqli_query($connect, $tampilMataPelajaranPegawai);
                     $row=mysqli_fetch_array($tampil);
                   ?>
                   <option value="<?php echo $row["kd_mata_pelajaran"] ?>"><?php echo $row["nama_mata_pelajaran"] ?></option>
                   <?php
                     $tampilDataMataPelajaran = "SELECT * from mata_pelajaran";
                     //DISTINCT MENCEGAH DIPLIKASI DATA
                     $tampil = mysqli_query($connect, $tampilDataMataPelajaran);
                     while($row=mysqli_fetch_array($tampil)){
                   ?>
                   <option value="<?php echo $row["kd_mata_pelajaran"] ?>"><?php echo $row["nama_mata_pelajaran"] ?></option>
                   <?php  } ?>
                 </select>
                 </br>
             </div>
             <?php
             $query = mysqli_query($connect, "SELECT * from data_pegawai where id_pegawai='$id_pegawai'");
             $tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);
             ?>
              <div class="col-lg-4">
                <label for="sel1">Username : </label>
                <input style="background:#e6e6e6" type="text" class="form-control" name="username_pegawai" value="<?php echo "Username Hanya Dapat Diganti Oleh Pengguna Akun" ?>" id="username_pegawai" readonly>
                </br>
              </div>
              <div class="col-lg-4">
                <label for="sel1">Password : </label>
                <input style="background:#e6e6e6" type="text" class="form-control" name="password_pegawai" value="<?php echo "Password Hanya Dapat Diganti Oleh Pengguna Akun" ?>" id="password_pegawai" readonly>
                </br>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <label for="sel1">Alamat : </label>
                <input type="text" class="form-control" name="alamat_pegawai" value="<?php echo $tampil["alamat_pegawai"]?>" >
                </br>
              </div>
              <div class="col-lg-4">
                <label for="sel1">Tempat Lahir : </label>
                <input type="text" class="form-control" name="tempat_lahir_pegawai" value="<?php echo $tampil["tempat_lahir_pegawai"]?>" >
                </br>
              </div>
              <div class="col-lg-4">
                <label for="sel1">Tanggal Lahir : </label>
                <input type="text" class="form-control" name="tanggal_lahir_pegawai" value="<?php echo $tampil["tanggal_lahir_pegawai"]?>" >
                </br>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                  <label for="sel1">No. Handphone : </label>
                    <input type="text" class="form-control" name="no_handphone_pegawai" value="<?php echo $tampil["no_handphone_pegawai"]?>" >
                  </br>
              </div>
              <div class="col-lg-4">
              </div>
            </div>
           </div>
          </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-success" type="submit" name="submit">Ubah Data Pegawai</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        </div>
    </form>
</body>
</html>
