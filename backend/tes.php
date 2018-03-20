<?php
include_once "koneksi.php";

$alquran = addslashes("Al Qur'an Hadits");

$datas1 = array();
$datas2 = array();
$hitung = mysqli_query($connect, "SELECT count(nama_mata_pelajaran) AS jumlah from mata_pelajaran where kelompok_kelas='IPA' && not nama_mata_pelajaran = '$alquran' && not nama_mata_pelajaran = 'Ekonomi Lintas Minat'");
$query = "SELECT * from mata_pelajaran where kelompok_kelas='IPA' && not nama_mata_pelajaran = '$alquran' && not nama_mata_pelajaran = 'Ekonomi Lintas Minat'";
$rows = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($rows)){
      $datas1[] = $row['id_mata_pelajaran'];
      $datas2[] = $row['nama_mata_pelajaran'];
}

$json_format1 = json_encode($datas1, JSON_PRETTY_PRINT);
$json_dataSiswa1 = json_decode($json_format1, true);

$json_format2 = json_encode($datas2, JSON_PRETTY_PRINT);
$json_dataSiswa2 = json_decode($json_format2, true);
// print_r ($json_dataSiswa);
// $i = 1;
// print_r ($json_dataSiswa1[$i]);
// print_r ($json_dataSiswa2[$i]);
// //
// $rows = mysqli_fetch_array($hitung);
// $hitung =  $rows['jumlah'];
// echo $hitung;

$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan) AS jumlah from nilai_siswa_transaksi_smt1_keterampilan");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'keterampilan 1   = '.$hitung;
echo "</br>";
$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan) AS jumlah from nilai_siswa_transaksi_smt1_pengetahuan");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'pengetahuan 1   = '.$hitung;
echo "</br>";
$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial) AS jumlah from nilai_siswa_transaksi_smt1_sosial");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'sosial 1   = '.$hitung;
echo "</br>";
$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual) AS jumlah from nilai_siswa_transaksi_smt1_spiritual");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'spiritual 1   = '.$hitung;
echo "</br>";
echo "</br>";
$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan) AS jumlah from nilai_siswa_transaksi_smt2_keterampilan");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'keterampilan 2   = '.$hitung;
echo "</br>";
$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan) AS jumlah from nilai_siswa_transaksi_smt2_pengetahuan");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'pengetahuan 2   = '.$hitung;
echo "</br>";
$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial) AS jumlah from nilai_siswa_transaksi_smt2_sosial");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'sosial 2   = '.$hitung;
echo "</br>";
$hitung = mysqli_query($connect, "SELECT count(id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual) AS jumlah from nilai_siswa_transaksi_smt2_spiritual");
$rows = mysqli_fetch_array($hitung);
$hitung =  $rows['jumlah'];
echo 'spiritual 2   = '.$hitung;
echo "</br>";
?>
