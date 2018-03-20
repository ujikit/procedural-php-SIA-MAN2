<?php
error_reporting(0);
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";

if($_SESSION['nip_pegawai']){
$id_kelas_daftar = $_GET["id_kelas_daftar"];
$id_mata_pelajaran = $_GET["id_mata_pelajaran_mata_pelajaran_transaksi"];
$nip_pegawai = $_GET["nip_pegawai_mata_pelajaran_transaksi"];

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

    <?php
    $query_cetakLaporan = "SELECT id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan from nilai_siswa_transaksi_smt1_pengetahuan where nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
    $tampil = mysqli_query($connect, $query_cetakLaporan);
    $row = mysqli_fetch_array($tampil);
    $id_mata_pelajaran_nilai_siswa_transaksi = $row['id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan'];
    ?>

    <div class="row" style="margin-bottom:-75px;margin-top:40px;">

      <div class="row" style="margin-top:20px;">
        <div class="col-lg-12">
          <div class="container">
            <div class="col-lg-12">

              <div class="table-responsive" style="background-color:#fff; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
                  <thead style="background:#e6e6e6">
                    <tr>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:3%"><?php echo "No."; ?></th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:7%"><?php echo "Nama Siswa"; ?></th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:7%"><?php echo "Action"; ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                      $no=1;
                      $query_tampilDataKelas = "SELECT * from kelas_daftar where id_kelas_daftar='$id_kelas_daftar'";
                      $query2 = mysqli_query($connect, $query_tampilDataKelas);
                      $row2 = mysqli_fetch_array($query2);
                      $query_tampilDataKD = "SELECT * from data_siswa where id_kelas_daftar='$id_kelas_daftar' order by nis_siswa asc";
                      $query = mysqli_query($connect, $query_tampilDataKD);
                      while($row = mysqli_fetch_array($query)){
                      ?>
                        <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++.'.' ?>
                        </td>
                        <td style="border-radius:0px;margin:0 auto;text-align:left;position:relative;float:center">
                          <?php echo $row['nama_siswa'] ?>
                          </td>
                        <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                          <a type="button" class="btn btn-primary" href="javascript:editSiswa('<?php echo $row['nis_siswa'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Biodata Siswa</a>
                          <a onclick="window.open('halaman_guru_daftar_wali_kelas_nilai_cetak_1identitas_siswa.php?nis_siswa=<?php echo $row['nis_siswa'] ?>&id_kelas_daftar=<?php echo $id_kelas_daftar ?>');window.open('halaman_guru_daftar_wali_kelas_nilai_cetak_2nilai_siswa.php?nis_siswa=<?php echo $row['nis_siswa'] ?>&id_kelas_daftar=<?php echo $id_kelas_daftar ?>&kelompok_kelas_daftar=<?php echo $row2['kelompok_kelas_daftar'] ?>&kelas_daftar_kelas=<?php echo $row2['kelas_daftar_kelas'] ?>&semester_angka=<?php echo "1" ?>&semester_huruf=<?php echo "Ganjil" ?>');window.open('halaman_guru_daftar_wali_kelas_nilai_cetak_2nilai_siswa.php?nis_siswa=<?php echo $row['nis_siswa'] ?>&id_kelas_daftar=<?php echo $id_kelas_daftar ?>&kelompok_kelas_daftar=<?php echo $row2['kelompok_kelas_daftar'] ?>&kelas_daftar_kelas=<?php echo $row2['kelas_daftar_kelas'] ?>&semester_angka=<?php echo "2" ?>&semester_huruf=<?php echo "Genap" ?>');" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print Raport</a>
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
      </div>

    <div class="control-sidebar-bg"></div>
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



  <script type="text/javascript">
    $(document).ready(function(data){

      // Semester 1
      $('#peng1').on('click',function(){
      $('#pengetahuan1').html($('#static').html()).show().siblings('div').hide();
      });
      $('#ket1').on('click',function(){
      $('#keterampilan1').html($('#static').html()).show().siblings('div').hide();
      });
      $('#spir1').on('click',function(){
      $('#spiritual1').html($('#static').html()).show().siblings('div').hide();
      });
      $('#sos1').on('click',function(){
      $('#sosial1').html($('#static').html()).show().siblings('div').hide();
      });
      // Semester 2
      $('#peng2').on('click',function(){
      $('#pengetahuan2').html($('#static').html()).show().siblings('div').hide();
      });
      $('#ket2').on('click',function(){
      $('#keterampilan2').html($('#static').html()).show().siblings('div').hide();
      });
      $('#spir2').on('click',function(){
      $('#spiritual2').html($('#static').html()).show().siblings('div').hide();
      });
      $('#sos2').on('click',function(){
      $('#sosial2').html($('#static').html()).show().siblings('div').hide();
      });

    })
  </script>

</body>
</html>

<?php } else {
  header("location:index.php");
}
 ?>
