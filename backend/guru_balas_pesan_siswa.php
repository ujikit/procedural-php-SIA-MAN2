<?php
include_once "koneksi.php";

$pengirim_pesan = addslashes($_POST["pengirim_pesan"]);
$waktu_pesan = addslashes($_POST["waktu_pesan"]);
$nis_siswas = addslashes($_POST["penerima_pesan"]);
$judul_pesan = addslashes($_POST["judul_pesan"]);
$isi_pesan = addslashes($_POST["isi_pesan"]);

$query_tampilNisSiswa = mysqli_query($connect, "SELECT * from data_siswa where nis_siswa='$nis_siswas'");
$row_tampilNisSiswa = mysqli_fetch_array($query_tampilNisSiswa);
$nis_siswa = $row_tampilNisSiswa['nis_siswa'];
echo $nis_siswa;

$query = "INSERT into pesan(pengirim_pesan, penerima_pesan, judul_pesan, isi_pesan, waktu_pesan, cek_pesan) values('$pengirim_pesan', '$nis_siswa', '$judul_pesan', '$isi_pesan', '$waktu_pesan', 'N')";

if (mysqli_query($connect, $query)) {
  echo "pesan berhasil dikirim";
  header("Location: ../halaman_guru_daftar_mengampu_kelas.php");
}
else {
  echo "pesan gagal dikirim";
}

?>
