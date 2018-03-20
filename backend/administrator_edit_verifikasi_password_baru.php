<?php
include_once "koneksi.php";

$username_verifikasi_password_baru           = $_POST['username_verifikasi_password_baru'];
$tanggal_verifikasi_verifikasi_password_baru = $_POST['tanggal_verifikasi_verifikasi_password_baru'];
$jam_verifikasi_verifikasi_password_baru     = $_POST['jam_verifikasi_verifikasi_password_baru'];

$query = mysqli_query($connect, "SELECT * from verifikasi_password where username_verifikasi_password_baru='$username_verifikasi_password_baru'");
$row = mysqli_fetch_array($query);
$password_baru = $row['password_baru_verifikasi_password_baru'];

$query_updatePasswordLamaKeBaru_GuruAtauBK = mysqli_query($connect, "UPDATE data_pegawai set password_pegawai='$password_baru' where username_pegawai='$username_verifikasi_password_baru'");
$query_updatePasswordLamaKeBaruSiswa       = mysqli_query($connect, "UPDATE data_siswa set password_siswa='$password_baru' where username_siswa='$username_verifikasi_password_baru'");

$query_update = "UPDATE verifikasi_password set tanggal_verifikasi_verifikasi_password_baru='$tanggal_verifikasi_verifikasi_password_baru', jam_verifikasi_verifikasi_password_baru='$jam_verifikasi_verifikasi_password_baru', status_verifikasi_password_baru='Y' where username_verifikasi_password_baru='$username_verifikasi_password_baru'";

if (mysqli_query($connect, $query_update)){

header('location:../halaman_administrator_verifikasi_password_baru.php');
}
else {
echo "error";
}

?>
