<?php
include_once "backend/koneksi.php";
$id_kelas_transaksi = $_GET['id_kelas_transaksi'];
$query = mysqli_query($connect, "select * from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

 ?>

 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tampil Data Kelas</h4>
    </div>
    <div class="modal-body">

      <form class="form-signin" action="Detail. Kosong" method="post">

<div class="row">
  <div class="col-lg-12">
                <input type="hidden" class="form-control" name="id_kelas_transaksi" value="<?php echo $tampil["id_kelas_transaksi"] ?>" readonly>
              </br>
              <div class="row">
                   <div class="col-lg-12">
                        <label for="sel1">Nama Kelas </label>
                        <br>
                          <?php
                            $no=1;
                            $tampilDataJabatan = "select * from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi'";
                            $tampil = mysqli_query($connect, $tampilDataJabatan);
                            $row=mysqli_fetch_array($tampil);
                            ?>
                          <input type="text" class="form-control" value="<?php echo $row["nama_kelas_transaksi"] ?>" readonly/>
                        <br>
                   </div>
                   <div class="col-lg-12">
                       <label for="sel1">Wali Kelas </label>
                       <br>
                         <input type="text" class="form-control" value="<?php echo $row["wali_kelas_transaksi"] ?>" readonly/>
                       <br>
                   </div>
              </div>
  </div>
</div>

      </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
    </div>
