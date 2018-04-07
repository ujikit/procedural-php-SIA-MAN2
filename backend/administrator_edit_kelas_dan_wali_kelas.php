<?php
include_once "koneksi.php";

$kd_kelas_daftar_kelas_transaksi   = $_POST['kd_kelas_daftar_kelas_transaksi'];
$nip_pegawai_wali_kelas_transaksi  = $_POST['nip_pegawai_wali_kelas_transaksi'];

echo $kd_kelas_daftar_kelas_transaksi;
echo $nip_pegawai_wali_kelas_transaksi;

$query_update = "UPDATE kelas_transaksi set kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar_kelas_transaksi', nip_pegawai_wali_kelas_transaksi='$nip_pegawai_wali_kelas_transaksi' where kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar_kelas_transaksi'";

if (mysqli_query($connect, $query_update)){

header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
}
else {
echo "error";
}

?>
