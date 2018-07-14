<?php
include_once "backend/koneksi.php";
$id_pembayaran = $_GET['id_pembayaran'];
$query1                 = mysqli_query($connect, "SELECT * FROM pembayaran INNER JOIN pembayaran_daftar on pembayaran.kd_pembayaran = pembayaran_daftar.kd_pembayaran_daftar WHERE id_pembayaran ='$id_pembayaran'");
$tampil1                = mysqli_fetch_array($query1);
$nis_siswa              = $tampil1["nis_siswa_pembayaran"];
$kekurangan_pembayaran  = $tampil1["kekurangan_pembayaran"];
$cicil_total_pembayaran = $tampil1["cicil_total_pembayaran"];

$query2 = mysqli_query($connect, "SELECT * from data_siswa WHERE nis_siswa='$nis_siswa'");
$tampil2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);

 ?>

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Tampil Data Siswa</h4>
    </div>
    <form class="" action="backend/administrator_edit_pembayaran_siswa.php" method="post">
    <div class="modal-body">
        <div class="row">
          <div class="col-lg-12" style="background:#66ff66">
            <img  src="frontend/img/foto/siswa/<?php echo $nis_siswa; ?>" class="img-circle" style="margin-left:100px;width:70px;">
          </div>
          <div class="col-lg-12"><br>
            <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran ?>" readonly>
            <input type="hidden" name="cicil_total_pembayaran" value="<?php echo $cicil_total_pembayaran ?>" readonly>
            <label for="sel1">Nama Siswa : </label>
            <input type="text" class="form-control" value="<?php echo $tampil2["nama_siswa"] ?>" readonly><br>
            <label for="sel1">Nama Pembayaran : </label>
            <input type="text" class="form-control" value="<?php echo $tampil1["nama_pembayaran_daftar"] ?>" readonly><br>
            <label for="sel1">Kekurangan : </label>
            <input type="text" class="form-control" name="kekurangan_pembayaran" value="<?php echo $tampil1["kekurangan_pembayaran"] ?>" style="background:#ffcccc" readonly><br>
            <label for="sel1">Bayar</label>
            <input type="text" class="form-control" name="bayar_pembayaran" id="bayar_pembayaran">
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" name="submit">Proses</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
    </div>
  </form>

  <script type="text/javascript">
  /* Tanpa Rupiah */
  var tanpa_rupiah = document.getElementById('bayar_pembayaran');
  tanpa_rupiah.addEventListener('keyup', function(e){
    tanpa_rupiah.value = formatRupiah(this.value);
  });

  tanpa_rupiah.addEventListener('keydown', function(event){
    limitCharacter(event);
  });
  /* Fungsi */
  function formatRupiah(bilangan, prefix){
    var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
      split	= number_string.split(','),
      sisa 	= split[0].length % 3,
      rupiah 	= split[0].substr(0, sisa),
      ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
    if (ribuan){
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
  </script>
