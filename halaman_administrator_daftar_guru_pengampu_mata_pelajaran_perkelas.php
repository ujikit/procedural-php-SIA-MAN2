<?php
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";
$kd_kelas_daftar = $_GET["kd_kelas_daftar_kelas_transaksi"];

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
		});

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
    function fetch_selectEdit(val){
     $.ajax({
       type: 'post',
       url: 'backend/get_tambah_guru_pengampu_mapel_halaman_administrator_daftar_guru_pengampu_mata_pelajaran_perkelas.php',
       data: {
        get_option:val
       },
       success: function (response) {
        document.getElementById("new_selectEdit").innerHTML=response;
       }
     });
    }
    function fetch_selectSegarkan(val){
     $.ajax({
       type: 'post',
       url: 'backend/get_tambah_guru_pengampu_mapel_halaman_administrator_daftar_guru_pengampu_mata_pelajaran_perkelas.php',
       data: {
        get_option:val
       },
       success: function (response) {
        document.getElementById("new_selectSegarkan").innerHTML=response;
       }
     });
    }
  </script>

  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li >Daftar Kelas & Wali Kelas</li>
      <li class="active">Lihat Guru Pengampu</li>
    </ol>
  </section>

  <div class="row">
    <div class="container">
      <div class="col-lg-12" style="margin-top:50px">
        <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahPengampuMataPelajaran" style="margin-right:10px"><i class="fa fa-plus"></i> Tambah Pengampu Mata Pelajaran</a>
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
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">No</th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Kelas</th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Mata Pelajaran</th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Guru Pengampu</th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Validitas Siswa <br>(Sudah Valid / Belum Valid)</th>
              <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no=1;
              $tampilDataPegawai = "SELECT * from mata_pelajaran_transaksi inner join data_pegawai on mata_pelajaran_transaksi.nip_pegawai_mata_pelajaran_transaksi = data_pegawai.nip_pegawai where kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar' order by kd_kelas_daftar_mata_pelajaran_transaksi asc";
              $tampil = mysqli_query($connect, $tampilDataPegawai);
              while($row=mysqli_fetch_array($tampil)){
                $kd_mata_pelajaran_transaksi              = $row["kd_mata_pelajaran_transaksi"];
                $kd_kelas_daftar_mata_pelajaran_transaksi = $row["kd_kelas_daftar_mata_pelajaran_transaksi"];
                $nip_pegawai                              = $row["nip_pegawai"];
                ?>
            <tr>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_kelas_daftar_mata_pelajaran_transaksi"] ?></td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_mata_pelajaran_transaksi"] ?></td>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_pegawai"] ?></td>
              <?php
              $query_tampilSiswaBelumValid = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan='$kd_kelas_daftar_mata_pelajaran_transaksi' && kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$kd_mata_pelajaran_transaksi' && nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan=''";
              $query = mysqli_query($connect, $query_tampilSiswaBelumValid);
              $mysqli_num_rows = mysqli_num_rows($query);
              if ($mysqli_num_rows == 1) {
              ?>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><span class="label label-danger" style="font-size:15px;">Belum Valid</span></td>
              <?php
              }
              else if ($mysqli_num_rows == 0){
              ?>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><span class="label label-success" style="font-size:15px;">Sudah Valid</span></td>
              <?php
              }
              else {
              ?>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><span class="label label-warning" style="font-size:15px;">Belum Ada Siswa</span></td>
              <?php
              }
              ?>
              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                <a type="button" class="btn btn-primary" href="javascript:editPengampuMataPelajaran('<?php echo $row['id_mata_pelajaran_transaksi'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                <a type="button" class="btn btn-danger" href="javascript:deletePengampuMataPelajaran('<?php echo $row['id_mata_pelajaran_transaksi'] ?>','<?php echo $kd_kelas_daftar ?>','<?php echo $row['id_mata_pelajaran_mata_pelajaran_transaksi']?>','<?php echo $row['nip_pegawai']?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                <a type="button" class="btn btn-success" href="javascript:segarkanPengampuMataPelajaran('<?php echo $row['id_mata_pelajaran_transaksi'] ?>')"><span class="glyphicon glyphicon-ok"></span></a>
                 <!-- <a type="button" id="segarkan" class="btn btn-success" href="backend/administrator_edit_pengampu_mata_pelajaran.php?id_mata_pelajaran_transaksi=<?php echo $row['id_mata_pelajaran_transaksi'] ?>"><span class="glyphicon glyphicon-ok"></span></a> -->
             </td>
            </tr>
            <?php  } ?>
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
                      <?php
                        $tampilDataKelas = "SELECT * from kelas_daftar where kd_kelas_daftar='$kd_kelas_daftar'";
                        $tampil = mysqli_query($connect, $tampilDataKelas);
                        $row=mysqli_fetch_array($tampil);
                      ?>
                      <input type="hidden" class="form-control" name="kd_kelas_daftar" value="<?php echo $row["kd_kelas_daftar"] ?>" readonly>
                      <input type="text" class="form-control" value="<?php echo $row["nama_kelas_daftar"] ?>" readonly>
                    </br>
                  </div>
                  <div class="col-lg-12">
                    <label for="sel1">Nama Mata Pelajaran : </label>
                    <select class="form-control" name="kd_mata_pelajaran" onchange="fetch_select(this.value);">
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
                    <select id="new_select" class="form-control" name="nip_pegawai" required>
                      <option value="">Belum Ada Guru Pengampu</option>
                    </select>
                    </br>
                  </div>
                  <div class="col-lg-12">
                    <label for="sel1">KKM Mata Pelajaran : </label>
                    <input type="text" class="form-control" name="kkm_rendah_mata_pelajaran_transaksi" required>
                    <!--<label for="sel1">ID Mata Pelajaran : </label>-->
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" type="submit" name="submit">Tambah Data</button>
        </div>
        </form>
        </div>
      </div>
    </div>

  <div id="detailPengampuMataPelajaran" class="modal fade">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div id="tampil"></div>
            <?php
              // include_once "halaman_administrator_detail_pegawai.php"
            ?>
          </div>
      </div>
  </div>

  <div id="editPengampuMataPelajaran" class="modal fade">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div id="edit"></div>
            <?php
              // include_once "halaman_administrator_edit_pegawai.php"
            ?>
          </div>
      </div>
  </div>

  <div id="deletePengampuMataPelajaran" class="modal fade">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div id="delete"></div>
            <?php
              // include_once "halaman_administrator_edit_pegawai.php"
            ?>
          </div>
      </div>
  </div>

  <div id="segarkanPengampuMataPelajaran" class="modal fade">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div id="segarkan"></div>
            <?php
              // include_once "halaman_administrator_edit_pegawai.php"
            ?>
          </div>
      </div>
  </div>

<script type="text/javascript">

  // $('#segarkan').click(function(e){
  //   var href = $(this).attr('href');
  //   swal({
  //     title : "Segarkan",
  //     type : "warning",
  //     showCancelButton : true,
  //     confirmButtonColor : "#DD6B55",
  //     confirmButtonText : "YA",
  //     cancelButtonText : "Tidak",
  //     closeOnConfirm : true,
  //     closeOnCancel : true
  //   },
  //     function (isConfirm){
  //       if (isConfirm){
  //         windows.location.href = href;
  //       }
  //     });
  //   return false;
  // });

</script>

</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
