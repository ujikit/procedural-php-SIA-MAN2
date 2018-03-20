<?php
include_once "koneksi.php";

$lupa_password = $_POST['lupa_password'];
$tanggal_ganti_verifikasi_password_baru      = addslashes($_POST['tanggal_ganti_verifikasi_password_baru']);
$jam_ganti_verifikasi_password_baru          = addslashes($_POST['jam_ganti_verifikasi_password_baru']);
$username_verifikasi_password_baru           = str_replace(' ','',$_POST['username_verifikasi_password_baru']);//untuk mengilangkan semua spasi di STRING
$password_baru_verifikasi_password_baru      = password_hash($_POST['password_baru_verifikasi_password_baru'], PASSWORD_DEFAULT); //susah didekripsi

//cek verifikasi password sebelumnya, kalau ada (Yang sebelumnya dihapus)..

$query_cekVerifikasiSebelumnya = "SELECT * from verifikasi_password where username_verifikasi_password_baru='$username_verifikasi_password_baru'";
$runquery_cekVerifikasiSebelumnya = mysqli_query($connect, $query_cekVerifikasiSebelumnya);
$num_rows_cekVerifikasiSebelumnya = mysqli_num_rows($runquery_cekVerifikasiSebelumnya);

if ($num_rows_cekVerifikasiSebelumnya > 0) {
  $delete_dataVerifikasi = mysqli_query($connect, "DELETE from verifikasi_password where username_verifikasi_password_baru='$username_verifikasi_password_baru'");
}

if ($lupa_password == "LupaPasswordGuruAtauBK") {

  $query = "SELECT * from data_pegawai where username_pegawai='$username_verifikasi_password_baru'";
  $tampil = mysqli_query($connect, $query);
  $row = mysqli_fetch_array($tampil);
  $jabatan_pegawai = $row['jabatan_pegawai'];

  $query_lupa_password = "INSERT into verifikasi_password (username_verifikasi_password_baru, password_baru_verifikasi_password_baru, jabatan_verifikasi_password_baru, tanggal_ganti_verifikasi_password_baru, jam_ganti_verifikasi_password_baru, tanggal_terpakai_verifikasi_password_baru, jam_terpakai_verifikasi_password_baru, status_verifikasi_password_baru) values ('$username_verifikasi_password_baru', '$password_baru_verifikasi_password_baru', '$jabatan_pegawai', '$tanggal_ganti_verifikasi_password_baru', '$jam_ganti_verifikasi_password_baru', '', '', 'N')";

  if (mysqli_query($connect, $query_lupa_password)){
    header("location:../login_guru_atau_bk.php");
  }
  else {
  echo "Gagal Ganti Password Guru Atau BK!";
  }

}
elseif($lupa_password == "LupaPasswordSiswa"){

  $query = "SELECT * from data_siswa where username_siswa='$username_verifikasi_password_baru'";
  $tampil = mysqli_query($connect, $query);
  $row = mysqli_fetch_array($tampil);

  $query_lupa_password = "INSERT into verifikasi_password (username_verifikasi_password_baru, password_baru_verifikasi_password_baru, jabatan_verifikasi_password_baru, tanggal_ganti_verifikasi_password_baru, jam_ganti_verifikasi_password_baru, tanggal_terpakai_verifikasi_password_baru, jam_terpakai_verifikasi_password_baru, status_verifikasi_password_baru) values ('$username_verifikasi_password_baru', '$password_baru_verifikasi_password_baru', 'Siswa', '$tanggal_ganti_verifikasi_password_baru', '$jam_ganti_verifikasi_password_baru', '', '', 'N')";

  if (mysqli_query($connect, $query_lupa_password)){
    header("location:../login_siswa.php");
  }
  else {
  echo "Gagal Ganti Password Siswa!";
  }

}

elseif($lupa_password == "LupaPasswordWali"){

  $query = "SELECT * from data_wali where username_wali='$username_verifikasi_password_baru'";
  $tampil = mysqli_query($connect, $query);
  $row = mysqli_fetch_array($tampil);

  $query_lupa_password = "INSERT into verifikasi_password (username_verifikasi_password_baru, password_baru_verifikasi_password_baru, jabatan_verifikasi_password_baru, tanggal_ganti_verifikasi_password_baru, jam_ganti_verifikasi_password_baru, tanggal_terpakai_verifikasi_password_baru, jam_terpakai_verifikasi_password_baru, status_verifikasi_password_baru) values ('$username_verifikasi_password_baru', '$password_baru_verifikasi_password_baru', 'Wali', '$tanggal_ganti_verifikasi_password_baru', '$jam_ganti_verifikasi_password_baru', '', '', 'N')";

  if (mysqli_query($connect, $query_lupa_password)){
    header("location:../login_wali.php");
  }
  else {
  echo "Gagal Ganti Password Wali!";
  }

}





// echo $tanggal_ganti_verifikasi_password_baru;
// echo "<br>";
// echo $username_verifikasi_password_baru;
// echo "<br>";
// echo $password_baru_verifikasi_password_baru;
// echo "<br>";
// echo $jam_ganti_verifikasi_password_baru;

?>
