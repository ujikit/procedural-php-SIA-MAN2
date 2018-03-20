<?php
session_start();
include_once 'koneksi.php';

$username_pegawai = $_POST['username_pegawai'];
$password_pegawai = $_POST['password_pegawai'];

$query_administrator    = "SELECT * FROM data_pegawai WHERE username_pegawai = '$username_pegawai' AND password_pegawai = '$password_pegawai' AND jabatan_pegawai = 'admin'";

$runquery1 = mysqli_query($connect, $query_administrator);
$num_rows = mysqli_num_rows($runquery1);

  if($num_rows > 0){

    $tampil=mysqli_fetch_array($runquery1,MYSQLI_ASSOC);

    $nip_pegawai = $tampil['nip_pegawai'];
    $nama_pegawai = $tampil['nama_pegawai'];

   $_SESSION['nip_administrator'] = $nip_pegawai;
   $_SESSION['nama_pegawai'] = $nama_pegawai;

   header("Location: ../halaman_administrator.php");
  }
  else {
   echo "error login";
  }

?>
