<?php
require_once "koneksi.php";

$username_siswa           = $_POST['nis_siswa'];
$password_siswa           = $_POST['password_siswa'];

$query_tampilPasswordSiswa = mysqli_query($connect, "SELECT * FROM data_siswa WHERE username_siswa = '$username_siswa'");
$row_tampilPasswordSiswa = mysqli_fetch_array($query_tampilPasswordSiswa);

if(password_verify($password_siswa, $row_tampilPasswordSiswa['password_siswa'])) {
   session_start();
   echo "Berhasil";
  // $response["error"] = FALSE;
  //           $response["uid"] = $row_tampilPasswordSiswa["nis_siswa"];
  //           $response["user"]["nama"] = $row_tampilPasswordSiswa["nama_siswa"];
  //           echo json_encode($response);
}
else {
  echo "Gagal Login!";
}

// if (mysqli_num_rows($result) == 1) {
//   echo "Success";
// }
// else {
//   echo "Error";
// }

?>
