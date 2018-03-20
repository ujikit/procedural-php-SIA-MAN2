<?php
include_once "koneksi.php";
$id_mata_pelajaran_transaksi                = $_POST['id_mata_pelajaran_transaksi'];
$id_mata_pelajaran_mata_pelajaran_transaksi = $_POST['id_mata_pelajaran_mata_pelajaran_transaksi'];
$id_kelas_daftar                            = $_POST['id_kelas_daftar'];
$nip_pegawai                                = $_POST['nip_pegawai'];

$query_deleteMataPelajaranTransaksi = "DELETE from mata_pelajaran_transaksi where id_mata_pelajaran_transaksi='$id_mata_pelajaran_transaksi'";

if (mysqli_query($connect, $query_deleteMataPelajaranTransaksi)) {

  $query_deleteKD_mapel  = "DELETE from guru_kompetensi_dasar_smt1 where guru_kompetensi_dasar_mata_pelajaran_smt1='$id_mata_pelajaran_mata_pelajaran_transaksi' and guru_kompetensi_dasar_kelas_daftar_smt1='$id_kelas_daftar' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai';";
  $query_deleteKD_mapel .= "DELETE from guru_kompetensi_dasar_smt2 where guru_kompetensi_dasar_mata_pelajaran_smt2='$id_mata_pelajaran_mata_pelajaran_transaksi' and guru_kompetensi_dasar_kelas_daftar_smt2='$id_kelas_daftar' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai';";

  $query_deleteKD_mapel .= "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='' where nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran_mata_pelajaran_transaksi';";
  $query_deleteKD_mapel .= "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan='' where nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran_mata_pelajaran_transaksi'";

  if (mysqli_multi_query($connect, $query_deleteKD_mapel)) {
    header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
    echo "Data KD berhasil dihapus.";
  }
  else {
    echo "Gagal hapus KD.";
  }
}
else {
  echo "Gagal Menghapus Data Pengampu Mata Pelajaran!";
}



 ?>
