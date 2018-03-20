<?php
include_once "koneksi.php";

$nis_siswa = $_POST['nis_siswa'];
$nisn_siswa = $_POST['nisn_siswa'];
$nis_siswa = $_POST['nis_siswa'];
$nama_siswa = addslashes($_POST['nama_siswa']);
$jenis_kelamin_siswa = $_POST['jenis_kelamin_siswa'];
$id_kelas_daftar = $_POST['id_kelas_daftar'];
$alamat_siswa = addslashes($_POST['alamat_siswa']);
$tempat_lahir_siswa = addslashes($_POST['tempat_lahir_siswa']);
$tanggal_lahir_siswa = $_POST['tanggal_lahir_siswa'];
$no_handphone_siswa = $_POST['no_handphone_siswa'];
$anak_ke_siswa = $_POST['anak_ke_siswa'];
$status_dalam_keluarga_siswa = $_POST['status_dalam_keluarga_siswa'];
$username_siswa = $_POST['username_siswa'];
$password_siswa = $_POST['password_siswa'];

$diterima_tanggal_siswa = $_POST['diterima_tanggal_siswa'];
$diterima_semester_siswa = $_POST['diterima_semester_siswa'];
$sekolah_asal_nama_siswa = $_POST['sekolah_asal_nama_siswa'];
$sekolah_asal_alamat_siswa = $_POST['sekolah_asal_alamat_siswa'];
$stl_tahun_siswa = $_POST['stl_tahun_siswa'];
$stl_nomor_siswa = $_POST['stl_nomor_siswa'];
$orangtua_nama_ayah_siswa = $_POST['orangtua_nama_ayah_siswa'];
$orangtua_nama_ibu_siswa = $_POST['orangtua_nama_ibu_siswa'];
$orangtua_alamat_siswa = $_POST['orangtua_alamat_siswa'];
$orangtua_telepon_siswa = $_POST['orangtua_telepon_siswa'];
$orangtua_pekerjaan_ayah_siswa = $_POST['orangtua_pekerjaan_ayah_siswa'];
$orangtua_pekerjaan_ibu_siswa = $_POST['orangtua_pekerjaan_ibu_siswa'];

$nama_wali = addslashes($_POST['nama_wali']);
$pekerjaan_wali = $_POST['pekerjaan_wali'];
$jenis_kelamin_wali = $_POST['jenis_kelamin_wali'];
$alamat_wali = addslashes($_POST['alamat_wali']);
$tempat_lahir_wali = addslashes($_POST['tempat_lahir_wali']);
$tanggal_lahir_wali = $_POST['tanggal_lahir_wali'];
$no_handphone_wali = $_POST['no_handphone_wali'];

$query_update = "UPDATE data_siswa set nisn_siswa='$nisn_siswa',nis_siswa='$nis_siswa',nama_siswa='$nama_siswa',jenis_kelamin_siswa='$jenis_kelamin_siswa',foto_siswa='$nis_siswa',id_kelas_daftar='$id_kelas_daftar',alamat_siswa='$alamat_siswa',tempat_lahir_siswa='$tempat_lahir_siswa',tanggal_lahir_siswa='$tanggal_lahir_siswa',no_handphone_siswa='$no_handphone_siswa', anak_ke_siswa='$anak_ke_siswa', status_dalam_keluarga_siswa='$status_dalam_keluarga_siswa', username_siswa='$username_siswa',password_siswa='$password_siswa', diterima_tanggal_siswa='$diterima_tanggal_siswa', diterima_semester_siswa='$diterima_semester_siswa', sekolah_asal_nama_siswa='$sekolah_asal_nama_siswa', sekolah_asal_alamat_siswa='$sekolah_asal_alamat_siswa', stl_tahun_siswa='$stl_tahun_siswa', stl_nomor_siswa='$stl_nomor_siswa', orangtua_nama_ayah_siswa='$orangtua_nama_ayah_siswa', orangtua_nama_ibu_siswa='$orangtua_nama_ibu_siswa', orangtua_alamat_siswa='$orangtua_alamat_siswa', orangtua_telepon_siswa='$orangtua_telepon_siswa', orangtua_pekerjaan_ayah_siswa='$orangtua_pekerjaan_ayah_siswa', orangtua_pekerjaan_ibu_siswa='$orangtua_pekerjaan_ibu_siswa', nama_wali='$nama_wali',pekerjaan_wali='$pekerjaan_wali',jenis_kelamin_wali='$jenis_kelamin_wali',alamat_wali='$alamat_wali',tempat_lahir_wali='$tempat_lahir_wali',tanggal_lahir_wali='$tanggal_lahir_wali',no_handphone_wali='$no_handphone_wali' where nis_siswa='$nis_siswa'";

  // Ambil Data yang Dikirim dari Form
  $nama_file = $_FILES['foto_siswa']['name'];
  $ukuran_file = $_FILES['foto_siswa']['size'];
  $tipe_file = $_FILES['foto_siswa']['type'];
  $tmp_file = $_FILES['foto_siswa']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
  $path = "../frontend/img/foto/siswa/"."$nisn_siswa";

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

  header('location:../halaman_guru_daftar_wali_kelas.php');

  $query_update2 = "UPDATE nilai_siswa_transaksi set nis_siswa_nilai_siswa_transaksi='$nis_siswa',nama_kelas_nilai_siswa_transaksi='$id_kelas_daftar' where nis_siswa_nilai_siswa_transaksi='$nis_siswa'";
  if (mysqli_query($connect, $query_update2)){

    header('location:../halaman_guru_daftar_wali_kelas.php');
  }
  else {
  echo "... error ubah nilai siswa transaksi";
  }

}
else {

echo "... error";
}

?>
