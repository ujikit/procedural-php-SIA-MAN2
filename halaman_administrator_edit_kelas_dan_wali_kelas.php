<?php
include_once "backend/koneksi.php";
$kd_kelas_daftar_kelas_transaksi = $_GET['kd_kelas_daftar_kelas_transaksi'];
$query = mysqli_query($connect, "SELECT * from kelas_transaksi where kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar_kelas_transaksi'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

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
      <h4 class="modal-title">Edit Data Kelas</h4>
  </div>

  <form class="form-signin" action="backend/administrator_edit_kelas_dan_wali_kelas.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
          <div class="row">
            <input type="hidden" class="form-control" name="kd_kelas_daftar_kelas_transaksi" value="<?php echo $tampil["kd_kelas_daftar_kelas_transaksi"] ?>" readonly>
            <div class="col-lg-12">
            <label for="sel1">Nama Kelas : </label>
            <?php
              $tampilDataKelas = "SELECT * from kelas_transaksi inner join kelas_daftar on kelas_transaksi.kd_kelas_daftar_kelas_transaksi = kelas_daftar.kd_kelas_daftar where kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar_kelas_transaksi'";
              $tampil = mysqli_query($connect, $tampilDataKelas);
              $row=mysqli_fetch_array($tampil);
            ?>
            <input type="text" class="form-control" name="" value="<?php echo $row["nama_kelas_daftar"] ?>" readonly>
                <!-- <select class="form-control" name="kd_kelas_daftar_kelas_transaksi">
                  <?php
                    $tampilDataKelas = "SELECT * from kelas_transaksi inner join kelas_daftar on kelas_transaksi.kd_kelas_daftar_kelas_transaksi = kelas_daftar.kd_kelas_daftar where kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar_kelas_transaksi'";
                    $tampil = mysqli_query($connect, $tampilDataKelas);
                    $row=mysqli_fetch_array($tampil);
                  ?>
                  <option value="<?php echo $row["kd_kelas_daftar_kelas_transaksi"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                  <?php
                    $no=1;
                    $tampilDataJabatan = "SELECT * from kelas_daftar";
                    $tampil = mysqli_query($connect, $tampilDataJabatan);
                    while($row=mysqli_fetch_array($tampil)){
                  ?>
                  <option value="<?php echo $row["kd_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                  <?php  } ?>
                </select> -->
              </div>
                <div class="col-lg-12">
                <label for="sel1">Wali Kelas : </label>
                    <select class="form-control" name="nip_pegawai_wali_kelas_transaksi">
                      <?php
                        $no=1;
                        $tampilDataKelas = "SELECT * from kelas_transaksi inner join data_pegawai on kelas_transaksi.nip_pegawai_wali_kelas_transaksi = data_pegawai.nip_pegawai where kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar_kelas_transaksi'";
                        $tampil = mysqli_query($connect, $tampilDataKelas);
                        $row=mysqli_fetch_array($tampil);
                      ?>
                      <option value="<?php echo $row["nip_pegawai_wali_kelas_transaksi"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                      <?php
                        $no=1;
                        $tampilDataJabatan = "SELECT * from data_pegawai where nama_pegawai !='Administrator'";
                        $tampil = mysqli_query($connect, $tampilDataJabatan);
                        while($row=mysqli_fetch_array($tampil)){
                      ?>
                      <option value="<?php echo $row["nip_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                      <?php  } ?>
                    </select>
                </div>
          </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-success" type="submit" name="submit">Ubah Data Kelas</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
  </form>

<script type="text/javascript">
$(document).ready(function(){
  loadDataKelasDanWaliKelas();
  $('form').on('submit',function(e){
    e.preventDefault();
    $.ajax({
      type:$(this).attr('method'),
      url:$(this).attr('action'),
      data:$(this).serialize(),
      success:function(){
        loadDataKelasDanWaliKelas();
        $("#editKelas").modal('hide');
        swal(
          'Berhasil!',
          'Data Berhasil di Ubah.',
          'success'
        )
      }
    })
  })
})
</script>

</body>
</html>
