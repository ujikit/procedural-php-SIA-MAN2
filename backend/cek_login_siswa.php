<?php
session_start();
include_once 'koneksi.php';

$nis_siswa                                 = $_POST['nis_siswa'];
$password_siswa                            = $_POST['password_siswa'];
$tanggal_terpakai_verifikasi_password_baru = $_POST['tanggal_terpakai_verifikasi_password_baru'];
$jam_terpakai_verifikasi_password_baru     = $_POST['jam_terpakai_verifikasi_password_baru'];

$query_siswa    = "SELECT * FROM data_siswa WHERE username_siswa = '$nis_siswa'";

$runquery = mysqli_query($connect, $query_siswa);
$row = mysqli_fetch_array($runquery,MYSQLI_ASSOC);
$num_rows = mysqli_num_rows($runquery);

$queryCekVerifikasiPassword    = "SELECT * FROM verifikasi_password WHERE username_verifikasi_password_baru = '$nis_siswa' AND status_verifikasi_password_baru='Y'";
$verifikasiPassword            = mysqli_query($connect, $queryCekVerifikasiPassword);
$row_verifikasiPassword        = mysqli_fetch_array($verifikasiPassword);


if (mysqli_query($connect, $queryCekVerifikasiPassword)) {

  $password_baru = $row_verifikasiPassword['password_baru_verifikasi_password_baru'];
  $query_updateTanggalDanJamTerpakaiPasswordBaru = mysqli_query($connect, "UPDATE verifikasi_password set tanggal_terpakai_verifikasi_password_baru='$tanggal_terpakai_verifikasi_password_baru', jam_terpakai_verifikasi_password_baru='$jam_terpakai_verifikasi_password_baru' where username_verifikasi_password_baru='$nis_siswa'");

  if($num_rows > 0){

    if( password_verify($password_siswa, $row['password_siswa']) ) {
       session_start();
       $nis_siswa = $row['nis_siswa'];
       $nama_siswa = $row['nama_siswa'];

       $_SESSION['nis_siswa'] = $nis_siswa;
       $_SESSION['nama_siswa'] = $nama_siswa;

       header("Location: ../halaman_siswa_cek_nilai.php");
    }
    else {
        // login gagal
        echo "Gagal Login";
        echo "</br>";
        echo $password_siswa;
    }
  }

}
else {
  echo "Gagal Lagin";
}

?>
