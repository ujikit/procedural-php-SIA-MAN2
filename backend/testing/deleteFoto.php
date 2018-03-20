<?php
include_once "../koneksi.php";

$queryData = "select * from data_pegawai where id_pegawai='48'";
$tampil = mysqli_query($connect, $queryData);
$row = mysqli_fetch_array($tampil);

$nip_pegawai = $row['nip_pegawai'];

$lokasi = "../../frontend/img/foto/pegawai/".$nip_pegawai;

if (isset($_POST['submit'])) {
    if (file_exists($lokasi)) {
        $query = "delete from data_pegawai where id_pegawai='48'";
        $deleteFoto = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($deleteFoto);
        unlink($lokasi);
    }
    else {
      echo "file tidak tersedia";
    }

}

 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="deleteFoto.php" method="post">
    <table>
      <tr>
        <td>
          <button type="submit" name="submit">Delete !</button>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>
