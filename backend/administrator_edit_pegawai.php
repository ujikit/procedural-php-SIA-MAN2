<?php
include_once "koneksi.php";

$id_pegawai = $_POST['id_pegawai'];
$nip_pegawai = $_POST['nip_pegawai'];
$nama_pegawai = addslashes($_POST['nama_pegawai']);
$jabatan_pegawai = $_POST['jabatan_pegawai'];
$nama_mata_pelajaran_pegawai = addslashes($_POST['nama_mata_pelajaran_pegawai']);
// $username_pegawai = $_POST['username_pegawai'];
// $password_pegawai = password_hash($_POST['password_pegawai'], PASSWORD_DEFAULT);
$alamat_pegawai = addslashes($_POST['alamat_pegawai']);
$tempat_lahir_pegawai = addslashes($_POST['tempat_lahir_pegawai']);
$tanggal_lahir_pegawai = $_POST['tanggal_lahir_pegawai'];
$no_handphone_pegawai = $_POST['no_handphone_pegawai'];

$query_update = "UPDATE data_pegawai set foto_pegawai='$nip_pegawai',nip_pegawai='$nip_pegawai', nama_pegawai='$nama_pegawai', jabatan_pegawai='$jabatan_pegawai', nama_mata_pelajaran_pegawai='$nama_mata_pelajaran_pegawai', alamat_pegawai='$alamat_pegawai', tempat_lahir_pegawai='$tempat_lahir_pegawai', tanggal_lahir_pegawai='$tanggal_lahir_pegawai', no_handphone_pegawai='$no_handphone_pegawai' where id_pegawai='$id_pegawai'";

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

if (mysqli_query($connect, $query_update)){

header('location:../halaman_administrator_daftar_pegawai.php');
}
else {
echo "error";
}

?>
