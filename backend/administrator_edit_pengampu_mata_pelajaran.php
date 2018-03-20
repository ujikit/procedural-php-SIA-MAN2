<?php
include_once "koneksi.php";

$id_mata_pelajaran_transaksi = $_POST['id_mata_pelajaran_transaksi'];
$nama_kelas_mata_pelajaran_transaksi = $_POST['nama_kelas_mata_pelajaran_transaksi'];
$nama_mata_pelajaran_transaksi = addslashes($_POST['nama_mata_pelajaran_transaksi']);
$nama_guru_mata_pelajaran_transaksi = $_POST['nama_guru_mata_pelajaran_transaksi'];

//1
$tampilNamaGuru = mysqli_query($connect, "SELECT nip_pegawai from data_pegawai where nama_pegawai='$nama_guru_mata_pelajaran_transaksi'");
$tampil = mysqli_fetch_array($tampilNamaGuru);
$nip_pegawai = $tampil["nip_pegawai"];

//2
$tampilIdMataPelajaran = mysqli_query($connect, "SELECT id_mata_pelajaran from mata_pelajaran where nama_mata_pelajaran='$nama_mata_pelajaran_transaksi'");
$tampil2 = mysqli_fetch_array($tampilIdMataPelajaran);
$id_mata_pelajaran = $tampil2["id_mata_pelajaran"];

$id_kelas_daftar  = str_replace(' ','',$_POST['nama_kelas_mata_pelajaran_transaksi']);
$query_update     = "UPDATE mata_pelajaran_transaksi set nama_kelas_mata_pelajaran_transaksi='$nama_kelas_mata_pelajaran_transaksi', nama_mata_pelajaran_transaksi='$nama_mata_pelajaran_transaksi', nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai' where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi';";
//smt1
$query_update    .= "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai' where nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran';";
//smt2
$query_update    .= "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan='$nip_pegawai' where nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";

if (mysqli_multi_query($connect, $query_update)){

header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
}
else {
echo "error";
}

?>
