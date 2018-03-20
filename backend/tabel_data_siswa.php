
<!--Untuk mencari nama siswa pada pesan menggunakan ajax dropdown autocomplete-->
<?php
include_once "koneksi.php";
  $datas = array();
	$sql = mysqli_query($connect, "SELECT * from data_siswa");
  while($row=mysqli_fetch_array($sql)){
    $datas[] = $row;
  }

  $json_format = json_encode($datas, JSON_PRETTY_PRINT);
  $json_dataSiswa = json_decode($json_format, true);
print_r ($json_format);

?>
