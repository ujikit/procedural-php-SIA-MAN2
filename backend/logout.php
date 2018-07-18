<?php
include_once 'koneksi.php';
session_start();
session_destroy();
header('location:../login_guru_atau_bk.php');
?>
