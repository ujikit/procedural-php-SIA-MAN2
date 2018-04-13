<?php
include_once "koneksi.php";

    $nip_pegawai       = $_GET['nip_pegawai'];
    $kd_kelas_daftar   = $_GET['kd_kelas_daftar'];
    $kd_mata_pelajaran = $_GET['kd_mata_pelajaran'];

    $kkm_rendah_mata_pelajaran_transaksi = $_POST['kkm_rendah_mata_pelajaran_transaksi'];
    $kkm_rendah_mata_pelajaran_transaksi2 = round($kkm_rendah_mata_pelajaran_transaksi, 0);

    $kkm_tengah_mata_pelajaran_transaksi1 = $kkm_rendah_mata_pelajaran_transaksi+1/3*(100-$kkm_rendah_mata_pelajaran_transaksi);
    $nilai_tengah = round($kkm_tengah_mata_pelajaran_transaksi1, 0);
    //$kkm_tengah_mata_pelajaran_transaksi = $_POST['kkm_tengah_mata_pelajaran_transaksi'];
    $kkm_tengah_mata_pelajaran_transaksi2 = round($nilai_tengah, 0);

    $kkm_tinggi_mata_pelajaran_transaksi1 = 100-1/3*(100-$kkm_rendah_mata_pelajaran_transaksi);
    $nilai_tinggi = round($kkm_tinggi_mata_pelajaran_transaksi1, 0);
    //$kkm_tinggi_mata_pelajaran_transaksi = $_POST['kkm_tinggi_mata_pelajaran_transaksi'];
    $kkm_tinggi_mata_pelajaran_transaksi2 = round($nilai_tinggi, 0);

    //DKD SMT 1 DAN 2
    $pengetahuanDKDsmt1   = $_POST['pengetahuanDKDsmt1'];
    $pengetahuanDKDsmt2   = $_POST['pengetahuanDKDsmt2'];

    //smt 1
    $file = json_encode($pengetahuanDKDsmt1, JSON_PRETTY_PRINT);
    $json_pengetahuanDKDsmt1 = json_decode($file, true);
    print_r($json_pengetahuanDKDsmt1);

    //smt2
    $files = json_encode($pengetahuanDKDsmt2, JSON_PRETTY_PRINT);
    $json_pengetahuanDKDsmt2 = json_decode($files, true);
    print_r($pengetahuanDKDsmt2);

    $query_ubahKKM = "UPDATE mata_pelajaran_transaksi set kkm_rendah_mata_pelajaran_transaksi='$kkm_rendah_mata_pelajaran_transaksi2', kkm_tengah_mata_pelajaran_transaksi='$kkm_tengah_mata_pelajaran_transaksi2', kkm_tinggi_mata_pelajaran_transaksi='$kkm_tinggi_mata_pelajaran_transaksi2' where kd_mata_pelajaran_transaksi='$kd_mata_pelajaran'and nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai'and kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar'";
    if (mysqli_query($connect, $query_ubahKKM)) {
      echo "KKM berhasil diubah";
      // echo $json_pengetahuanDKDsmt1[2]."</br>";
      // echo $nip_pegawai."</br>";
      // echo $kd_kelas_daftar."</br>";
    }
    else {
      echo "kkm gagal dirubah";
    }

    //smt 1
    $query_ubahKDMapel  = "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[0]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.1' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[1]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.2' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[2]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.3' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[3]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.4' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[4]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.5' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[5]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.6' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[6]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.7' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[7]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.8' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[8]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.9' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt1 set guru_kompetensi_dasar_pengetahuan_noDKD_smt1='$json_pengetahuanDKDsmt1[9]' where guru_kompetensi_dasar_pengetahuan_noKD_smt1='3.10' and guru_kompetensi_dasar_semester_smt1='1' and guru_kompetensi_dasar_nip_pegawai_smt1='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt1='$kd_kelas_daftar';";

    //smt 2
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[0]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.11' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[1]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.12' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[2]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.13' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[3]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.14' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[4]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.15' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[5]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.16' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[6]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.17' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[7]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.18' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[8]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.19' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar';";
    $query_ubahKDMapel .= "UPDATE guru_kompetensi_dasar_smt2 set guru_kompetensi_dasar_pengetahuan_noDKD_smt2='$json_pengetahuanDKDsmt2[9]' where guru_kompetensi_dasar_pengetahuan_noKD_smt2='3.20' and guru_kompetensi_dasar_semester_smt2='2' and guru_kompetensi_dasar_nip_pegawai_smt2='$nip_pegawai' and guru_kompetensi_dasar_kd_kelas_daftar_smt2='$kd_kelas_daftar'";

  if (mysqli_multi_query($connect, $query_ubahKDMapel)) {

    header('location:../halaman_guru_input_kd_mapel.php');
    echo "berhasil";
  }
  else {
    echo "gagal simpan";
  }

?>
