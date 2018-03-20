<?php
include_once "koneksi.php";
$datas = array();
$query = mysqli_query($connect, "SELECT * from data_siswa");
while($result = mysqli_fetch_array($query)){
  $datas[] = $result;
  // $json_decode = json_decode($json_encode, true);

  // print_r($json_encode);
}

$json_format = json_encode($datas, JSON_PRETTY_PRINT);
// $json_dataSiswa = json_decode($json_format, true);
print_r ($json_format);



?>
