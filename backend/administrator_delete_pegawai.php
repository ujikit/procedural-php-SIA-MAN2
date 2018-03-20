<?php
include_once "koneksi.php";
$id_pegawai = $_POST['id_pegawai'];
$nip_pegawai = $_POST['nip_pegawai'];

$queryDeleteFoto = "SELECT * from data_pegawai where id_pegawai='$id_pegawai'";
$tampil = mysqli_query($connect, $queryDeleteFoto);
$row = mysqli_fetch_array($tampil);

$hapus = $row['nip_pegawai'];
$hapus_foto = "../frontend/img/foto/pegawai/".$hapus;

if (mysqli_query($connect, $queryDeleteFoto)) {

  $query_hapus_pegawai = mysqli_query($connect, "DELETE from data_pegawai where id_pegawai='$id_pegawai'");
  $query_hapus_pegawai = mysqli_query($connect, "DELETE from mata_pelajaran_transaksi where nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai'");
  $query_hapus_pegawai = mysqli_query($connect, "DELETE from guru_kompetensi_dasar_smt1 where guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai'");
  $query_hapus_pegawai = mysqli_query($connect, "DELETE from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai'");
  unlink($hapus_foto);
  header('location:../halaman_administrator_daftar_pegawai.php');

}
else {

  echo "File Foto Tidak Ditemukan";

}

 ?>
