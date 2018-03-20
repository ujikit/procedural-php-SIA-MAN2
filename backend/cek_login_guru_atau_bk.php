<html>
<head>

<link rel="stylesheet" type="text/css" href="../frontend/sweetalert/dist/sweetalert.css">
<script src="../frontend/sweetalert/dist/sweetalert.min.js"></script>

<script>
function errorGuruBK(){
  swal("Gagal Login", "Pastikan Login Guru atau BK Terisi Dengan Benar.", "error");

}
</script>

</head>
<body>

<?php
session_start();
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once 'koneksi.php';

$select_guru_atau_bk                       = $_POST['select_guru_atau_bk'];
$username_pegawai                          = $_POST['username_pegawai'];
$password_pegawai                          = $_POST['password_pegawai'];
$tanggal_terpakai_verifikasi_password_baru = date("Y-m-d");
$jam_terpakai_verifikasi_password_baru     = date("H:i:s");

$query_guru    = "SELECT * FROM data_pegawai WHERE username_pegawai = '$username_pegawai' AND jabatan_pegawai = 'Guru'";
$query_bk      = "SELECT * FROM data_pegawai WHERE username_pegawai = '$username_pegawai' AND jabatan_pegawai = 'BK'";

$runqueryGuru = mysqli_query($connect, $query_guru);
$row = mysqli_fetch_array($runqueryGuru);

// $num_rows = mysqli_num_rows($runqueryGuru);

$queryCekVerifikasiPassword    = "SELECT * FROM verifikasi_password WHERE username_verifikasi_password_baru = '$username_pegawai' AND status_verifikasi_password_baru='Y'";
$verifikasiPassword            = mysqli_query($connect, $queryCekVerifikasiPassword);
$row_verifikasiPassword        = mysqli_fetch_array($verifikasiPassword);

if (mysqli_query($connect, $queryCekVerifikasiPassword)) {

  $password_baru = $row_verifikasiPassword['password_baru_verifikasi_password_baru'];
  $query_updateTanggalDanJamTerpakaiPasswordBaru = mysqli_query($connect, "UPDATE verifikasi_password set tanggal_terpakai_verifikasi_password_baru='$tanggal_terpakai_verifikasi_password_baru', jam_terpakai_verifikasi_password_baru='$jam_terpakai_verifikasi_password_baru' where username_verifikasi_password_baru='$username_pegawai'");

    if ($select_guru_atau_bk=="Guru") {

      if( password_verify($password_pegawai, $row['password_pegawai']) ) {


         $nip_pegawai = $row["nip_pegawai"];
         $nama_mata_pelajaran_pegawai = $row["nama_mata_pelajaran_pegawai"];
         $nama_pegawai = $row["nama_pegawai"];

         $_SESSION["nip_pegawai"] = $nip_pegawai;
         $_SESSION["nama_mata_pelajaran_pegawai"] = $nama_mata_pelajaran_pegawai;
         $_SESSION["nama_guru"] = $nama_pegawai;
         $response['status'] = 'berhasil';
        //  header("location: ../halaman_guru.php");
         header("location: ../halaman_guru_input_kd_mapel.php");
        echo json_encode($response);

      }
      else {
          // login gagal
          // echo "Gagal Login";
          // echo "</br>";
          // echo $row['username_pegawai'];
          // echo "</br>";
          // echo $row['password_pegawai'];
          // echo "</br>";
          // echo $password_pegawai;
          // echo "</br>";
          // echo $pass;
          $response['status'] = 'gagal';
          echo json_encode($response);
      }

    }
    elseif ($select_guru_atau_bk=="BK") {

      if($runquery2->num_rows > 0){
       session_start();
       $_SESSION['id_pegawai'] = $id_pegawai;
       header("Location: ../halaman_bk.php");
      }
      else {
       echo '<h1>BKUsername atau Kata Sandi Salah!</h1>';
      }

    }
    else {
      echo "<script>errorGuruBK();</script>";
    }

}

else {
  echo "Gagal!";
}
?>

</body>
</html>
