<?php
include_once 'koneksi.php';
session_start();
session_destroy();

if ($_GET['nip_administrator']) {
  header("Location: ../login_administrator.php");
}

else if ($_GET['nama_guru']) {
  header("Location: ../login_guru_atau_bk.php");
}



?>
