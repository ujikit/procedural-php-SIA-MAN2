<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "backend/koneksi.php";
$id_pesan = $_GET['id_pesan'];
$query = mysqli_query($connect, "SELECT * from pesan where id_pesan='$id_pesan'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);
$nip_pegawai = $tampil['pengirim_pesan'];

$query2 = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
$tampil2 = mysqli_fetch_array($query2);
$nama_pegawai = $tampil2['nama_pegawai'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- <div id="tampilDataPegawai" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content"> -->
       <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Balas Pesan</h4>
       </div>
    <form class="form-signin" action="backend/siswa_kirim_pesan_pegawai.php" method="post" enctype="multipart/form-data">
     <div class="modal-body">

         <div class="row">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-12">
                 <label for="sel1">Kirim Pesan ke : </label>
                 <input type="hidden" name="pengirim_pesan" value="<?php echo $tampil['penerima_pesan'] ?>">
                 <input type="hidden" name="waktu_pesan" value="<?php echo date("Y-m-d H:i:s") ?>">
                 <input type="hidden" name="penerima_pesan" value="<?php echo $nip_pegawai ?>">
                 <input type="text" class="form-control" value="<?php echo $nama_pegawai ?>" autocomplete="off" readonly>
               </div>
               <div class="col-lg-12"><br>
                 <label for="sel1">Judul Pesan : </label>
                 <input type="text" class="form-control" name="judul_pesan" autocomplete="off">
               </div>
               <div class="col-lg-12"><br>
                 <label for="sel1">Isi Pesan : </label><br>
                 <textarea class="form-control" name="isi_pesan" rows="8" cols="30" autocomplete="off"></textarea>
               </div>
             </div>
             </div>
           </div>

       </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
           <button class="btn btn-success" type="submit" name="submit">Kirim</button>
       </div>
     </form>



  </body>
</html>
