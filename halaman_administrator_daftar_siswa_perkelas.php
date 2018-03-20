<?php
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";
$id_kelas_daftar = $_GET['id_kelas_daftar'];
$kelompok_kelas_kelas_transaksi = $_GET['kelompok_kelas_kelas_transaksi'];

if($_SESSION['nip_administrator']){

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <script type="text/javascript" charset="utf-8">
  		$(document).ready(function() {
  			$('#tampilDataTables').DataTable();
  		} );
  </script>

  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li >Daftar Kelas & Wali Kelas</li>
      <li class="active">Lihat Siswa</li>
    </ol>
  </section>


  <div class="row">
    <div class="container">
      <div class="col-lg-4" style="margin-top:50px;">
        <!-- <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDataSiswa"><i class="fa fa-plus"></i> Tambah Siswa</a> -->

      </div>
      <div class="col-lg-4" style="margin-left:-20px;margin-top:50px;">
      </div>
      <div class="col-lg-4" style="margin-top:50px;">
        <a type="button" class="btn btn-danger" href="javascript:kembaliKePanelKelas('<?php echo "kembaliKePanelKelass" ?>')" style="float:right"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="container">
    <div class="col-lg-12" style="margin-top:20px;">
      <div class="table-responsive">

        <table id="tampilDataTables" class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "No"; ?></th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "NIS Siswa"; ?></th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Nama Siswa"; ?></th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Jenis Kelamin Siswa"; ?></th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "No. Handphone Wali"; ?></th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Lihat Nilai"; ?></th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "Aksi"; ?></th>

            </tr>
          </thead>
          <tbody>
            <?php
              $no=1;
              $tampilMataPelajaran = "SELECT * from data_siswa where id_kelas_daftar='$id_kelas_daftar' order by nis_siswa desc";
              $tampil = mysqli_query($connect, $tampilMataPelajaran);
              while($row=mysqli_fetch_array($tampil)){
            ?>
            <tr>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nis_siswa"] ?></td>
              <td><?php echo $row["nama_siswa"] ?></td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jenis_kelamin_siswa"] ?></td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["no_handphone_wali"] ?></td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                    <a type="button" class="btn btn-success" href="javascript:detailSemuaSiswaPerKelas_NilaiPerSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Lihat Nilai</a>
              </td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                    <a type="button" class="btn btn-success" href="javascript:detailSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <a type="button" class="btn btn-primary" href="javascript:editSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a type="button" class="btn btn-danger" href="javascript:deleteSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
      </table>

      </div>
    </div>
  </div>
</div>


  <div id="tambahPengampuMataPelajaran" class="modal fade">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Data Pengampu Mata Pelajaran</h4>
        </div>

     <form class="form-signin" action="backend/administrator_tambah_pengampu_mata_pelajaran.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-12">
                <label for="sel1">Nama Kelas : </label>
                  <select class="form-control" name="nama_kelas_mata_pelajaran_transaksi" required>
                    <option value="">Pilih Kelas </option>
                    <?php
                      $tampilDataKelas = "SELECT * from kelas_daftar";
                      $tampil = mysqli_query($connect, $tampilDataKelas);
                      while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <option value="<?php echo $row["nama_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                    <?php  } ?>
                  </select>
                  </br>
              </div>
              <div class="col-lg-12">
                      <label for="sel1">Nama Mata Pelajaran : </label>
                      <select class="form-control" name="nama_mata_pelajaran_transaksi" Onchange="getMataPelajaranToGuru(this.value);getMataPelajaranToIDMataPelajaran(this.value);" required>
                      <option value="">Pilih Mata Pelajaran </option>
                      <?php
                        $tampilDataMataPelajaran = "SELECT * from mata_pelajaran";
                        $tampil = mysqli_query($connect, $tampilDataMataPelajaran);
                        while($row=mysqli_fetch_array($tampil)){
                      ?>
                      <option value="<?php echo $row["nama_mata_pelajaran"] ?>"><?php echo $row["nama_mata_pelajaran"] ?></option>
                      <?php  } ?>
                      </select>
                      </br>
              </div>
              <div class="col-lg-12">
                      <!--<label for="sel1">ID Mata Pelajaran : </label>-->
                        <select type="hidden" class="form-control" id="mataGuruByIDMataPelajaran" name="id_mata_pelajaran_mata_pelajaran_transaksi" required>
                        <option value="">ID Mata Pelajaran </option>
                        </select>
              </div>
              <div class="col-lg-12">
                      <label for="sel1">Nama Guru Pengampu : </label>
                      <select class="form-control" id="mataGuruByPelajaran" name="nama_guru_mata_pelajaran_transaksi" required>
                      <option value="">Nama Guru Pengampu </option>
                      </select>
                      </br>
              </div>
            </div>
          </div>
        </div>

    </div>
    <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
              <button class="btn btn-success" type="submit" name="submit">Tambah Data</button>
    </div>
    </form>
  </div>
  </div>
  </div>

  <div id="tampilDataSiswa" class="modal fade">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div id="tampil"></div>
            <?php
              // include_once "halaman_administrator_detail_pegawai.php"
            ?>
          </div>
      </div>
  </div>

  <div id="tambahDataSiswa" class="modal fade">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Siswa</h4>
            </div>

        <form class="form-signin" action="backend/administrator_tambah_siswa.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="row">
                      <div class="col-lg-12">
                                  </br>

                                  <div class="row" style="background:#66ff66">
                                  <div class="col-lg-4">
                                  </div>
                                  <div class="col-lg-4">

                                  <div style="max-width: 650px; margin: auto;">
                                    </br>
                                    <span class="label label-primary">Tambah Foto </span>
                                    </br></br>
                                      <div id="image-preview-div" style="display: none">
                                        <label for="exampleInputFile">Selected image:</label>
                                        <br>
                                        <img id="preview-img" src="noimage" class="img-circle" style="width:130px;margin-bottom:20px;">
                                      </div>
                                      <div class="form-group">
                                        <input type="file" name="foto_siswa" id="file">
                                      </div>
                                      <br>
                                  </div>

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
                                        <input type="text" class="form-control" name="nisn_siswa" required>
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">NIS : </label>
                                        <input type="text" class="form-control" name="nis_siswa" required>
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">Nama Siswa : </label>
                                        <input type="text" class="form-control" name="nama_siswa" required>
                                      </br>
                                  </div>
                                  </div>

                                  <div class="row">
                                  <div class="col-lg-4">
                                      <label for="sel1">Jenis Kelamin : </label>
                                          <select class="form-control" name="jenis_kelamin_siswa" required>
                                            <option value="">Pilih Jenis Kelamin : </option>
                                            <option value="L">L</option>
                                            <option value="P">P</option>
                                          </select>
                                  </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">Kelas : </label>
                                            <?php
                                              $tampilData = "SELECT * from kelas_daftar where id_kelas_daftar='$id_kelas_daftar'";
                                              $tampil = mysqli_query($connect, $tampilData);
                                              $row=mysqli_fetch_array($tampil);
                                            ?>
                                              <input type="text" class="form-control" name="alamat_siswa" value="<?php echo $row["id_kelas_daftar"] ?>" required>
                                  </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">Alamat : </label>
                                        <input type="text" class="form-control" name="alamat_siswa" required>
                                      </br>
                                  </div>
                                  </div>

                                  <div class="row">
                                  <div class="col-lg-4">
                                      <label for="sel1">Tempat Lahir : </label>
                                        <input type="text" class="form-control" name="tempat_lahir_siswa" required>
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">Tanggal Lahir (ex :1945-08-17) : </label>
                                        <input data-provide="datepicker" type="text" class="form-control" name="tanggal_lahir_siswa" required>
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">No. Handphone : </label>
                                        <input type="text" class="form-control" name="no_handphone_siswa">
                                      </br>
                                  </div>
                                  </div>

                                  <div class="row">
                                  <!--<div class="col-lg-4">
                                      <label for="sel1">Username : </label>
                                        <input type="text" class="form-control" name="username_siswa" required>
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">Password : </label>
                                        <input type="text" class="form-control" name="password_siswa" required>
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                  </div>-->
                                  </div>
                                  <br>
                                  <div style="margin-top:-20px;margin-bottom:15px;font-size:20px;">
                                    <span class="label label-primary">Form Wali </span>
                                  </div>

                                  <div class="row">
                                  <div class="col-lg-4">
                                      <label for="sel1">Nama Wali : </label>
                                        <input type="text" class="form-control" name="nama_wali" >
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                    <label for="sel1">Alamat Wali: </label>
                                      <input type="text" class="form-control" name="alamat_wali" >
                                    </br>
                                  </div>
                                  <div class="col-lg-4">
                                      <label for="sel1">Jenis Kelamin Wali : </label>
                                      <select class="form-control" name="jenis_kelamin_wali">
                                        <option value="">Pilih Jenis Kelamin : </option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                      </select>
                                      </br>
                                  </div>
                                  </div>

                                  <div class="row">
                                <div class="col-lg-4">
                                  <label for="sel1">Pekerjaan Wali : </label>
                                  <select class="form-control" name="pekerjaan_wali">
                                    <option value="">Pilih Pekerjaan Wali : </option>
                                    <option value="Bidan">Bidan</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Guru">Guru</option>
                                    <option value="">Polisi</option>
                                    <option value="Polisi">Wirausaha</option>
                                  </select>
                                  </br>
                                </div>
                                    <div class="col-lg-4">
                                        <label for="sel1">Tempat Lahir : </label>
                                          <input type="text" class="form-control" name="tempat_lahir_wali">
                                        </br>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="sel1">Tanggal Lahir (ex : 1945-08-17) : </label>
                                          <input data-provide="datepicker" type="text" class="form-control" name="tanggal_lahir_wali">
                                        </br>
                                    </div>
                                  </div>

                                  <div class="row">
                                  <div class="col-lg-4">
                                      <label for="sel1">No. Handphone Wali: </label>
                                        <input type="text" class="form-control" name="no_handphone_wali" >
                                      </br>
                                  </div>
                                  <div class="col-lg-4">
                                  </div>
                                  <div class="col-lg-4">
                                  </div>
                                  </div>

                        </div>
                      </div>

                  </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" type="submit" name="submit">Tambah Data Siswa</button>
                        </div>
        </form>

          </div>
      </div>
  </div>

  <div id="editDataSiswa" class="modal fade">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div id="edit"></div>
            <?php
              // include_once "halaman_administrator_edit_pegawai.php"
            ?>
          </div>
      </div>
  </div>

  <div id="deleteDataSiswa" class="modal fade">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div id="delete"></div>
            <?php
              // include_once "halaman_administrator_edit_pegawai.php"
            ?>
          </div>
      </div>
  </div>

</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
