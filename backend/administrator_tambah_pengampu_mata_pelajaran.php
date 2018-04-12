<?php
include_once "koneksi.php";

$kkm_rendah_mata_pelajaran_transaksi  = $_POST['kkm_rendah_mata_pelajaran_transaksi'];
$kd_kelas_daftar                      = $_POST['kd_kelas_daftar'];
$kd_mata_pelajaran                    = addslashes($_POST['kd_mata_pelajaran']);
$nip_pegawai                          = $_POST['nip_pegawai'];

$tampilDataNip = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
$row = mysqli_fetch_array($tampilDataNip);
$nip_pegawai = $row["nip_pegawai"];

    $query_cek_dulplikat_data = mysqli_query($connect, "SELECT * from mata_pelajaran_transaksi where kd_kelas_daftar_mata_pelajaran_transaksi='$kd_kelas_daftar' && kd_mata_pelajaran_transaksi='$kd_mata_pelajaran' && nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai'");

    if (mysqli_num_rows($query_cek_dulplikat_data)>0) {
      echo "Data Sudah Ada!";
     }
    else {
      $query_mata_pelajaran_transaksi = "INSERT INTO mata_pelajaran_transaksi (kkm_rendah_mata_pelajaran_transaksi, kd_kelas_daftar_mata_pelajaran_transaksi, kd_mata_pelajaran_transaksi, nip_pegawai_mata_pelajaran_transaksi) VALUES ('$kkm_rendah_mata_pelajaran_transaksi', '$kd_kelas_daftar', '$kd_mata_pelajaran', '$nip_pegawai') ";
      if (mysqli_query($connect, $query_mata_pelajaran_transaksi)){

        // $query_dataPegawai = "SELECT * from data_pegawai inner join mata_pelajaran on data_pegawai.nama_mata_pelajaran_pegawai = mata_pelajaran.nama_mata_pelajaran where nip_pegawai='$nip_pegawai'";
        // $query = mysqli_query($connect, $query_dataPegawai);
        // $row = mysqli_fetch_array($query);
        // $nip_pegawai = $row['nip_pegawai'];
        // $kd_mata_pelajaran = $row['kd_mata_pelajaran'];
        //semester ganjil
        $query_kdGuru   = "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.1','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.2','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.3','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.4','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.5','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.6','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.7','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.8','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.9','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_kd_mata_pelajaran_smt1, guru_kompetensi_dasar_kd_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.10','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '1');";
        //semester genap
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.11','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.12','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.13','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.14','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.15','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.16','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.17','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.18','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.19','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_kd_mata_pelajaran_smt2, guru_kompetensi_dasar_kd_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.20','','$nip_pegawai','$kd_mata_pelajaran', '$kd_kelas_daftar', '2');";

        $query_kdGuru  .= "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai' where kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan='$kd_kelas_daftar' && kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$kd_mata_pelajaran';";
        $query_kdGuru  .= "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan='$nip_pegawai' where kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan='$kd_kelas_daftar' && kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$kd_mata_pelajaran'";

            if (mysqli_multi_query($connect, $query_kdGuru)) {

              header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
              echo "Data KD berhasil disimpan";
            }
            else {
              echo "Gagal simpan KD!";
              echo $nip_pegawai ." </br>";
              echo $kd_mata_pelajaran ." </br>";
              echo $kd_kelas_daftar ." </br>";
            }

      }
      else {
      echo "Gagal Memasukan Data!";
      }
    }

?>
