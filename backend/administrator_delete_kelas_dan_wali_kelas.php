<?php
include_once "koneksi.php";
$kd_kelas_daftar = $_POST['kd_kelas_daftar_kelas_transaksi'];

$query_hapus_kelas  = "DELETE from kelas_transaksi            where kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar';";
$query_hapus_kelas .= "DELETE from mata_pelajaran_transaksi   where kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar';";
$query_hapus_kelas .= "DELETE from guru_kompetensi_dasar_smt1 where guru_kompetensi_dasar_kelas_daftar_smt1='$kd_kelas_daftar';";
$query_hapus_kelas .= "DELETE from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_kelas_daftar_smt2='$kd_kelas_daftar'";

if (mysqli_multi_query($connect, $query_hapus_kelas)){
  header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
}
else {
  echo "error delete kelas";
}

echo $kd_kelas_daftar;
 ?>
