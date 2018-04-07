<?php
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";

if($_SESSION['nip_administrator']){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Administrator Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include_once "halaman_administrator_bundle_css.php" ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include_once "halaman_administrator_navbar_menu.php" ?>
    <?php include_once "halaman_administrator_sidebar_menu.php" ?>
    <?php include_once "halaman_administrator_bundle_js.php" ?>

    <div class="content-wrapper" style="background:white;">
      <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Daftar Siswa</li>
        </ol>
      </section>

      <div class="row">
        <div class="container">
          <div class="col-lg-12" style="margin-top:50px;">
            <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDataSiswa"><i class="fa fa-plus"></i> Tambah Siswa</a>
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
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">No</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">NIS</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Siswa</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jenis Kelamin</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Kelas</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Foto</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1;
                    $tampilData = "SELECT * from data_siswa order by nis_siswa desc";
                    $tampil = mysqli_query($connect, $tampilData);
                    while($row=mysqli_fetch_array($tampil)){
                  ?>
                  <tr>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nis_siswa"] ?></td>
                    <td><?php echo $row["nama_siswa"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jenis_kelamin_siswa"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_kelas_daftar_siswa"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><img  src="frontend/img/foto/siswa/<?php echo $row['nis_siswa']; ?>" class="img-circle" style="width:50px;"></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <a type="button" class="btn btn-success" href="javascript:detailSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                          <a type="button" class="btn btn-primary" href="javascript:editSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                          <a type="button" class="btn btn-danger" href="javascript:deleteSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>
                  </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
          </div>
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
                        <span class="label label-primary" style="font-size:15px">Tambah Foto </span>
                        </br></br>
                        <input type="file" name="foto_siswa" id="preview_gambar" />
                        <img src="noimage" id="gambar_nodin" width="150" alt="" />
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
                      <input type="text" class="form-control" name="nis_siswa" id="nis_siswa" required>
                      </br>
                    </div>
                    <div class="col-lg-4">
                      <label for="sel1">Nama Siswa : </label>
                      <input type="text" class="form-control" name="nama_siswa" required>
                      </br>
                    </div>
                  </div>
                  <input type="hidden" class="form-control" name="password_siswa" id="password_siswa">

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
                        <select class="form-control" name="kd_kelas_daftar_siswa" required>
                          <option value="">Pilih Kelas Siswa : </option>
                          <?php
                            $tampilData = "SELECT * from kelas_daftar";
                            $tampil = mysqli_query($connect, $tampilData);
                            while($row=mysqli_fetch_array($tampil)){
                          ?>
                          <option value="<?php echo $row["kd_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                          <?php  } ?>
                        </select>
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
                    <div class="col-lg-4">
                      <label for="sel1">Anak ke : </label>
                      <input type="text" class="form-control" name="anak_ke_siswa" required>
                      </br>
                    </div>
                    <div class="col-lg-4">
                      <label for="sel1">Status dalam keluarga : </label>
                      <input type="text" class="form-control" name="status_dalam_keluarga_siswa" required>
                      </br>
                    </div>
                    <div class="col-lg-4">
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-lg-4">
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
                    </div>
                  </div> -->
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
                    <div style="margin-top:5px;margin-bottom:15px;font-size:20px;">
                      <span class="label label-primary">Form Sekolah </span>
                      <span class="label label-warning" style="margin-left:10px;">Diterima disekolah ini </span>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <label for="sel1">Pada tanggal : </label>
                        <input data-provide="datepicker" type="text" class="form-control" name="diterima_tanggal_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Semester : </label>
                        <input type="text" class="form-control" name="diterima_semester_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                      </div>
                    </div>
                    <div style="margin-top:px;margin-bottom:15px;font-size:20px;">
                      <span class="label label-warning">Sekolah Asal </span>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <label for="sel1">Nama Sekolah Asal : </label>
                        <input type="text" class="form-control" name="sekolah_asal_nama_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Alamat Asal : </label>
                        <input type="text" class="form-control" name="sekolah_asal_alamat_siswa">
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
                        <input type="text" class="form-control" name="stl_tahun_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Nomer: </label>
                        <input type="text" class="form-control" name="stl_nomor_siswa">
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
                        <input type="text" class="form-control" name="orangtua_nama_ayah_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Nama Ibu : </label>
                        <input type="text" class="form-control" name="orangtua_nama_ibu_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Alamat Orang Tua : </label>
                        <input type="text" class="form-control" name="orangtua_alamat_siswa">
                        </br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <label for="sel1">Telepon : </label>
                        <input type="text" class="form-control" name="orangtua_telepon_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Pekerjaan Ayah : </label>
                        <input type="text" class="form-control" name="orangtua_pekerjaan_ayah_siswa">
                        </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Pekerjaan Ibu : </label>
                        <input type="text" class="form-control" name="orangtua_pekerjaan_ibu_siswa">
                        </br>
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

    <?php include_once "halaman_administrator_footer.php" ?>

    <div class="control-sidebar-bg"></div>
  </div>

  <script>
  function bacaGambar(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#gambar_nodin').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#preview_gambar").change(function(){
   bacaGambar(this);
  });

  $("#nis_siswa").keyup(function(){
    $("#password_siswa").val(this.value.slice(0, 5));
  });

  </script>

</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
