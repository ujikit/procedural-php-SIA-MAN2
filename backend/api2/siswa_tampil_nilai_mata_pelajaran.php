<?php
require_once "koneksi.php";

$query_tampil_nilai_mata_pelajaran_siswa = mysqli_query($connect, "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='32126321232'");

$array = array();
while($result_tampil_nilai_mata_pelajaran_siswa =  mysqli_fetch_array($query_tampil_nilai_mata_pelajaran_siswa)){
  // array_push($array, array(
  //   'nis_siswa' => $result_tampil_nilai_mata_pelajaran_siswa['nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan'],
  //   'penugasan' => $result_tampil_nilai_mata_pelajaran_siswa['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan']
  //   'nilai_akhir' => $result_tampil_nilai_mata_pelajaran_siswa['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan']
  // ));
  $array[] = $result_tampil_nilai_mata_pelajaran_siswa;
}

// echo json_encode($array);
// mysqli_close($connect);
$data = json_encode($array);
echo $data;
?>
