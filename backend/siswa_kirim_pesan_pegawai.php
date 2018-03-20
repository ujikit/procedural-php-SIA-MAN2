<?php
include_once "koneksi.php";

$pengirim_pesan = addslashes($_POST["pengirim_pesan"]);
$waktu_pesan = addslashes($_POST["waktu_pesan"]);
$penerima_pesan = addslashes($_POST["penerima_pesan"]);
$judul_pesan = addslashes($_POST["judul_pesan"]);
$isi_pesan = addslashes($_POST["isi_pesan"]);

$query = "INSERT into pesan(pengirim_pesan, penerima_pesan, judul_pesan, isi_pesan, waktu_pesan, cek_pesan) values('$pengirim_pesan', '$penerima_pesan', '$judul_pesan', '$isi_pesan', '$waktu_pesan', 'N')";

echo $penerima_pesan;

// if (mysqli_query($connect, $query)) {
//   echo "pesan berhasil dikirim";
//   header("Location: ../halaman_siswa_cek_nilai.php");
// }
// else {
//   echo "pesan gagal dikirim";
// }

?>
