<?php
include_once "backend/koneksi.php";
$id_mata_pelajaran_transaksi                = $_GET['id_mata_pelajaran_transaksi'];
$id_mata_pelajaran_mata_pelajaran_transaksi = $_GET['id_mata_pelajaran_mata_pelajaran_transaksi'];
$id_kelas_daftar                            = $_GET['id_kelas_daftar'];
$nip_pegawai                                = $_GET['nip_pegawai'];
 ?>
<html>
<head>
</head>
<body>
 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Data Pengampu Mata Pelajaran</h4>
    </div>

<form class="form-signin" action="backend/administrator_delete_pengampu_mata_pelajaran.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <input type="hidden" class="form-control" name="id_mata_pelajaran_transaksi" value="<?php echo $id_mata_pelajaran_transaksi ?>" readonly>
                <input type="hidden" class="form-control" name="id_mata_pelajaran_mata_pelajaran_transaksi" value="<?php echo $id_mata_pelajaran_mata_pelajaran_transaksi ?>" readonly>
                <input type="hidden" class="form-control" name="id_kelas_daftar" value="<?php echo $id_kelas_daftar ?>" readonly>
                <input type="hidden" class="form-control" name="nip_pegawai" value="<?php echo $nip_pegawai ?>" readonly>
                <?php
                $deleteAtasNama = "SELECT * from mata_pelajaran_transaksi inner join data_pegawai on mata_pelajaran_transaksi.nip_pegawai_mata_pelajaran_transaksi = data_pegawai.nip_pegawai where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";
                $query = mysqli_query($connect, $deleteAtasNama);
                while($result=mysqli_fetch_array($query)){
                ?>
                <p>Kelas : <b style="font-size:17px;"><?php echo $result["nama_kelas_mata_pelajaran_transaksi"]  ?></b> </p>
                <p>Apakah Anda Ingin Menghapus Data Pengampu Mata Pelajaran <b style="font-size:17px;"><?php echo $result["nama_mata_pelajaran_transaksi"]  ?></b> dengan Guru Pengampu : <b style="font-size:17px;"><?php echo $result["nama_pegawai"]  ?></b> ? </p>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="submit">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                </div>
</form>

</body>
</html>
