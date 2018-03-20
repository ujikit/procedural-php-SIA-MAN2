<?php
include_once "koneksi.php";

$id_kelas_daftar      = str_replace(' ','',$_POST['nama_kelas_transaksi']);
$id_kelas_transaksi = $_POST['id_kelas_transaksi'];
$nama_kelas_transaksi = $_POST['nama_kelas_transaksi'];
$wali_kelas_transaksi = $_POST['wali_kelas_transaksi'];

$query_update = "UPDATE kelas_transaksi set id_kelas_daftar='$id_kelas_daftar', nama_kelas_transaksi='$nama_kelas_transaksi', wali_kelas_transaksi='$wali_kelas_transaksi' where id_kelas_transaksi='$id_kelas_transaksi'";

if (mysqli_query($connect, $query_update)){

header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
}
else {
echo "error";
}

?>
