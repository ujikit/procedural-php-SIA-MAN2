<?php
include_once "backend/koneksi.php";
$id_nilai_siswa_transaksi = $_GET['id_nilai_siswa_transaksi'];
$query = mysqli_query($connect, "SELECT * from nilai_siswa_transaksi inner join data_siswa on nilai_siswa_transaksi.nis_siswa_nilai_siswa_transaksi = data_siswa.nis_siswa where id_nilai_siswa_transaksi='$id_nilai_siswa_transaksi'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

if($_SESSION['nip_pegawai']){
?>

 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tampil Nilai Siswa</h4>
    </div>
    <div class="modal-body">

      <form class="form-signin" action="asd.php" method="post">

        <div class="row">
          <div class="col-lg-12">
                      </br>

                      <div class="row" style="background:#66ff66">
                      <div class="col-lg-4">
                      </div>
                      <div class="col-lg-4">

                        <img  src="frontend/img/foto/siswa/<?php echo $tampil['nisn_siswa']; ?>" class="img-circle" style="margin-left:20px;width:130px;">
                       </br>

                      </div>

                      <div class="col-lg-4">
                      </div>
                      </div>

                      <div class="row" style="margin-top:15px;">
                      <div class="col-lg-3">
                          <label for="sel1" style="margin-left:35px;">Tugas 1</label>
                            <input type="text" class="form-control" name="tugas1_siswa" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["tugas1_nilai_siswa_transaksi"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-3">
                          <label for="sel1" style="margin-left:35px;">UTS</label>
                            <input type="text" class="form-control" name="uts_siswa" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["uts_nilai_siswa_transaksi"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-3">
                          <label for="sel1" style="margin-left:35px;">Tugas 2</label>
                            <input type="text" class="form-control" name="tugas2_siswa" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["tugas2_nilai_siswa_transaksi"] ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-3">
                          <label for="sel1" style="margin-left:35px;">UAS</label>
                            <input type="text" class="form-control" name="uas_siswa" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["uas_nilai_siswa_transaksi"] ?>" readonly>
                          </br>
                      </div>
                      </div>
                      <br>

            </div>
          </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
    </div>
  </form>
  <?php
  }
  else {
   header("location:login_guru_atau_bk.php");
  } ?>
