<?php
include_once "backend/koneksi.php";
$id_pembayaran = $_GET['id_pembayaran'];
$query1     = mysqli_query($connect, "SELECT * FROM pembayaran WHERE id_pembayaran ='$id_pembayaran'");
$tampil1    = mysqli_fetch_array($query1);
$nis_siswa  = $tampil1["nis_siswa_pembayaran"];

$query2 = mysqli_query($connect, "SELECT * from data_siswa WHERE nis_siswa='$nis_siswa'");
$tampil2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);

 ?>

  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Tampil Data Siswa</h4>
  </div>
  <div class="modal-body">
    <form class="form-signin" action="Detail. Kosong" method="post">
      <div class="row">
        <div class="col-lg-12" style="background:#66ff66">
          <img  src="frontend/img/foto/siswa/<?php echo $nis_siswa; ?>" class="img-circle" style="margin-left:100px;width:70px;">
        </div>
        <div class="col-lg-12"><br>
          <label for="sel1">Nama Siswa : </label>
          <input type="text" class="form-control" value="<?php echo $tampil2["nama_siswa"] ?>" readonly><br>
          <label for="sel1">Terakhir Bayar / Cicil : </label>
          <input type="text" class="form-control" value="<?php echo $tampil1["tanggal_terakhir_pembayaran"] ?>" readonly>
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
  </div>
