<?php
include_once "koneksi.php";
$nis_siswa = $_POST['nis_siswa'];

$queryDelete = "SELECT * from data_siswa where nis_siswa='$nis_siswa'";
$tampil = mysqli_query($connect, $queryDelete);
$row = mysqli_fetch_array($tampil);

  $hapus_foto   = "../frontend/img/foto/siswa/".$nis_siswa;
  $deleteSiswa  = "DELETE from data_siswa where nis_siswa='$nis_siswa';";
  $deleteSiswa .= "DELETE from pembayaran where nis_siswa_pembayaran='$nis_siswa';";
  $deleteSiswa .= "DELETE from data_wali where nis_siswa_wali='$nis_siswa';";
  $deleteSiswa .= "DELETE from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa';";
  $deleteSiswa .= "DELETE from nilai_siswa_transaksi_smt2_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa'";

if (mysqli_multi_query($connect, $deleteSiswa)) {

  unlink($hapus_foto);
  header('location:../halaman_administrator_daftar_siswa.php');
  if (file_exists($hapus_foto)) {
  }
  else {
    echo "File Foto Tidak Ditemukan";
  }
}
else {
  echo "Gagal Hapus Data Siswa";
}
?>
