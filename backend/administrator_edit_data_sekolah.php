<?php
include_once "koneksi.php";

$nama_kepala_sekolah_sekolah = $_POST['nama_kepala_sekolah_sekolah'];
$nip_kepala_sekolah_sekolah = $_POST['nip_kepala_sekolah_sekolah'];
$alamat_sekolah_sekolah = $_POST['alamat_sekolah_sekolah'];
$tanggal_jadi_kepala_sekolah_sekolah = $_POST['tanggal_jadi_kepala_sekolah_sekolah'];
$tahun_pelajaran_sekolah_sekolah = $_POST['tahun_pelajaran_sekolah_sekolah'];
$nama_sekolah_sekolah = $_POST['nama_sekolah_sekolah'];
$asal_kota_sekolah_sekolah = $_POST['asal_kota_sekolah_sekolah'];
$username_administrator_sekolah = $_POST['username_administrator_sekolah'];
$email_sekolah = $_POST['email_sekolah'];


$query_update = "UPDATE data_sekolah set nip_kepala_sekolah_sekolah='$nip_kepala_sekolah_sekolah', nama_sekolah_sekolah='$nama_sekolah_sekolah', nama_kepala_sekolah_sekolah='$nama_kepala_sekolah_sekolah', tanggal_jadi_kepala_sekolah_sekolah='$tanggal_jadi_kepala_sekolah_sekolah', tahun_pelajaran_sekolah_sekolah='$tahun_pelajaran_sekolah_sekolah', alamat_sekolah_sekolah='$alamat_sekolah_sekolah', asal_kota_sekolah_sekolah='$asal_kota_sekolah_sekolah', username_administrator_sekolah ='$username_administrator_sekolah ', email_sekolah='$email_sekolah' where id_madrasah='man2jogja'";

  // Ambil Data yang Dikirim dari Form
  $nama_file = $_FILES['foto_kepala_sekolah_sekolah']['name'];
  $ukuran_file = $_FILES['foto_kepala_sekolah_sekolah']['size'];
  $tipe_file = $_FILES['foto_kepala_sekolah_sekolah']['type'];
  $tmp_file = $_FILES['foto_kepala_sekolah_sekolah']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
  $path = "../frontend/img/foto/pegawai/"."kepala_sekolah";

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

header('location:../halaman_administrator.php');
}
else {
echo "error";
}

?>
