<?php
include_once "koneksi.php";

$id_kelas_daftar      = str_replace(' ','',$_POST['nama_kelas_transaksi']);//untuk mengilangkan semua spasi di STRING
$nama_kelas_transaksi = $_POST['nama_kelas_transaksi'];
$wali_kelas_transaksi = $_POST['wali_kelas_transaksi'];

$query_tampilKelompokKelas = "SELECT * from kelas_daftar where id_kelas_daftar='$id_kelas_daftar'";
$tampil = mysqli_query($connect, $query_tampilKelompokKelas);
$row = mysqli_fetch_array($tampil);
$pilih_kelompokKelas = $row['kelompok_kelas_daftar'];

$query_tambah_kelas = "INSERT INTO kelas_transaksi (id_kelas_daftar, nama_kelas_transaksi, wali_kelas_transaksi, kelompok_kelas_kelas_transaksi) VALUES ('$id_kelas_daftar', '$nama_kelas_transaksi', '$wali_kelas_transaksi', '$pilih_kelompokKelas') ";
/*$query_tambah = "INSERT INTO jabatan_pegawai (id_jabatan, nama_jabatan,tanggal) VALUES ('sasd','asd','2016/09/09') ";*/

$run_query = mysqli_query($connect, "SELECT * from kelas_transaksi where nama_kelas_transaksi='$nama_kelas_transaksi' && wali_kelas_transaksi='$wali_kelas_transaksi' ");

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
