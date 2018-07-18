<?php
include_once "koneksi.php";

$kd_kelas_daftar             = $_POST['kd_kelas_daftar'];
$kd_mata_pelajaran           = $_POST['kd_mata_pelajaran'];
$nip_pegawai                 = $_POST['nip_pegawai'];

echo $kd_kelas_daftar."</br>";
echo $kd_mata_pelajaran."</br>";
echo $nip_pegawai."</br>";

$query_update     = "UPDATE mata_pelajaran_transaksi set kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar', kd_mata_pelajaran_transaksi='$kd_mata_pelajaran', nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai' where kd_mata_pelajaran_transaksi='$kd_mata_pelajaran';";
//smt1
$query_update    .= "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai' where kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan='$kd_kelas_daftar' && kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$kd_mata_pelajaran';";
//smt2
$query_update    .= "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan='$nip_pegawai' where kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan='$kd_kelas_daftar' && kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$kd_mata_pelajaran'";


if (mysqli_multi_query($connect, $query_update)){
header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
}
else {
echo "error";
}

?>
