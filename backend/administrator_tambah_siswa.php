<?php
include_once "koneksi.php";

$nisn_siswa = $_POST['nisn_siswa'];
$nis_siswa = $_POST['nis_siswa'];
$nama_siswa = addslashes($_POST['nama_siswa']);
$jenis_kelamin_siswa = $_POST['jenis_kelamin_siswa'];

$kd_kelas_daftar = $_POST['kd_kelas_daftar_siswa'];
$kelompok_kelas = substr($kd_kelas_daftar,2,-1);
echo $kelompok_kelas;
// echo "</br>";

$alamat_siswa = addslashes($_POST['alamat_siswa']);
$tempat_lahir_siswa = addslashes($_POST['tempat_lahir_siswa']);
$tanggal_lahir_siswa = $_POST['tanggal_lahir_siswa'];
$no_handphone_siswa = $_POST['no_handphone_siswa'];
$anak_ke_siswa = $_POST['anak_ke_siswa'];
$status_dalam_keluarga_siswa = $_POST['status_dalam_keluarga_siswa'];
$password_siswa = password_hash($_POST['password_siswa'], PASSWORD_DEFAULT);
/*username_siswa = $_POST['username_siswa'];
$password_siswa = $_POST['password_siswa'];*/

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

$username_wali = $nis_siswa.'wali';
$nama_wali = addslashes($_POST['nama_wali']);
$pekerjaan_wali = $_POST['pekerjaan_wali'];
$jenis_kelamin_wali = $_POST['jenis_kelamin_wali'];
$alamat_wali = addslashes($_POST['alamat_wali']);
$tempat_lahir_wali = addslashes($_POST['tempat_lahir_wali']);
$tanggal_lahir_wali = $_POST['tanggal_lahir_wali'];
$no_handphone_wali = $_POST['no_handphone_wali'];

    // Ambil Data yang Dikirim dari Form
    $nama_file = $_FILES['foto_siswa']['name'];
    $ukuran_file = $_FILES['foto_siswa']['size'];
    $tipe_file = $_FILES['foto_siswa']['type'];
    $tmp_file = $_FILES['foto_siswa']['tmp_name'];

    // Set path folder tempat menyimpan gambarnya
    $path = "../frontend/img/foto/siswa/"."$nis_siswa";

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

    mysqli_query($connect, "INSERT INTO pembayaran (kd_pembayaran, kekurangan_pembayaran, nis_siswa_pembayaran, lunas_pembayaran) VALUES ('d_ulang','565.000','$nis_siswa','N')");
    mysqli_query($connect, "INSERT INTO pembayaran (kd_pembayaran, kekurangan_pembayaran, nis_siswa_pembayaran, lunas_pembayaran) VALUES ('seragam','1.500.000','$nis_siswa','N')");
    mysqli_query($connect, "INSERT INTO pembayaran (kd_pembayaran, kekurangan_pembayaran, nis_siswa_pembayaran, lunas_pembayaran) VALUES ('uang_operasional','1.800.000','$nis_siswa','N')");
    mysqli_query($connect, "INSERT INTO pembayaran (kd_pembayaran, kekurangan_pembayaran, nis_siswa_pembayaran, lunas_pembayaran) VALUES ('spp','1.500.000','$nis_siswa','N')");

  if ($kelompok_kelas == "ipa") {

    //smt1
    $query_tambahIPA   = "INSERT INTO data_siswa (nisn_siswa, nis_siswa, nama_siswa, jenis_kelamin_siswa, kd_kelas_daftar_siswa, alamat_siswa, tempat_lahir_siswa, tanggal_lahir_siswa, no_handphone_siswa, anak_ke_siswa, username_siswa, password_siswa, agama_siswa, status_dalam_keluarga_siswa, diterima_tanggal_siswa, diterima_semester_siswa, sekolah_asal_nama_siswa, sekolah_asal_alamat_siswa, stl_tahun_siswa, stl_nomor_siswa, orangtua_nama_ayah_siswa, orangtua_nama_ibu_siswa, orangtua_alamat_siswa, orangtua_telepon_siswa, orangtua_pekerjaan_ayah_siswa, orangtua_pekerjaan_ibu_siswa, username_wali, password_wali, nama_wali, pekerjaan_wali, jenis_kelamin_wali, alamat_wali, jabatan_siswa, tempat_lahir_wali, tanggal_lahir_wali, no_handphone_wali) VALUES ('$nisn_siswa', '$nis_siswa', '$nama_siswa', '$jenis_kelamin_siswa', '$kd_kelas_daftar', '$alamat_siswa', '$tempat_lahir_siswa', '$tanggal_lahir_siswa', '$no_handphone_siswa', '$anak_ke_siswa', '$nis_siswa', '$password_siswa', 'Islam', '$status_dalam_keluarga_siswa', '$diterima_tanggal_siswa', '$diterima_semester_siswa', '$sekolah_asal_nama_siswa', '$sekolah_asal_alamat_siswa', '$stl_tahun_siswa', '$stl_nomor_siswa', '$orangtua_nama_ayah_siswa', '$orangtua_nama_ibu_siswa', '$orangtua_alamat_siswa', '$orangtua_telepon_siswa', '$orangtua_pekerjaan_ayah_siswa', '$orangtua_pekerjaan_ibu_siswa', '$nis_siswa', '$password_siswa', '$nama_wali', '$pekerjaan_wali', '$jenis_kelamin_wali', '$alamat_wali', 'siswa', '$tempat_lahir_wali', '$tanggal_lahir_wali', '$no_handphone_wali');";
    $query_tambahIPA  .= "INSERT INTO data_wali (nis_siswa_wali, username_wali, password_wali) values ('$nis_siswa','$username_wali','$password_siswa');";

    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'mtkIPA', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'fis', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'kim', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bio', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa');";

    //smt2
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'mtkIPA', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'fis', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'kim', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bio', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahIPA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa')";

    if (mysqli_multi_query($connect, $query_tambahIPA)) {
      echo "berhasil disimpan";
      header('location:../halaman_administrator_daftar_siswa.php');
    }
    else {
      echo "Gagal simpan IPA!";
      echo $nisn_siswa."<br>";
      echo $nis_siswa."<br>";
      echo $nama_siswa."<br>";
      echo $jenis_kelamin_siswa."<br>";
      echo $kd_kelas_daftar."<br>";
      echo $alamat_siswa."<br>";
      echo $tempat_lahir_siswa."<br>";
      echo $tanggal_lahir_siswa."<br>";
      echo $no_handphone_siswa."<br>";
      echo $anak_ke_siswa."<br>";
      echo $status_dalam_keluarga_siswa."<br>";
      echo $password_siswa."<br>";

    }
  }
  elseif ($kelompok_kelas == "ips") {

    //SMT1
    $query_tambahIPS   = "INSERT INTO data_siswa (nisn_siswa, nis_siswa, nama_siswa, jenis_kelamin_siswa, kd_kelas_daftar_siswa, alamat_siswa, tempat_lahir_siswa, tanggal_lahir_siswa, no_handphone_siswa, anak_ke_siswa, username_siswa, password_siswa, agama_siswa, status_dalam_keluarga_siswa, diterima_tanggal_siswa, diterima_semester_siswa, sekolah_asal_nama_siswa, sekolah_asal_alamat_siswa, stl_tahun_siswa, stl_nomor_siswa, orangtua_nama_ayah_siswa, orangtua_nama_ibu_siswa, orangtua_alamat_siswa, orangtua_telepon_siswa, orangtua_pekerjaan_ayah_siswa, orangtua_pekerjaan_ibu_siswa, username_wali, password_wali, nama_wali, pekerjaan_wali, jenis_kelamin_wali, alamat_wali, jabatan_siswa, tempat_lahir_wali, tanggal_lahir_wali, no_handphone_wali) VALUES ('$nisn_siswa', '$nis_siswa', '$nama_siswa', '$jenis_kelamin_siswa', '$kd_kelas_daftar', '$alamat_siswa', '$tempat_lahir_siswa', '$tanggal_lahir_siswa', '$no_handphone_siswa', '$anak_ke_siswa', '$nis_siswa', '$password_siswa', 'Islam', '$status_dalam_keluarga_siswa', '$diterima_tanggal_siswa', '$diterima_semester_siswa', '$sekolah_asal_nama_siswa', '$sekolah_asal_alamat_siswa', '$stl_tahun_siswa', '$stl_nomor_siswa', '$orangtua_nama_ayah_siswa', '$orangtua_nama_ibu_siswa', '$orangtua_alamat_siswa', '$orangtua_telepon_siswa', '$orangtua_pekerjaan_ayah_siswa', '$orangtua_pekerjaan_ibu_siswa', '$nis_siswa', '$password_siswa', '$nama_wali', '$pekerjaan_wali', '$jenis_kelamin_wali', '$alamat_wali', 'siswa', '$tempat_lahir_wali', '$tanggal_lahir_wali', '$no_handphone_wali');";
    $query_tambahIPS  .= "INSERT INTO data_wali (nis_siswa_wali, username_wali, password_wali) values ('$nis_siswa','$username_wali','$password_siswa');";

    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'geo', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'eko', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'sos', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa');";

    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'geo', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'eko', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'sos', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahIPS  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa')";

    if (mysqli_multi_query($connect, $query_tambahIPS)) {
      echo "berhasil disimpan";
      header('location:../halaman_administrator_daftar_siswa.php');
    }
    else {
      echo "Gagal simpan IPS!";
    }
  }

  elseif ($kelompok_kelas == "agama") {

    //SMT1
    $query_tambahAGAMA   = "INSERT INTO data_siswa (nisn_siswa, nis_siswa, nama_siswa, jenis_kelamin_siswa, kd_kelas_daftar_siswa, alamat_siswa, tempat_lahir_siswa, tanggal_lahir_siswa, no_handphone_siswa, anak_ke_siswa, username_siswa, password_siswa, agama_siswa, status_dalam_keluarga_siswa, diterima_tanggal_siswa, diterima_semester_siswa, sekolah_asal_nama_siswa, sekolah_asal_alamat_siswa, stl_tahun_siswa, stl_nomor_siswa, orangtua_nama_ayah_siswa, orangtua_nama_ibu_siswa, orangtua_alamat_siswa, orangtua_telepon_siswa, orangtua_pekerjaan_ayah_siswa, orangtua_pekerjaan_ibu_siswa, username_wali, password_wali, nama_wali, pekerjaan_wali, jenis_kelamin_wali, alamat_wali, jabatan_siswa, tempat_lahir_wali, tanggal_lahir_wali, no_handphone_wali) VALUES ('$nisn_siswa', '$nis_siswa', '$nama_siswa', '$jenis_kelamin_siswa', '$kd_kelas_daftar', '$alamat_siswa', '$tempat_lahir_siswa', '$tanggal_lahir_siswa', '$no_handphone_siswa', '$anak_ke_siswa', '$nis_siswa', '$password_siswa', 'Islam', '$status_dalam_keluarga_siswa', '$diterima_tanggal_siswa', '$diterima_semester_siswa', '$sekolah_asal_nama_siswa', '$sekolah_asal_alamat_siswa', '$stl_tahun_siswa', '$stl_nomor_siswa', '$orangtua_nama_ayah_siswa', '$orangtua_nama_ibu_siswa', '$orangtua_alamat_siswa', '$orangtua_telepon_siswa', '$orangtua_pekerjaan_ayah_siswa', '$orangtua_pekerjaan_ibu_siswa', '$nis_siswa', '$password_siswa', '$nama_wali', '$pekerjaan_wali', '$jenis_kelamin_wali', '$alamat_wali', 'siswa', '$tempat_lahir_wali', '$tanggal_lahir_wali', '$no_handphone_wali');";
    $query_tambahAGAMA  .= "INSERT INTO data_wali (nis_siswa_wali, username_wali, password_wali) values ('$nis_siswa','$username_wali','$password_siswa');";

    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'iltaf', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ilhad', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'usfik', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa');";

    //SMT2
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'iltaf', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ilhad', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'usfik', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahAGAMA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa')";

    if (mysqli_multi_query($connect, $query_tambahAGAMA)) {
      echo "berhasil disimpan";
      header('location:../halaman_administrator_daftar_siswa.php');
    }
    else {
      echo "Gagal simpan Agama!";
    }

  }
  elseif ($kelompok_kelas == "bahasa") {

    //SMT1
    $query_tambahBAHASA   = "INSERT INTO data_siswa (nisn_siswa, nis_siswa, nama_siswa, jenis_kelamin_siswa, kd_kelas_daftar_siswa, alamat_siswa, tempat_lahir_siswa, tanggal_lahir_siswa, no_handphone_siswa, anak_ke_siswa, username_siswa, password_siswa, agama_siswa, status_dalam_keluarga_siswa, diterima_tanggal_siswa, diterima_semester_siswa, sekolah_asal_nama_siswa, sekolah_asal_alamat_siswa, stl_tahun_siswa, stl_nomor_siswa, orangtua_nama_ayah_siswa, orangtua_nama_ibu_siswa, orangtua_alamat_siswa, orangtua_telepon_siswa, orangtua_pekerjaan_ayah_siswa, orangtua_pekerjaan_ibu_siswa, username_wali, password_wali, nama_wali, pekerjaan_wali, jenis_kelamin_wali, alamat_wali, jabatan_siswa, tempat_lahir_wali, tanggal_lahir_wali, no_handphone_wali) VALUES ('$nisn_siswa', '$nis_siswa', '$nama_siswa', '$jenis_kelamin_siswa', '$kd_kelas_daftar', '$alamat_siswa', '$tempat_lahir_siswa', '$tanggal_lahir_siswa', '$no_handphone_siswa', '$anak_ke_siswa', '$nis_siswa', '$password_siswa', 'Islam', '$status_dalam_keluarga_siswa', '$diterima_tanggal_siswa', '$diterima_semester_siswa', '$sekolah_asal_nama_siswa', '$sekolah_asal_alamat_siswa', '$stl_tahun_siswa', '$stl_nomor_siswa', '$orangtua_nama_ayah_siswa', '$orangtua_nama_ibu_siswa', '$orangtua_alamat_siswa', '$orangtua_telepon_siswa', '$orangtua_pekerjaan_ayah_siswa', '$orangtua_pekerjaan_ibu_siswa', '$nis_siswa', '$password_siswa', '$nama_wali', '$pekerjaan_wali', '$jenis_kelamin_wali', '$alamat_wali', 'siswa', '$tempat_lahir_wali', '$tanggal_lahir_wali', '$no_handphone_wali');";
    $query_tambahBAHASA  .= "INSERT INTO data_wali (nis_siswa_wali, username_wali, password_wali) values ('$nis_siswa','$username_wali','$password_siswa');";

    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'sasindo', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'sasing', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'antro', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt1_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa');";

    //SMT2
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aqh', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'aa', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'fkh', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ski', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkn', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bindo', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'barab', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bing', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'mtk', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ksn', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'penjas', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'sasindo', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'sasing', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'antro', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'tik', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bk', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'sej', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'senbud', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'pkk', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'bjawa', '$nis_siswa');";
    $query_tambahBAHASA  .= "INSERT INTO nilai_siswa_transaksi_smt2_pengetahuan (kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan, kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan, nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan) values ('$kd_kelas_daftar', 'ppmb', '$nis_siswa')";

    if (mysqli_multi_query($connect, $query_tambahBAHASA)) {
      echo "berhasil disimpan";
      header('location:../halaman_administrator_daftar_siswa.php');
    }
    else {
      echo "Gagal simpan Bahasa!";
    }
  } //bahasa

  else {
    echo "Gagal Memilih Jurusan!";
  }


?>
