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
        <li class="active">Daftar Pegawai</li>
      </ol>
    </section>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:50px;">
          <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDataPegawai"><i class="fa fa-plus"></i> Tambah Pegawai</a>
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
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">NIP Pegawai</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Pegawai</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jabatan</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Pengampu</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Foto</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  $tampilDataPegawai = "SELECT * from data_pegawai inner join mata_pelajaran on data_pegawai.kd_mata_pelajaran_pegawai = mata_pelajaran.kd_mata_pelajaran where jabatan_pegawai!='admin'";
                  $tampil = mysqli_query($connect, $tampilDataPegawai);
                  while($row=mysqli_fetch_array($tampil)){
                ?>
                <tr>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nip_pegawai"] ?></td>
                  <td><?php echo $row["nama_pegawai"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo ucfirst($row["jabatan_pegawai"]) ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_mata_pelajaran"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><img  src="frontend/img/foto/pegawai/<?php echo $row['nip_pegawai']; ?>" class="img-circle" style="width:50px;"></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <a type="button" class="btn btn-success" href="javascript:detailPegawai('<?php echo $row['id_pegawai'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-primary" href="javascript:editPegawai('<?php echo $row['id_pegawai'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-danger" href="javascript:deletePegawai('<?php echo $row['id_pegawai'] ?>','<?php echo $row['nip_pegawai'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

    <div id="tampilDataPegawai" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_detail_pegawai.php"
              ?>
            </div>
        </div>
    </div>

<div id="tambahDataPegawai" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Pegawai</h4>
      </div>

      <form class="form-signin" action="backend/administrator_tambah_pegawai.php" method="post" enctype="multipart/form-data">
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
                        <input type="file" name="foto_pegawai" id="file">
                      </div>
                      <br>
                  </div>
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              <div class="row" style="margin-top:15px;">
                <div class="col-lg-4">
                    <label for="sel1">NIP : </label>
                      <input type="text" class="form-control" name="nip_pegawai" id="nip_pegawai" required>
                    </br>
                </div>
                <div class="col-lg-4">
                  <label for="sel1">Nama Pegawai : </label>
                    <input type="text" class="form-control" name="nama_pegawai" required>
                  </br>
                </div>
                <div class="col-lg-4">
                  <label for="sel1">Jabatan : </label>
                    <select class="form-control" name="jabatan_pegawai" Onchange="getJabatanToMataPelajaran(this.value);" required>
                      <option value="guru">Guru</option>
                      <option value="bk">BK</option>
                      <option value="admin">Administrator</option>
                    </select>
                  </br>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label for="sel1">Pengampu Mata Pelajaran : </label>
                  <select class="form-control" name="kd_mata_pelajaran_pegawai" required>
                    <option value="">Pilih Mata Pelajaran : </option>
                    <?php
                      $tampilDataMapel = "SELECT * from mata_pelajaran";
                      $tampil = mysqli_query($connect, $tampilDataMapel);
                      while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <option value="<?php echo $row["kd_mata_pelajaran"] ?>"><?php echo $row["nama_mata_pelajaran"] ?></option>
                    <?php  } ?>
                  </select>
                  </br>
                </div>
                <div class="col-lg-4">
                    <label for="sel1">Username : </label>
                      <input type="text" class="form-control" name="username_pegawai" id="username_pegawai" required>
                    </br>
                </div>
                <div class="col-lg-4">
                    <label for="sel1">Password : </label>
                      <input type="text" class="form-control" name="password_pegawai" id="password_pegawai" required>
                    </br>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                    <label for="sel1">Alamat : </label>
                      <input type="text" class="form-control" name="alamat_pegawai" required>
                    </br>
                </div>
                <div class="col-lg-4">
                  <label for="sel1">Tempat Lahir : </label>
                    <input type="text" class="form-control" name="tempat_lahir_pegawai" required>
                  </br>
                </div>
                <div class="col-lg-4">
                  <label for="sel1">Tanggal Lahir (ex : 1945-08-17) : </label>
                    <input data-provide="datepicker" type="text" class="form-control" name="tanggal_lahir_pegawai" required>
                  </br>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <label for="sel1">No. Handphone : </label>
                    <input type="text" class="form-control" name="no_handphone_pegawai" required>
                  </br>
                </div>
                <div class="col-lg-4">
                </div>
              </div>
            </div>
          </div>
         </div>
        <div class="modal-footer">
            <button class="btn btn-success" type="submit" name="submit">Tambah Data Pegawai</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="editDataPegawai" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div id="edit"></div>
          <?php
            // include_once "halaman_administrator_edit_pegawai.php"
          ?>
        </div>
    </div>
</div>

<div id="deleteDataPegawai" class="modal fade">
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

<script type="text/javascript">
  $("#nip_pegawai").keyup(function(){
    $("#username_pegawai").val(this.value);
    $("#password_pegawai").val(this.value.slice(0, 5));
  });
</script>

</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
