<?php
include_once "backend/koneksi.php";
$nis_siswa = $_GET['nis_siswa'];
$query = mysqli_query($connect, "select * from data_siswa where nis_siswa='$nis_siswa'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

 ?>

 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tampil Data Siswa</h4>
    </div>
    <div class="modal-body">

      <form class="form-signin" action="Detail. Kosong" method="post">

        <div class="row">
          <div class="col-lg-12">
                      </br>

                      <div class="row" style="background:#66ff66">
                      <div class="col-lg-4">
                      </div>
                      <div class="col-lg-4">

                        <img  src="frontend/img/foto/siswa/<?php echo $tampil['nis_siswa']; ?>" class="img-circle" style="margin-left:80px;width:130px;">
                       </br>

                      </div>

                      <div class="col-lg-4">
                      </div>
                      </div>

                      <div style="margin-top:20px;font-size:20px;">
                        <span class="label label-primary">Form Siswa </span>
                      </div>

                      <div class="row" style="margin-top:15px;">
                      <div class="col-lg-4">
                          <label for="sel1">NISN : </label>
                            <input type="text" class="form-control" name="nisn_siswa" value="<?php echo $tampil["nisn_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">NIS : </label>
                            <input type="text" class="form-control" name="nis_siswa" value="<?php echo $tampil["nis_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Nama Siswa : </label>
                            <input type="text" class="form-control" name="nama_siswa" value="<?php echo $tampil["nama_siswa"] ?>" readonly>
                          </br>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Username : </label>
                          <input type="text" class="form-control" name="username_siswa" value="<?php echo $tampil["username_siswa"] ?>" readonly>
                      </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Password : </label>
                          <input style="background:#e6e6e6" type="text" class="form-control" name="password_siswa" value="" readonly>
                      </br>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                              <label for="sel1">Kelas : </label>
                              <input type="text" class="form-control" name="kelas_siswa" value="<?php echo $tampil["kd_kelas_daftar_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Alamat : </label>
                            <input type="text" class="form-control" name="alamat_siswa" value="<?php echo $tampil["alamat_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">No. Handphone : </label>
                            <input type="text" class="form-control" name="no_handphone_siswa" value="<?php echo $tampil["no_handphone_siswa"] ?>" readonly>
                          </br>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Tempat Lahir : </label>
                            <input type="text" class="form-control" name="tempat_lahir_siswa" value="<?php echo $tampil["tempat_lahir_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Tanggal Lahir (ex :1945-08-17) : </label>
                            <input type="text" class="form-control" name="tanggal_lahir_siswa" value="<?php echo $tampil["tanggal_lahir_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                              <label for="sel1">Jenis Kelamin : </label>
                              <input type="text" class="form-control" name="jenis_kelamin_siswa" value="<?php echo $tampil["jenis_kelamin_siswa"] ?>" readonly>
                          </br>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Anak ke : </label>
                          <input type="text" class="form-control" name="anak_ke_siswa" value="<?php echo $tampil['anak_ke_siswa'] ?>" readonly>
                      </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Status dalam keluarga : </label>
                            <input type="text" class="form-control" name="status_dalam_keluarga_siswa" value="<?php echo $tampil['status_dalam_keluarga_siswa'] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                      </div>
                      </div>
                      <br>
                      <div style="margin-top:-20px;margin-bottom:15px;font-size:20px;">
                        <span class="label label-primary">Form Wali </span>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Nama Wali : </label>
                            <input type="text" class="form-control" name="nama_wali" value="<?php echo $tampil["nama_wali"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Alamat Wali: </label>
                          <input type="text" class="form-control" name="alamat_wali" value="<?php echo $tampil["alamat_wali"] ?>" readonly>
                        </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Jenis Kelamin Wali : </label>
                          <input type="text" name="jenis_kelamin_wali" class="form-control" value="<?php echo $tampil["jenis_kelamin_wali"] ?>" readonly>
                          </br>
                      </div>
                      </div>

                      <div class="row">
                    <div class="col-lg-4">
                      <label for="sel1">Pekerjaan Wali : </label>
                      <input type="text" name="pekerjaan_wali" class="form-control" value="<?php echo $tampil["pekerjaan_wali"] ?>" readonly>
                      </br>
                    </div>
                        <div class="col-lg-4">
                            <label for="sel1">Tempat Lahir : </label>
                              <input type="text" class="form-control" name="tempat_lahir_wali" value="<?php echo $tampil["tempat_lahir_wali"] ?>" readonly>
                            </br>
                        </div>
                        <div class="col-lg-4">
                            <label for="sel1">Tanggal Lahir (ex : 1945-08-17) : </label>
                              <input type="text" class="form-control" name="tanggal_lahir_wali" value="<?php echo $tampil["tanggal_lahir_wali"] ?>" readonly>
                            </br>
                        </div>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">No. Handphone Wali : </label>
                            <input type="text" class="form-control" name="no_handphone_wali"  value="<?php echo $tampil["no_handphone_wali"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                      </div>
                      <div class="col-lg-4">
                      </div>
                      </div>

                      <div style="margin-top:5px;margin-bottom:15px;font-size:20px;">
                        <span class="label label-primary">Form Sekolah </span>
                        <span class="label label-warning" style="margin-left:10px;">Diterima disekolah ini </span>
                      </div>
                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Di kelas : </label>
                            <input type="text" class="form-control" name="id_kelas_daftar"  value="<?php echo $tampil["id_kelas_daftar"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Pada tanggal : </label>
                            <input type="text" class="form-control" name="diterima_tanggal_siswa"  value="<?php echo $tampil["diterima_tanggal_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Semester : </label>
                            <input type="text" class="form-control" name="diterima_semester_siswa"  value="<?php echo $tampil["diterima_semester_siswa"] ?>" readonly>
                          </br>
                      </div>
                      </div>

                      <div style="margin-top:px;margin-bottom:15px;font-size:20px;">
                        <span class="label label-warning">Sekolah Asal </span>
                      </div>
                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Nama Sekolah Asal : </label>
                            <input type="text" class="form-control" name="sekolah_asal_nama_siswa"  value="<?php echo $tampil["sekolah_asal_nama_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Alamat Asal : </label>
                            <input type="text" class="form-control" name="sekolah_asal_alamat_siswa"  value="<?php echo $tampil["sekolah_asal_alamat_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                      </div>
                      </div>

                      <div style="margin-top:px;margin-bottom:15px;font-size:20px;">
                        <span class="label label-warning">Surat Tanda Lulus (STL) SMP/MTs </span>
                      </div>
                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Tahun : </label>
                            <input type="text" class="form-control" name="stl_tahun_siswa"  value="<?php echo $tampil["stl_tahun_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Nomer: </label>
                            <input type="text" class="form-control" name="stl_nomor_siswa"  value="<?php echo $tampil["stl_nomor_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                      </div>
                      </div>

                      <div style="margin-top:px;margin-bottom:15px;font-size:20px;">
                        <span class="label label-primary">Orang Tua </span>
                      </div>
                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Nama Ayah : </label>
                            <input type="text" class="form-control" name="orangtua_nama_ayah_siswa"  value="<?php echo $tampil["orangtua_nama_ayah_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Nama Ibu : </label>
                            <input type="text" class="form-control" name="orangtua_nama_ibu_siswa"  value="<?php echo $tampil["orangtua_nama_ibu_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Alamat Orang Tua : </label>
                            <input type="text" class="form-control" name="orangtua_alamat_siswa"  value="<?php echo $tampil["orangtua_alamat_siswa"] ?>" readonly>
                          </br>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-lg-4">
                          <label for="sel1">Telepon : </label>
                            <input type="text" class="form-control" name="orangtua_telepon_siswa"  value="<?php echo $tampil["orangtua_telepon_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Pekerjaan Ayah : </label>
                            <input type="text" class="form-control" name="orangtua_pekerjaan_ayah_siswa"  value="<?php echo $tampil["orangtua_pekerjaan_ayah_siswa"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Pekerjaan Ibu : </label>
                            <input type="text" class="form-control" name="orangtua_pekerjaan_ibu_siswa"  value="<?php echo $tampil["orangtua_pekerjaan_ibu_siswa"] ?>" readonly>
                          </br>
                      </div>
                      </div>


            </div>
          </div>

      </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
    </div>
