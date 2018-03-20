<?php
include_once "backend/koneksi.php";
$id_mata_pelajaran_transaksi = $_GET['id_mata_pelajaran_transaksi'];
$query = mysqli_query($connect, "select * from mata_pelajaran_transaksi where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);
$nip_pegawai = $tampil["nip_pegawai_mata_pelajaran_transaksi"];

 ?>

 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tampil Data Pengampu Mata Pelajaran</h4>
    </div>
    <div class="modal-body">

      <form class="form-signin" action="Detail. Kosong" method="post">

<div class="row">
  <div class="col-lg-12">
                <input type="hidden" class="form-control" name="id_mata_pelajaran_transaksi" value="<?php echo $tampil["id_mata_pelajaran_transaksi"] ?>" readonly>
              </br>
              <div class="row" style="margin-top:15px;">
                   <div class="col-lg-12">
                        <label for="sel1">Nama Kelas </label>
                        <br>
                          <input type="text" class="form-control" value="<?php echo $tampil["nama_kelas_mata_pelajaran_transaksi"] ?>" readonly/>
                        <br>
                   </div>
                   <div class="col-lg-12">
                       <label for="sel1">Nama Mata Pelajaran </label>
                       <br>
                         <input type="text" class="form-control" value="<?php echo $tampil["nama_mata_pelajaran_transaksi"] ?>" readonly/>
                       <br>
                   </div>
                   <?php
                   $tampilNamaGuru = mysqli_query($connect, "SELECT nama_pegawai from data_pegawai where nip_pegawai='$nip_pegawai'");
                   $tampil2 = mysqli_fetch_array($tampilNamaGuru);
                   ?>
                   <div class="col-lg-12">
                       <label for="sel1">Nama Guru Pengampu </label>
                       <br>
                         <input type="text" class="form-control" value="<?php echo $tampil2["nama_pegawai"] ?>" readonly/>
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
