<?php
include_once "koneksi.php";
$id_kelas_transaksi = $_POST['id_kelas_transaksi'];
$id_kelas_daftar = $_POST['id_kelas_daftar'];
$query_hapus_kelas  = "DELETE from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi' && id_kelas_daftar='$id_kelas_daftar';";
$query_hapus_kelas .= "DELETE from mata_pelajaran_transaksi where id_kelas_daftar='$id_kelas_daftar';";
$query_hapus_kelas .= "DELETE from guru_kompetensi_dasar_smt1 where guru_kompetensi_dasar_kelas_daftar_smt1='$id_kelas_daftar';";
$query_hapus_kelas .= "DELETE from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar'";

if (mysqli_multi_query($connect, $query_hapus_kelas)){
header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
}
else {
echo "error delete kelas";
}

// echo $id_kelas_transaksi;
// echo $id_kelas_daftar;
 ?>
