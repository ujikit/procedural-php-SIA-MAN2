<?php
include_once "backend/koneksi.php";

$id_pesan = $_GET['id_pesan'];
$query_cekPesan = "UPDATE pesan set cek_pesan='Y' where id_pesan='$id_pesan'";
if (mysqli_query($connect, $query_cekPesan)) {

  $query = mysqli_query($connect, "SELECT * from pesan inner join data_pegawai on pesan.pengirim_pesan = data_pegawai.nip_pegawai where id_pesan='$id_pesan'");
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
           <h4 class="modal-title">Tampil Pesan</h4>
       </div>
    <form class="form-signin" action="#" method="post" enctype="multipart/form-data">
     <div class="modal-body">

         <div class="row">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-12">

                 <div class="row">
                 <div class="col-lg-4">
                 </div>
                 <div class="col-lg-4">
                   <img  src="frontend/img/foto/pegawai/<?php echo $tampil['nip_pegawai']; ?>" class="img-circle" style="margin-left:25px;width:130px;">
                  </br>
                 </div>
                 <div class="col-lg-4">
                 </div>
                 </div>

                 <label for="sel1">Pengirim Pesan : </label>
                 <input type="hidden" name="pengirim_pesan" value="<?php echo $nama_siswa ?>">
                 <input type="text" class="form-control" name="pengirim_pesan" autocomplete="off" value="<?php echo $nama_pegawai ?>" readonly>
               </div>
               <div class="col-lg-12"><br>
                 <label for="sel1">Judul Pesan : </label>
                 <input type="text" class="form-control" name="judul_pesan" autocomplete="off" value="<?php echo $tampil['judul_pesan'] ?>" readonly>
               </div>
               <div class="col-lg-12"><br>
                 <label for="sel1">Isi Pesan : </label><br>
                 <textarea class="form-control" name="isi_pesan" rows="8" cols="30" autocomplete="off" readonly><?php echo $tampil['isi_pesan'] ?></textarea>
               </div>
             </div>
             </div>
           </div>

       </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
           <a type="button" class="btn btn-success" href="javascript:kirimPesanSiswaKePegawai('<?php echo $tampil['id_pesan'] ?>')" >Balas</a>
       </div>
     </form>



  </body>
</html>

<?php
}
else {
echo "Error Menampilkan Pesan";
}
?>
