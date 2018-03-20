<?php
include_once "koneksi.php";

$nip_pegawai = $_POST['nip_pegawai'];
$nip_pegawai = str_replace(' ','',$nip_pegawai);
$nama_pegawai = addslashes($_POST['nama_pegawai']);
$jabatan_pegawai = $_POST['jabatan_pegawai'];
$nama_mata_pelajaran_pegawai = addslashes($_POST['nama_mata_pelajaran_pegawai']);
$username_pegawai = str_replace(' ','',$_POST['username_pegawai']);
$password_pegawai = str_replace(' ','',$_POST['password_pegawai']);
$password_pegawai = password_hash($password_pegawai, PASSWORD_DEFAULT); //susah didekripsi
$alamat_pegawai = addslashes($_POST['alamat_pegawai']);
$tempat_lahir_pegawai = addslashes($_POST['tempat_lahir_pegawai']);
$tanggal_lahir_pegawai = $_POST['tanggal_lahir_pegawai'];
$no_handphone_pegawai = $_POST['no_handphone_pegawai'];

$query_tambah_pegawai = "INSERT INTO data_pegawai (nip_pegawai, nama_pegawai, jabatan_pegawai, nama_mata_pelajaran_pegawai, username_pegawai, password_pegawai, foto_pegawai, alamat_pegawai, tempat_lahir_pegawai, tanggal_lahir_pegawai, no_handphone_pegawai) VALUES ('$nip_pegawai', '$nama_pegawai', '$jabatan_pegawai', '$nama_mata_pelajaran_pegawai', '$username_pegawai', '$password_pegawai', '$nip_pegawai', '$alamat_pegawai', '$tempat_lahir_pegawai', '$tanggal_lahir_pegawai', '$no_handphone_pegawai') ";

  // Ambil Data yang Dikirim dari Form
  $nama_file = $_FILES['foto_pegawai']['name'];
  $ukuran_file = $_FILES['foto_pegawai']['size'];
  $tipe_file = $_FILES['foto_pegawai']['type'];
  $tmp_file = $_FILES['foto_pegawai']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya

  $path = "../frontend/img/foto/pegawai/"."$nip_pegawai";

  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Jika gambar berhasil diupload, Lakukan :
        echo "gambar berhasil diupload database";
      }else{
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='form.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika ukuran file lebih dari 1MB, lakukan :
      echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
      echo "<br><a href='form.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
    echo "<br><a href='form.php'>Kembali Ke Form</a>";
  }

//$query_dataKelas = "SELECT * from data_pegawai inner join mata_pelajaran_transaksi on data_pegawai.nama_mata_pelajaran_pegawai = mata_pelajaran_transaksi.nama_guru_mata_pelajaran_transaksi where nama_mata_pelajaran_transaksi='$nama_mata_pelajaran_pegawai'";


if (mysqli_query($connect, $query_tambah_pegawai)){

  header('location:../halaman_administrator_daftar_pegawai.php');
  echo $password_pegawai;
  echo "</br>";
  echo strlen($password_pegawai);
}
else {
  echo "Gagal Memasukan Datas!";
}
// echo $password_pegawai;
// echo "</br>";
// echo strlen($password_pegawai);
?>
