<?php
include_once "koneksi.php";

// $id_kelas_daftar      = str_replace(' ','',$_POST['kd_kelas_daftar_kelas_transaksi']);//untuk mengilangkan semua spasi di STRING
$kd_kelas_daftar_kelas_transaksi  = $_POST['kd_kelas_daftar_kelas_transaksi'];
$nip_pegawai_wali_kelas_transaksi = $_POST['nip_pegawai_wali_kelas_transaksi'];

// echo $kd_kelas_daftar_kelas_transaksi;
// echo $nip_pegawai_wali_kelas_transaksi;

$query_tambah_kelas = "INSERT INTO kelas_transaksi (kd_kelas_daftar_kelas_transaksi, nip_pegawai_wali_kelas_transaksi) VALUES ('$kd_kelas_daftar_kelas_transaksi', '$nip_pegawai_wali_kelas_transaksi')";
/*$query_tambah = "INSERT INTO jabatan_pegawai (id_jabatan, nama_jabatan,tanggal) VALUES ('sasd','asd','2016/09/09') ";*/
$run_query = mysqli_query($connect, "SELECT * from kelas_transaksi where kd_kelas_daftar_kelas_transaksi='$kd_kelas_daftar_kelas_transaksi' && nip_pegawai_wali_kelas_transaksi='$nip_pegawai_wali_kelas_transaksi'");

if (mysqli_num_rows($run_query)>0) {
  echo "Data sudah ada!";
}
else {
  if (mysqli_query($connect, $query_tambah_kelas)){
    header("location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php");
  }
  else {
  echo "Gagal Memasukan Data!";
  }
}


?>
