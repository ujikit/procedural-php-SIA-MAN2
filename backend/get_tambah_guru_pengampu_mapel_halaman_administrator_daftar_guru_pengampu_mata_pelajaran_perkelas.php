<?php
include_once "koneksi.php";
if(isset($_POST['get_option'])){

 $state = addslashes($_POST['get_option']);
 $find=mysqli_query($connect, "SELECT * from mata_pelajaran where kd_mata_pelajaran='$state'");
 $row1 = mysqli_fetch_array($find);
 $kd_mata_pelajaran = $row1['kd_mata_pelajaran'];

 $find2 = mysqli_query($connect, "SELECT * from data_pegawai where kd_mata_pelajaran_pegawai='$kd_mata_pelajaran'");
 // $row2 = mysqli_fetch_array($find2);
 // $nama_pegawai = $row2['nama_pegawai'];

if ($find2 == true) {
   echo "<option>Pilih Guru Pengampu : </option>";
  while($row2=mysqli_fetch_array($find2)){
   echo "<option value=".$row2['nip_pegawai'].">".$row2['nama_pegawai']."</option>";
  }
}
else {
  echo "<option>Guru Tidak Ada</option>";
}
 exit;
}
?>
