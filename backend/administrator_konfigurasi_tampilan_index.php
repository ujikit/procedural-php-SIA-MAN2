<?php
include_once "koneksi.php";

$marquee_data_website      = addslashes($_POST['marquee_data_website']);
$hubungi_kami_data_website = $_POST['hubungi_kami_data_website'];
$email_data_website        = addslashes($_POST['email_data_website']);

echo $marquee_data_website;
echo "</br>";
echo $hubungi_kami_data_website;
echo "</br>";
echo $email_data_website;
echo "</br>";

$judul_konten_slide_data_website1 = addslashes($_POST['judul_konten_slide_data_website1']);
$isi_konten_slide_data_website1   = addslashes($_POST['isi_konten_slide_data_website1']);
// $gambar_slide_data_website1       = $_POST['gambar_slide_data_website1'];

$judul_konten_slide_data_website2 = addslashes($_POST['judul_konten_slide_data_website2']);
$isi_konten_slide_data_website2   = addslashes($_POST['isi_konten_slide_data_website2']);
// $gambar_slide_data_website2       = $_POST['gambar_slide_data_website2'];

$judul_konten_slide_data_website3 = addslashes($_POST['judul_konten_slide_data_website3']);
$isi_konten_slide_data_website3   = addslashes($_POST['isi_konten_slide_data_website3']);
// $gambar_slide_data_website3       = $_POST['gambar_slide_data_website3'];

$query_update_global  = "UPDATE data_website set marquee_data_website='$marquee_data_website', hubungi_kami_data_website='$hubungi_kami_data_website', email_data_website='$email_data_website' where id_data_website='1'";

$query_update_konten1 = "UPDATE data_website set judul_konten_slide_data_website='$judul_konten_slide_data_website1', isi_konten_slide_data_website='$isi_konten_slide_data_website1', gambar_slide_data_website='gambar_slide_data_website1' where id_data_website='2'";

  // Ambil Data yang Dikirim dari Form
  $nama_file_konten1 = $_FILES['gambar_slide_data_website1']['name'];
  $ukuran_file_konten1 = $_FILES['gambar_slide_data_website1']['size'];
  $tipe_file_konten1 = $_FILES['gambar_slide_data_website1']['type'];
  $tmp_file_konten1 = $_FILES['gambar_slide_data_website1']['tmp_name'];

  $nama_file_konten2 = $_FILES['gambar_slide_data_website2']['name'];
  $ukuran_file_konten2 = $_FILES['gambar_slide_data_website2']['size'];
  $tipe_file_konten2 = $_FILES['gambar_slide_data_website2']['type'];
  $tmp_file_konten2 = $_FILES['gambar_slide_data_website2']['tmp_name'];

  $nama_file_konten3 = $_FILES['gambar_slide_data_website3']['name'];
  $ukuran_file_konten3 = $_FILES['gambar_slide_data_website3']['size'];
  $tipe_file_konten3 = $_FILES['gambar_slide_data_website3']['type'];
  $tmp_file_konten3 = $_FILES['gambar_slide_data_website3']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
  $path_konten1 = "../frontend/img/profil/gambar_slide_data_website1";
  $path_konten2 = "../frontend/img/profil/gambar_slide_data_website2";
  $path_konten3 = "../frontend/img/profil/gambar_slide_data_website3";

  if($tipe_file_konten1 == "image/jpeg" || $tipe_file_konten1 == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file_konten1 <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if(move_uploaded_file($tmp_file_konten1, $path_konten1)){ // Cek apakah gambar berhasil diupload atau tidak
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

  if($tipe_file_konten2 == "image/jpeg" || $tipe_file_konten2 == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file_konten2 <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if(move_uploaded_file($tmp_file_konten2, $path_konten2)){ // Cek apakah gambar berhasil diupload atau tidak
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

  if($tipe_file_konten3 == "image/jpeg" || $tipe_file_konten3 == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file_konten3 <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if(move_uploaded_file($tmp_file_konten3, $path_konten3)){ // Cek apakah gambar berhasil diupload atau tidak
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

if (mysqli_query($connect, $query_update_global)){

  if (mysqli_query($connect, $query_update_konten1)){
  }
  else {
  echo "... error edit konten 1";
  }
  if (mysqli_query($connect, $query_update_konten2)){
  }
  else {
  echo "... error edit konten 2";
  }
  if (mysqli_query($connect, $query_update_konten3)){
  }
  else {
  echo "... error edit konten 3";
  }
  header('location:../halaman_administrator_konfigurasi_tampilan_index.php');
}
else {
echo "... error edit global";
}

?>
