<?php
include_once "backend/koneksi.php";
$id_kelas_transaksi = $_GET['id_kelas_transaksi'];
$query = mysqli_query($connect, "select * from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi'");
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
                <input type="hidden" class="form-control" name="id_kelas_transaksi" value="<?php echo $tampil["id_kelas_transaksi"] ?>" readonly>
              <div class="col-lg-12">
              <label for="sel1">Nama Kelas : </label>
                  <select class="form-control" name="nama_kelas_transaksi">
                    <?php
                      $tampilDataKelas = "select * from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi'";
                      $tampil = mysqli_query($connect, $tampilDataKelas);
                      $row=mysqli_fetch_array($tampil);
                    ?>
                    <option value="<?php echo $row["nama_kelas_transaksi"] ?>"><?php echo $row["nama_kelas_transaksi"] ?></option>
                    <?php
                      $no=1;
                      $tampilDataJabatan = "select * from kelas_daftar";
                      $tampil = mysqli_query($connect, $tampilDataJabatan);
                      while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <option value="<?php echo $row["nama_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                    <?php  } ?>
                  </select>
                </div>
                  <div class="col-lg-12">
                  <label for="sel1">Wali Kelas : </label>
                      <select class="form-control" name="wali_kelas_transaksi">
                        <?php
                          $no=1;
                          $tampilDataKelas = "select * from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi'";
                          $tampil = mysqli_query($connect, $tampilDataKelas);
                          $row=mysqli_fetch_array($tampil);
                        ?>
                        <option value="<?php echo $row["wali_kelas_transaksi"] ?>"><?php echo $row["wali_kelas_transaksi"] ?></option>
                        <?php
                          $no=1;
                          $tampilDataJabatan = "select * from data_pegawai";
                          $tampil = mysqli_query($connect, $tampilDataJabatan);
                          while($row=mysqli_fetch_array($tampil)){
                        ?>
                        <option value="<?php echo $row["nama_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
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
