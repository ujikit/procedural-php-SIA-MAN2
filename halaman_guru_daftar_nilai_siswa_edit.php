<?php
include_once "backend/koneksi.php";
$id_nilai_siswa_transaksi = $_GET['id_nilai_siswa_transaksi'];
$query = mysqli_query($connect, "SELECT * from nilai_siswa_transaksi inner join data_siswa on nilai_siswa_transaksi.nis_siswa_nilai_siswa_transaksi = data_siswa.nis_siswa where id_nilai_siswa_transaksi='$id_nilai_siswa_transaksi'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

if($_SESSION['nip_pegawai']){
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Kelas</h4>
    </div>

    <form class="form-signin" action="backend/guru_edit_nilai_siswa.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row" style="margin-top:15px;">
            <input type="hidden" class="form-control" name="id_nilai_siswa_transaksi" value="<?php echo $tampil["id_nilai_siswa_transaksi"] ?>">
          <div class="col-lg-3">
              <label for="sel1" style="margin-left:35px;">Tugas 1</label>
                <input type="text" class="form-control" name="tugas1_nilai_siswa_transaksi" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["tugas1_nilai_siswa_transaksi"] ?>">
              </br>
          </div>
          <div class="col-lg-3">
              <label for="sel1" style="margin-left:35px;">UTS</label>
                <input type="text" class="form-control" name="uts_nilai_siswa_transaksi" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["uts_nilai_siswa_transaksi"] ?>">
              </br>
          </div>
          <div class="col-lg-3">
              <label for="sel1" style="margin-left:35px;">Tugas 2</label>
                <input type="text" class="form-control" name="tugas2_nilai_siswa_transaksi" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["tugas2_nilai_siswa_transaksi"] ?>">
              </br>
          </div>
          <div class="col-lg-3">
              <label for="sel1" style="margin-left:35px;">UAS</label>
                <input type="text" class="form-control" name="uas_nilai_siswa_transaksi" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" value="<?php echo $tampil["uas_nilai_siswa_transaksi"] ?>">
              </br>
          </div>
          </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            <button class="btn btn-success" type="submit" name="submit">Ubah Data Kelas</button>
        </div>
    </form>


</body>
</html>
<?php
}
else {
 header("location:login_guru_atau_bk.php");
} ?>
