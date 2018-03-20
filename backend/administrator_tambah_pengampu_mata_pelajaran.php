<?php
include_once "koneksi.php";

$id_kelas_daftar      = str_replace(' ','',$_POST['nama_kelas_mata_pelajaran_transaksi']);
$nama_kelas_mata_pelajaran_transaksi = ($_POST['nama_kelas_mata_pelajaran_transaksi']);
$id_mata_pelajaran_mata_pelajaran_transaksi = $_POST['id_mata_pelajaran_mata_pelajaran_transaksi'];
$kkm_rendah_mata_pelajaran_transaksi = $_POST['kkm_rendah_mata_pelajaran_transaksi'];
$nama_mata_pelajaran_transaksi = addslashes($_POST['nama_mata_pelajaran_transaksi']);
$nama_guru_mata_pelajaran_transaksi = $_POST['nama_guru_mata_pelajaran_transaksi'];
$kelas_guru_mata_pelajaran_transaksi = substr($_POST['nama_kelas_mata_pelajaran_transaksi'],0,2);

$tampilDataNip = mysqli_query($connect, "SELECT nip_pegawai from data_pegawai where nama_pegawai='$nama_guru_mata_pelajaran_transaksi'");
$row = mysqli_fetch_array($tampilDataNip);
$nip_pegawai = $row["nip_pegawai"];

    $query_mata_pelajaran_transaksi = "INSERT INTO mata_pelajaran_transaksi (id_kelas_daftar, nama_kelas_mata_pelajaran_transaksi, id_mata_pelajaran_mata_pelajaran_transaksi, kkm_rendah_mata_pelajaran_transaksi, nama_mata_pelajaran_transaksi, nip_pegawai_mata_pelajaran_transaksi, kelas_mata_pelajaran_transaksi) VALUES ('$id_kelas_daftar', '$nama_kelas_mata_pelajaran_transaksi', '$id_mata_pelajaran_mata_pelajaran_transaksi', '$kkm_rendah_mata_pelajaran_transaksi', '$nama_mata_pelajaran_transaksi', '$nip_pegawai', '$kelas_guru_mata_pelajaran_transaksi{2}') ";

    $query_cek_dulplikat_data = mysqli_query($connect, "SELECT * from mata_pelajaran_transaksi where nama_kelas_mata_pelajaran_transaksi='$nama_kelas_mata_pelajaran_transaksi' && nama_mata_pelajaran_transaksi='$nama_mata_pelajaran_transaksi' && nip_pegawai_mata_pelajaran_transaksi='$nip_pegawai'");

    if (mysqli_num_rows($query_cek_dulplikat_data)>0) {
      echo "Data Sudah Ada!";
     }
    else {
      if (mysqli_query($connect, $query_mata_pelajaran_transaksi)){

        $query_dataPegawai = "SELECT * from data_pegawai inner join mata_pelajaran on data_pegawai.nama_mata_pelajaran_pegawai = mata_pelajaran.nama_mata_pelajaran where nip_pegawai='$nip_pegawai'";
        $query = mysqli_query($connect, $query_dataPegawai);
        $row = mysqli_fetch_array($query);
        $nip_pegawai = $row['nip_pegawai'];
        $id_mata_pelajaran = $row['id_mata_pelajaran'];
        //semester ganjil
        $query_kdGuru   = "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.1','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.2','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.3','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.4','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.5','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.6','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.7','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.8','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.9','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt1(guru_kompetensi_dasar_pengetahuan_noKI_smt1, guru_kompetensi_dasar_pengetahuan_noKD_smt1, guru_kompetensi_dasar_pengetahuan_noDKD_smt1, guru_kompetensi_dasar_nip_pegawai_smt1, guru_kompetensi_dasar_mata_pelajaran_smt1, guru_kompetensi_dasar_kelas_smt1, guru_kompetensi_dasar_kelas_daftar_smt1, guru_kompetensi_dasar_semester_smt1) values ('3','3.10','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '1');";
        //semester genap
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.11','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.12','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.13','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.14','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.15','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.16','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.17','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.18','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.19','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";
        $query_kdGuru  .= "INSERT INTO guru_kompetensi_dasar_smt2(guru_kompetensi_dasar_pengetahuan_noKI_smt2, guru_kompetensi_dasar_pengetahuan_noKD_smt2, guru_kompetensi_dasar_pengetahuan_noDKD_smt2, guru_kompetensi_dasar_nip_pegawai_smt2, guru_kompetensi_dasar_mata_pelajaran_smt2, guru_kompetensi_dasar_kelas_smt2, guru_kompetensi_dasar_kelas_daftar_smt2, guru_kompetensi_dasar_semester_smt2) values ('3','3.20','','$nip_pegawai','$id_mata_pelajaran','$kelas_guru_mata_pelajaran_transaksi', '$id_kelas_daftar', '2');";

        $query_kdGuru  .= "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai' where nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran_mata_pelajaran_transaksi';";
        $query_kdGuru  .= "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan='$nip_pegawai' where nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran_mata_pelajaran_transaksi'";

            // $query_kdGuru .= "INSERT INTO nilai_siswa_transaksi (nama_kelas_nilai_siswa_transaksi, id_mata_pelajaran_nilai_siswa_transaksi, nama_mata_pelajaran_nilai_siswa_transaksi, nis_siswa_nilai_siswa_transaksi, tugas1_nilai_siswa_transaksi, uts_nilai_siswa_transaksi, tugas2_nilai_siswa_transaksi, uas_nilai_siswa_transaksi) values ('$kelas_siswa', 'aa', 'Akidah Akhlak', '$nis_siswa','0','0','0','0');";
            // $query_kdGuru .= "INSERT INTO nilai_siswa_transaksi (nama_kelas_nilai_siswa_transaksi, id_mata_pelajaran_nilai_siswa_transaksi, nama_mata_pelajaran_nilai_siswa_transaksi, nis_siswa_nilai_siswa_transaksi, tugas1_nilai_siswa_transaksi, uts_nilai_siswa_transaksi, tugas2_nilai_siswa_transaksi, uas_nilai_siswa_transaksi) values ('$kelas_siswa', 'bk', 'Bimbingan Konseling', '$nis_siswa','0','0','0','0')";
            if (mysqli_multi_query($connect, $query_kdGuru)) {

              header('location:../halaman_administrator_daftar_kelas_dan_wali_kelas.php');
              echo "Data KD berhasil disimpan";
            }
            else {
              // echo "Gagal simpan KD!";
              echo $nip_pegawai ." </br>";
              echo $id_mata_pelajaran ." </br>";
              echo $id_kelas_daftar ." </br>";
              echo $id_mata_pelajaran_mata_pelajaran_transaksi ." </br>";
            }

      }
      else {
      echo "Gagal Memasukan Data!";
      }
    }

?>
