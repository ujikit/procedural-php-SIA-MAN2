<?php
session_start();
if($_SESSION['nip_pegawai']){
require('frontend/fpdf181/fpdf.php');
include_once "backend/koneksi.php";

$nip_pegawai = $_SESSION['nip_pegawai'];
$kelompok_kelas_daftar = $_GET['kelompok_kelas_daftar']; //etc : Agama, IPA, IPS, Bahasa
$kelas_daftar_kelas = $_GET['kelas_daftar_kelas']; //etc : 10, 11, 12

date_default_timezone_set("Asia/Jakarta");
$tahun_pelajaran = date("Y");

//Variabel untuk halaman cetak raport setelahnya..
$nis_siswa = $_GET["nis_siswa"];
$id_kelas_daftar = $_GET["id_kelas_daftar"]; //etc 10IPA1, 11IPS2 dll
$semester_angka = $_GET["semester_angka"];
$semester_huruf = $_GET["semester_huruf"];

$query_tampilKelas = mysqli_query($connect, "SELECT * from kelas_daftar where id_kelas_daftar='$id_kelas_daftar'");
$row = mysqli_fetch_array($query_tampilKelas);
$kelas_siswa = $row['nama_kelas_daftar']; //untuk menampilkan data kelas siswa halaman raport

  $query_tampilNamaPegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
  $row_tampilNamaPegawai = mysqli_fetch_array($query_tampilNamaPegawai);
  $nama_pegawai = $row_tampilNamaPegawai['nama_pegawai'];

    if ($kelompok_kelas_daftar == "IPA") {
      include_once "halaman_guru_daftar_wali_kelas_nilai_cetak_2nilai_siswa_IPA.php";
    }
    elseif ($kelompok_kelas_daftar == "IPS"){
      include_once "halaman_guru_daftar_wali_kelas_nilai_cetak_2nilai_siswa_IPS.php";
    }
    elseif ($kelompok_kelas_daftar == "Agama"){
      include_once "halaman_guru_daftar_wali_kelas_nilai_cetak_2nilai_siswa_AGAMA.php";
    }
    elseif ($kelompok_kelas_daftar == "Bahasa"){
      include_once "halaman_guru_daftar_wali_kelas_nilai_cetak_2nilai_siswa_BAHASA.php";
    }
    else {
      echo $kelompok_kelas_daftar."</br>";
      echo $kelas_daftar_kelas."</br>";
      echo $id_kelas_daftar;
    }

}
else {
  header("location:login_guru_atau_bk.php");
}
?>
